# GrizzIT Task - Creating a task list

A task list is a simple iterable object which contains a set of tasks.
After the tasks have been added, the object can be iterated to execute the tasks.

Create a new task list by simply instantiating it.
```php
<?php

use GrizzIt\Task\Component\TaskList;

$taskList = new TaskList();
```

Then a task can be added by calling the addTask method.

```php
<?php

use GrizzIt\Task\Common\TaskInterface;

/** @var TaskInterface $task */
$taskList->addTask($task, 'My task');
```

To execute all tasks after they have been added to the list, iterate over it in a foreach loop.

The loop returns the current task name as the key and the percentage of tasks completed in the value node.

```php
<?php

foreach($taskList as $name => $percentage)
{
    echo sprintf(
        'Currently executing task: %s (%d%%)).',
        $name,
        $percentage
    );
}
```

## Further reading

[Back to usage index](index.md)

[Configuring a task](configuring-a-task.md)
