<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Task\Tests\Component;

use PHPUnit\Framework\TestCase;
use GrizzIt\Task\Component\TaskList;
use GrizzIt\Task\Common\TaskInterface;

/**
 * @coversDefaultClass \GrizzIt\Task\Component\TaskList
 */
class TaskListTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::addTask
     * @covers ::current
     * @covers ::key
     * @covers ::next
     * @covers ::rewind
     * @covers ::valid
     */
    public function testIterator(): void
    {
        $subject = new TaskList();

        $subject->addTask($this->createMock(TaskInterface::class), 'My task');

        foreach ($subject as $name => $percentage) {
            $this->assertEquals(0, $percentage);
            $this->assertEquals('My task', $name);
        }
    }
}
