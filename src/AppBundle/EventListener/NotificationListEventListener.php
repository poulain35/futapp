<?php
namespace AppBundle\EventListener;

use SbS\AdminLTEBundle\Event\NotificationListEvent;

class NotificationListEventListener {

    public function onListNotifications(NotificationListEvent $event)
    {
        foreach ($this->getNotifications() as $notify) {
            $event->addNotification($notify);
        }
    }

    protected function getNotifications()
    {
        // ...
        // implement return notification list method
        // ...



        return array("test");
    }
}