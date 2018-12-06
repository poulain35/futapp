<?php
namespace AppBundle\EventListener;

use AppBundle\Component\MenuBuilder;
use SbS\AdminLTEBundle\Event\SidebarMenuEvent;

class SidebarMenuEventListener {

    public function __construct(MenuBuilder $builder)
    {
        $this->builder = $builder;
    }

    public function onShowMenu(SidebarMenuEvent $event)
    {
        foreach ($this->builder->getMenu() as $item) {
            $event->addItem($item);
        }
    }
}