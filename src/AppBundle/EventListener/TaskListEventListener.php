<?php
namespace AppBundle\EventListener;

use SbS\AdminLTEBundle\Event\TaskListEvent;

class TaskListEventListener {

    public function onListTasks(TaskListEvent $event)
    {
        foreach ($this->getTasks() as $task) {
            $event->addTask($task);
        }
    }

    protected function getTasks()
    {
        // ...
        // implement return task list method
        // ...

        return array("test");
    }
}