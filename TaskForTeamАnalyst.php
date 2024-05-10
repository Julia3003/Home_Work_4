<?php

class TaskForTeamАnalyst
{
	use Validator;
	protected string $taskName;
	protected string $taskDescription;
	
	protected array $taskList = [];
	
	public function __construct(string $taskName, string $taskDescription)
	{
		$taskId = uniqid();
		$this->taskList[$taskId] = [
			'taskName' => $taskName,
			'taskDescription' => $taskDescription
		];
	}
	
	/**
	 * @param string $taskName
	 */
	public function setTaskName(string $taskName): void
	{
		$minLength = 5;
		$maxLength = 35;
		if(!$this->checkString($taskName)) {
			throw new Exception('Task description is invalid');
		}elseif(!$this->minLength($taskName, $minLength) || !$this->maxLength($taskName, $maxLength) ) {
			throw new Exception('Task name consists of less than . $minLength . characters and no more than . $maxLength . characters');
		}
		$this->taskName = $taskName;
	}
	
	/**
	 * @param string $taskDescription
	 */
	public function setTaskDescription(string $taskDescription): void
	{
		$minLength = 15;
		$maxLength = 355;
		$requiredWord = 'Очікуємий результат від доопрацювання';
		if(!$this->checkString($taskDescription)) {
			throw new Exception('Task description is invalid');
		} elseif(!$this->minLength($taskDescription, $minLength) || !$this->maxLength($taskDescription, $maxLength) ) {
			throw new Exception('Task description consists of less than 5 characters and no more than 35 characters');
		}elseif (!$this->consistsOf($requiredWord)) {
			throw new Exception('В описі необхідно вказати - Очікуємий результат від доопрацюванняу');
		}
		$this->taskDescription = $taskDescription;
	}
	
	/**
	 * @return string
	 */
	public function getTaskName(): string
	{
		return $this->taskName;
	}
	
	/**
	 * @return string
	 */
	public function getTaskDescription(): string
	{
		return $this->taskDescription;
	}
	
	public function showTask()
	{
		echo 'Назва задачі: ' . $this->getTaskName() . 'та опис задачі - ' . $this->getTaskDescription();
	}
	
}
