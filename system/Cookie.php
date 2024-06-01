<?php

class Cookie
{
	public function createCookie(string $key, string $value, int $timeExpired): bool
	 {
		 if ($timeExpired <= 0) {
			 throw new Exception('Cookies not set. Time expired must be more than 0');
		 }
		 if (!setcookie($key, $value, time() + $timeExpired, '/')) {
			 throw new Exception('Cookies not set');
		 }
		 return true;
	 }
	
	public function getCookie(string $key): string
	{
		$this->isExistCookie($key);
		return $_COOKIE[$key];
	}
	
	public function isExistCookie(string $key): void
	{
		if (!isset($_COOKIE[$key])) {
			throw new Exception('Сookies not exist');
		}
	}

	public function deleteCookie(string $key): bool
	{
		$this->isExistCookie($key);
		if (!setcookie($key, '', time() - 3600, '/')) {
			throw new Exception('Сookies have not been deleted');
		}
		return true;
	}
}