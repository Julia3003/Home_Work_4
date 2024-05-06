<?php

class Tasks
{
	protected string $taskName;
	
	protected int $priority;
	
	protected string $fileName;
//	protected TaskState $stateTask = TaskState::NotDone;
	
	protected array $tasksList;
	
	public function __construct(string $fileName)
	{
		$this->setFileName($fileName);
		$this->tasksList = $this->getTasks();
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
	 * @return array
	 */
	public function getTasksList(): array
	{
		return $this->tasksList;
	}
	
//	/**
//	 * @return TaskState
//	 */
//	public function getStateTask(): TaskState
//	{
//		return $this->stateTask;
//	}
	
	public function addTask($taskName, $priority, $stateTask = TaskState::NotDone): void
	{
		if ($priority < 1 || $priority > 3) {
			throw new Exception('Некоректно вказано пріорититет');
		}

		$taskId = uniqid();
		$this->tasksList[$taskId] = [
			$taskName,
			$priority,
			$stateTask->value
		];
	}

	protected function getTasks(): array
	{
		$tasks = file($this->getFileName());
		$tasksList = [];
		foreach ($tasks as $task) {
			$taskArray = explode('|', $task);
			$tasksList[$taskArray[0]] = [
				$taskArray[1],
				$taskArray[2],
				trim($taskArray[3])
			];
		}
		uasort($tasksList, function ($a, $b) {
			return $b[1] <=> $a[1];
		});
		return $tasksList;
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
		foreach ($this->tasksList as $key => $task) {
			$fileData .= $key . '|' . implode('|', $task) . PHP_EOL;
		}
		file_put_contents($this->fileName, $fileData);
    }

//	public function completeTask($taskId): bool
//	{
//		$tasks = $this->getTasks();
//		foreach ($tasks as $key => $task) {
//			if($task[0] == $taskId) {
//				$tasks[$key][3] = TaskState::Done->value . PHP_EOL;
//			}
//		}
//		return $this->saveTaskInFile($tasks);
//	}

}
