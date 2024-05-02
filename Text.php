<?php

class Text extends MainText
{
	function print(): string
	{
		return strtoupper($this->text);
	}
}