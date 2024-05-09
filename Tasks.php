<?php

class Tasks
{
	protected string $fileName;
	
	protected array $tasksList;
	
	public function __construct(string $fileName)
	{
		$this->setFileName($fileName);
		$this->tasksList = $this->getTaskListFromFile();
	}
	
	/**
	 * @param string $taskName
	 * @return void
	 */
	public function validateTaskName(string $taskName): void
	{
		if (strlen($taskName) < 5) {
			throw new Exception(message: 'Task name consists of less than 5 characters');
		}
	}
	
	/**
	 * @param int $priority
	 * @return void
	 */
	public function validatePriority(int $priority): void
	{
		if ($priority < 1 || $priority > 3) {
			throw new Exception(message: 'The priority can only have a value of 1,2,3:
				- 3 - high priority;
				- 2 - medium priority;
				- 1 - low priority.'
			);
		}
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
	
	/**
	 * @return array
	 */
	public function getTasksList(): array
	{
		return $this->tasksList;
	}
	
	public function addTask(string $taskName, int $priority, TaskState $stateTask = TaskState::NotDone): void
	{
		$this->validatePriority($priority);
		$this->validateTaskName($taskName);

		$taskId = uniqid();
		$this->tasksList[$taskId] = [
			$taskName,
			$priority,
			$stateTask->value
		];
	}
	
	protected function getTaskListFromFile(): array
	{
		$tasks = file($this->getFileName());
		$taskList = [];
		foreach ($tasks as $task) {
			$taskArray = explode('|', $task);
			$taskList[$taskArray[0]] = [
				$taskArray[1],
				$taskArray[2],
				trim($taskArray[3])
			];
		}
		return $taskList;
	}

	protected function getTasks(): array
	{
		uasort($this->tasksList, function ($a, $b) {
			return $b[1] <=> $a[1];
		});
		return $this->tasksList;
	}
	
	public function deleteTask (string $taskId): void
	{
		if (!array_key_exists($taskId, $this->tasksList)) {
			throw new Exception('Завдання з вказаним id' . $taskId . 'не знайдено');
		}
		unset($this->tasksList[$taskId]);
	}
	
	public function __destruct()
	{
		$fileData = '';
		foreach ($this->getTasks() as $key => $task) {
			$fileData .= $key . '|' . implode('|', $task) . PHP_EOL;
		}
		file_put_contents($this->fileName, $fileData);
    }

	public function completeTask(string $taskId): void
	{
		if (!array_key_exists($taskId, $this->tasksList)) {
			throw new Exception('Завдання з вказаним id' . $taskId . ' не знайдено');
		}
		$this->tasksList[$taskId][2] = TaskState::Done->value;
	}
}
