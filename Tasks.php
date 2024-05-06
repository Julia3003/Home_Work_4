<?php

class Tasks
{
	protected string $taskName;
	
	protected int $priority;
	
	protected string $fileName = 'tasks.txt';
	
	protected TaskState $stateTask = TaskState::NotDone;
	
	protected array $taskList = [];
	
	public function __construct()
	{
		$this->taskList = $this->getTasks();
	}
	
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
	 * @param TaskState $stateTask
	 */
	public function setStateTask(TaskState $stateTask): void
	{
		$this->stateTask = $stateTask;
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
	
	/**
	 * @return TaskState
	 */
	public function getStateTask(): TaskState
	{
		return $this->stateTask;
	}
	
	public function addTask($taskName, $priority, $stateTask = TaskState::NotDone): bool
	{
		$taskId = uniqid();
		$fileName = $this->getFileName();
		return (bool)file_put_contents($fileName, "$taskId|$taskName|$priority|$stateTask->value\n", FILE_APPEND);
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
	public function deleteTask (string $taskId): bool
	{
		$tasks = array_filter($this->getTasks(), function ($task) use ($taskId) {
			return $task[0] !== $taskId;
		});
		return $this->saveTaskInFile($tasks);
	}
	
	public function completeTask($taskId): bool
	{
		$tasks = $this->getTasks();
		foreach ($tasks as $key => $task) {
			if($task[0] == $taskId) {
				$tasks[$key][3] = TaskState::Done->value . PHP_EOL;
			}
		}
		return $this->saveTaskInFile($tasks);
	}
	
	public function saveTaskInFile(array $tasks): bool
	{
		$tasksString = '';
		foreach ($tasks as $task) {
			$tasksString .= implode('|', $task);
		}
		return (bool) file_put_contents($this->getFileName(), $tasksString);
	}
	
	
}
