<?php

class TaskForTeamАnalyst
{
	use Validator;
	
	const MIN_LENGTH_TASK_NAME = 10;
	const MIN_LENGTH_TASK_DESCRIPTION = 40;
	const MAX_LENGTH_TASK_NAME = 35;
	const MAX_LENGTH_TASK_DESCRIPTION = 950;
	protected string $taskName;
	protected string $taskDescription;
	protected string $taskId;
	
	protected array $taskList = [];
	
	public function __construct(string $taskName, string $taskDescription)
	{
		$this->validate($taskName,$taskDescription);
		$this->taskId = uniqid();
		$this->setTaskName($taskName);
		$this->setTaskDescription($taskDescription);
	}
	
	/**
	 * @param string $taskName
	 */
	public function setTaskName(string $taskName): void
	{
		$this->taskName = $taskName;
	}
	
	/**
	 * @param string $taskDescription
	 */
	public function setTaskDescription(string $taskDescription): void
	{
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
	
	protected function validate(string $taskName, string $taskDescription): void
	{
		$message = '';
		if (!$this->maxLength($taskName, self::MAX_LENGTH_TASK_NAME) || !$this->minLength($taskName, self::MIN_LENGTH_TASK_NAME))
		{
			$message .= 'The task name must contain no less than ' . self::MIN_LENGTH_TASK_NAME . ' characters and no more than ' . self::MAX_LENGTH_TASK_NAME . ' characters ' . PHP_EOL;
		}
		if (!$this->maxLength($taskDescription, self::MAX_LENGTH_TASK_DESCRIPTION) || !$this->minLength($taskDescription, self::MIN_LENGTH_TASK_DESCRIPTION)) {
			$message .= 'The task description must contain no less than ' . self::MIN_LENGTH_TASK_DESCRIPTION . ' characters and no more than ' . self::MAX_LENGTH_TASK_DESCRIPTION . ' characters ' . PHP_EOL;
		}
		if (!$this->isEmpty($message)) {
			throw new Exception($message);
		}
	}
	
	public function showTask(): void
	{
		echo 'Задача id ' . $this->taskId . ' ,назва задачі - ' . $this->getTaskName() . ' та опис задачі - ' . $this->getTaskDescription() . PHP_EOL;
	}
	
}
