<?php

class Cookie
{
	public function createCookie(string $key, string $value, int $timeExpired): bool
	 {
		 if ($timeExpired > 0 && !setcookie($key, $value, time() + $timeExpired, '/')) {
			 throw new Exception('Cookies not set');
		 }
		 return true;
	 }
	
	public function getCookie(string $key): string
	{
		if (!isset($_COOKIE[$key])) {
			throw new Exception('Сookies not found');
		}
		return $_COOKIE[$key];
	}
	
	public function updateCookie(string $key, string $value, int $timeExpired): bool
	{
		if ($timeExpired > 0 && !setcookie($key, $value, time() + $timeExpired, '/')) {
			throw new Exception('Сookies have not been edited');
		}
		return true;
	}
	
	public function deleteCookie(string $key): bool
	{
		if (!setcookie($key, '', time() - 3600, '/')) {
			throw new Exception('Сookies have not been deleted');
		}
		return true;
	}
}