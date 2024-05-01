<?php
class TextOutput
{
	private string $text = "some text";
	
	
	public function __construct(string $text)
	{
		$this->setText() = $text;
	}
	
	/**
	 * @param string $text
	 */
	public function setText(string $text): void
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