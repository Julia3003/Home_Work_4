<?php

class Cookie
{
	public function createCookie(string $key, string $value): void
	 {
       setcookie('$key', '$value', time() +3600, '/');
       exit;
	 }
}