<?php
class TextOutput
{
	private string $text = "some text";
	
	
	public function __construct()
	{
		$this->setText();
	}
	
	/**
	 * @param string $text
	 */
	public function setText(string $text = "some text"): void
	{
		$this->text = $text;
	}
	
	/**
	 * @return string
	 */
	public function getText(): string
	{
		return $this->text;
	}
	
	
	function print(): void
	{
		$uppercase = ucfirst($this->text);
	}
	
}