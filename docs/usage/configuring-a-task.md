# GrizzIT Task - Configuring a task

A task is an object which contains logic to execute a task. This object can
then be added to a task list for execution. A task must implement the
[TaskInterface](src/Common/TaskInterface.php). A configurable implementation is provided in this package in the form of the
[ConfigurableTask](../../src/Component/Task/ConfigurableTask.php). It accepts a
`callable` in the constructor. This callable will be invoked when the task is
executed.

An example of this configurable task would look like the following example:
```php
<?php

use GrizzIt\Task\Component\Task\ConfigurableTask;

$method = (function () {
    return true;
});

$task = new ConfigurableTask($method);
```

The task can then be added to the task list by adding it through the `addTask`
method.

## Further reading

[Back to usage index](index.md)

[Creating a task list](creating-a-task-list.md)
