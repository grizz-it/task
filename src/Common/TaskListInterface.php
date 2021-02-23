<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Task\Common;

use Traversable;
use GrizzIt\Task\Common\TaskInterface;

interface TaskListInterface extends Traversable
{
    /**
     * Adds a task to the task list.
     *
     * @param TaskInterface $task
     * @param string $name
     *
     * @return void
     */
    public function addTask(TaskInterface $task, string $name): void;
}
