<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Task\Common;

interface TaskInterface
{
    /**
     * Executes the task.
     *
     * @return bool
     */
    public function execute(): bool;
}
