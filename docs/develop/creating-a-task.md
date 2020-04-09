# GrizzIT Task - Creating a task

A task can be created by creating a new class which implements the
[TaskInterface](../../src/Common/TaskInterface.php). The task should contain
its' logic in the `execute` method. The constructor of the implementation can
be used to configure the task. However it is impossible to send any parameters
to the task during execution. So all of this data should be available prior to
the execution. The return type of the `execute` method must always be a boolean.
In the following example a class writes some data to a task:

```php
<?php
namespace MyCompany\MyTask\Component\Task;

use GrizzIt\Task\Common\TaskInterface;

class MyTaksImplementation implements TaskInterface
{
    /** @var string */
    private $path;

    /** @var string */
    private $data;

    /**
     * Constructor.
     *
     * @param string $path
     * @param string $data
     */
    public function __construct(string $path, string $data)
    {
        $this->path = $path;
        $this->data = $data;
    }

    /**
     * Executes the task.
     *
     * @return bool
     */
    public function execute(): bool
    {
        return file_put_contents($this->path, $this->data) !== false;
    }
}
```

## Further reading

[Back to development index](index.md)
