<?php
namespace AppBundle\Component;

use SbS\AdminLTEBundle\Model\MenuItemModel;
use SbS\AdminLTEBundle\Model\MenuItemInterface;

class MenuBuilder {

    public function getMenu() {

        // Menu Label
        $label_main = new MenuItemModel('MAIN NAVIGATION');

        // One Level Menu
        $item_info = (new MenuItemModel('Information'))
            ->setRoute('sbs_adminlte_all_notifications')
            ->setIcon('fa fa-circle-o text-blue')
            ->addBadge('17', MenuItemInterface::COLOR_RED)
            ->addBadge('new');

        // Multi Level Menu
        $item_multilevel = (new MenuItemModel('Multilevel'))
            ->setIcon('fa fa-share')
            ->addChild(
                (new MenuItemModel('Level One'))
                    ->addChild(
                        (new MenuItemModel('Level Two'))
                            ->setChildren([
                                (new MenuItemModel('Level Three'))->setRoute('sbs_adminlte_user_profile'),
                                (new MenuItemModel('Level Three'))->setRoute('sbs_adminlte_all_tasks')
                            ])
                    )
                    ->addChild((new MenuItemModel('Level Two'))->setRoute('sbs_adminlte_all_notifications'))
            )
            ->addChild((new MenuItemModel('Level One'))->setRoute('sbs_adminlte_user_profile')->addBadge('new'));
        // ...

        return [
            $label_main,
            $item_multilevel,
            $item_info
        ];
    }
}