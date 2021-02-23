<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Task\Component;

use Iterator;
use GrizzIt\Task\Common\TaskInterface;
use GrizzIt\Task\Common\TaskListInterface;

class TaskList implements Iterator, TaskListInterface
{
    /**
     * Contains the tasks.
     *
     * @var TaskInterface[]
     */
    private array $tasks = [];

    /**
     * Contains the current key for the internal iterator.
     *
     * @var int
     */
    private int $key = 0;

    /**
     * Adds a task to the task list.
     *
     * @param TaksInterface $task
     * @param string $name
     *
     * @return void
     */
    public function addTask(TaskInterface $task, string $name): void
    {
        $this->tasks[$name] = $task;
    }

    /**
     * Retrieves the current percentage of finished tasks.
     *
     * @return float
     */
    public function current(): float
    {
        return (100 / count(array_keys($this->tasks))) * $this->key;
    }

    /**
     * Retrieves the name of the current task.
     *
     * @return string
     */
    public function key(): string
    {
        $keys = array_keys($this->tasks);

        return $keys[$this->key];
    }

    /**
     * Execute the task and continues to the next step in the iterator.
     *
     * @return void
     */
    public function next(): void
    {
        $keys = array_keys($this->tasks);
        $key = $keys[$this->key];
        // Execute the current task.
        $this->tasks[$key]->execute();
        $this->key++;
    }

    /**
     * Sets the internal pointer to 0.
     */
    public function rewind(): void
    {
        $this->key = 0;
    }

    /**
     * Evaluates the current value.
     *
     * @return bool
     */
    public function valid(): bool
    {
        $keys = array_keys($this->tasks);

        return isset($keys[$this->key]);
    }
}
