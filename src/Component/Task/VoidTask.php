<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Task\Component\Task;

use GrizzIt\Task\Common\TaskInterface;

class VoidTask implements TaskInterface
{
    /**
     * Executes the task.
     *
     * @return bool
     */
    public function execute(): bool
    {
        return true;
    }
}
