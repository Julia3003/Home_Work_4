<?php

class TaskList
{
	protected string $taskName;
	protected int $priority;
	
	protected string $fileName = 'tasks.txt';


public function __construct(string $taskName, protected int $priority)
{
	$this->setTaskName($taskName);
	$this->setPriority($priority);
}

/**
 * @param string $taskName
 * @return void
 */
public function setTaskName(string $taskName): void
{
	if(strlen($taskName) < 5) {
		throw new Exception(message: 'Task name consists of less than 5 characters');
	}
	$this->taskName = $taskName;
}
	
	/**
	 * @param int $priority
	 * @return void
	 */
public function setPriority(int $priority): void
{
	if($priority <= 0 && $priority >= 4) {
		throw new Exception(message: 'The priority can only have a value of 1,2,3:
- 1 - high priority;
- 2 - medium priority;
- 3 - low priority.');
	}
	$this->priority = $priority;
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
	public function getTaskName(): string
	{
		return $this->taskName;
	}
	
	/**
	 * @return int
	 */
	public function getPriority(): int
	{
		return $this->priority;
	}
	
	/**
	 * @return string
	 */
	public function getFileName(): string
	{
		return $this->fileName;
	}
	
	public function addTask($taskName, $priority)
	{
		$taskId = uniqid();
		$fileName = 'tasks.txt';
		file_put_contents($fileName, "$taskId|$this->taskName|$this->priority\n", FILE_APPEND);
	}
	
	public function getTasks()
	{
		$tasks = file($this->fileName);
		foreach ($tasks as $key => $task) {
			$task = explode('|', $task);
			array_walk($task, function (&$value) {
				$value = trim($value);
			});
			$tasks[$key] = $task;
			print_r($tasks[$key]);
		}
	}
	

	
}