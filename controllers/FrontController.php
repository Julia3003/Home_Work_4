<?php

class FrontController
{
	public function hello(): void
	{
		echo 'Hello 123';
	}
	
	public function sum(): void
	{
		echo $_POST['first'] + $_POST['second'];
	}
}