<?php

class TasksForTechnicalSpecifications
{
	use Validator;
	
	const MIN_LENGTH_TASK_NAME = 5;
	const MIN_LENGTH_TASK_DESCRIPTION = 50;
	const MAX_LENGTH_TASK_NAME = 50;
	const MAX_LENGTH_TASK_DESCRIPTION = 800;
	
	const REQUIRE_DESCRIPTION = 'result';
	
	
	protected string $fileName;
	protected array $taskList = [];
	
	
	public function __construct(string $fileName)
	{
		$this->setFileName($fileName);
		$this->setTaskList();
		
	}
	
	/**
	 * @param string $fileName
	 */
	public function setFileName(string $fileName): void
	{
		$this->fileName = $fileName;
	}
	
	/**
	 * @return string
	 */
	public function getFileName(): string
	{
		return $this->fileName;
	}
	
	public function addTask(string $taskName, string $taskDescription): bool
	{
		$this->validate($taskName, $taskDescription, self::REQUIRE_DESCRIPTION);
		$tasId = uniqid();
		$fileName = $this->getFileName();
		$result = file_put_contents($fileName, "$tasId|$taskName|$taskDescription\n", FILE_APPEND);
		$this->setTaskList();
		return (bool) $result;
	}
	
	protected function setTaskList(): void
	{
		$tasks = file($this->getFileName());
		$taskArray = [];
		if (is_array($tasks)) {
			foreach ($tasks as $task) {
				$taskArray[] = explode('|', $task);
			}
		}
		$this->taskList =  $taskArray;
	}
	
	protected function validate(string $taskName, string $taskDescription, string $requiredWord): void
	{
		$message = '';
		if (!$this->maxLength($taskName, self::MAX_LENGTH_TASK_NAME)
			|| !$this->minLength($taskName, self::MIN_LENGTH_TASK_NAME)
		) {
			$message .= 'The task name must contain no less than ' . self::MIN_LENGTH_TASK_NAME . ' characters and no more than '. self::MAX_LENGTH_TASK_NAME . ' characters ' . PHP_EOL;
		}
		if (!$this->maxLength($taskDescription, self::MAX_LENGTH_TASK_DESCRIPTION) || !$this->minLength($taskDescription, self::MIN_LENGTH_TASK_DESCRIPTION)) {
			$message .= 'The task description must contain no less than ' . self::MIN_LENGTH_TASK_DESCRIPTION . ' characters and no more than ' . self::MAX_LENGTH_TASK_DESCRIPTION . ' characters ' . PHP_EOL;
		}
		if (!$this->consistsOf($taskDescription, $requiredWord)) {
			$message .= 'В описі до задачі необхідно вказати ' . $requiredWord . PHP_EOL;
		}
		if (!$this->isEmpty($message)) {
			throw new Exception($message);
		}
	}
}