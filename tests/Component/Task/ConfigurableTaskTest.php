<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Task\Tests\Component\Task;

use PHPUnit\Framework\TestCase;
use GrizzIt\Task\Component\Task\ConfigurableTask;

/**
 * @coversDefaultClass \GrizzIt\Task\Component\Task\ConfigurableTask
 */
class ConfigurableTaskTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::execute
     * @covers ::__construct
     */
    public function testExecute(): void
    {
        $task = (function () {
            return true;
        });

        $subject = new ConfigurableTask($task);
        $this->assertEquals(true, $subject->execute());
    }
}
