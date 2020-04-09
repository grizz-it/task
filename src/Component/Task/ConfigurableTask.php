<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Task\Component\Task;

use GrizzIt\Task\Common\TaskInterface;

class ConfigurableTask implements TaskInterface
{
    /**
     * Contains the execution instructions for the task.
     *
     * @var callable
     */
    private $task;

    /**
     * Constructor.
     *
     * @param callable $task
     */
    public function __construct(callable $task)
    {
        $this->task = $task;
    }

    /**
     * Executes the task.
     *
     * @return bool
     */
    public function execute(): bool
    {
        return ($this->task)();
    }
}
