<?php

class TaskTeam
{
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
	
	public function showTask()
	{
		echo 'Назва задачі: ' . $this->getTaskName() . 'та опис задачі - ' . $this->getTaskDescription();
	}
	
}
