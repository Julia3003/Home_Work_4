<?php

class TasksForTechnicalSpecifications
{
	protected string $taskName;
	protected string $taskDescription;
	
	protected string $fileName = 'tasks.txt';
	
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
	 * @return string
	 */
	public function getTaskDescription(): string
	{
		return $this->taskDescription;
	}
	
	/**
	 * @return string
	 */
	public function getFileName(): string
	{
		return $this->fileName;
	}
	
	public function addtask(string $taskName, string $taskDescription): bool
	{
		$tasId = uniqid();
		$fileName = $this->getFileName();
		return (bool) file_put_contents($fileName, "$tasId|$taskName|$taskDescription\n", FILE_APPEND);
	}
	
	public function getTasks(): array
	{
	
	}
}