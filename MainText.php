<?php
class MainText
{
	protected string $text;
	
	public function __construct(string $text = "some text")
	{
		$this->setText($text);
	}
	
	/**
	 * @param string $text
	 * @return void
	 * @throws Exception
	 */
	public function setText(string $text): void
	{
		$this->validate($text);
		$this->text = $text;
	}
	
	/**
	 * @return string
	 */
	public function getText(): string
	{
		return $this->text;
	}
	
	private function validate(string $string): void
	{
		if(strlen($string) < 2) {
			throw new Exception(message: 'Invalid string');
		}
	}
	
	
	function print(): string
	{
		return ucfirst($this->text);
	}
	
}