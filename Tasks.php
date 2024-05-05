<?php

class Tasks
{
	protected string $taskName;
	protected int $priority;
	
	protected string $fileName = 'tasks.txt';
	
	protected TaskState $stateTask;
	
	
	/**
	 * @param string $taskName
	 * @return void
	 */
	public function setTaskName(string $taskName): void
	{
		if (strlen($taskName) < 5) {
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
		if ($priority <= 0 && $priority >= 4) {
			throw new Exception(message: 'The priority can only have a value of 1,2,3:
				- 1 - high priority;
				- 2 - medium priority;
				- 3 - low priority.'
			);
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
	
	public function addTask($taskName, $priority): bool
	{
		$taskId = uniqid();
		$fileName = $this->getFileName();
		return (bool)file_put_contents($fileName, "$taskId|$taskName|$priority\n", FILE_APPEND);
	}
	
	public function getTasks(): array
	{
		$tasks = file($this->getFileName());
		$taskArray = [];
		foreach ($tasks as $task) {
			$taskArray[] = explode('|', $task);
		}
		usort($taskArray, function ($a, $b) {
			return $b[2] <=> $a[2];
		});
		return $taskArray;
		
	}
	public function deleteTask (string $taskId): array
	{
		$tasks = array_filter($this->getTasks(), function ($task) use ($taskId) {
			return $task[0] !== $taskId;
		});
		$tasksString = '';
		foreach ($tasks as $task) {
			$tasksString .= implode('|', $task);
		}
		
		file_put_contents($this->getFileName(), $tasksString);
		var_dump($tasks);
		return $tasks;
		
	}
	
	public function completeTask($taskId)
	{
		$tasks = $this->getTasks();
		foreach ($tasks as $task) {
			if($task[0] == $taskId) {
				$this->TaskState::Done;
			}
		}
	}
	
	
	
}
