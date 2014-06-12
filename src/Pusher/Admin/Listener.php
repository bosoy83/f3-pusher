<?php
namespace Pusher\Admin;

class Listener extends \Prefab
{

    public function onSystemRebuildMenu($event)
    {
        if ($model = $event->getArgument('model'))
        {
            $root = $event->getArgument('root');
            $emails = clone $model;
            
            $emails->insert(array(
                'type' => 'admin.nav',
                'priority' => 100,
                'title' => 'Pusher',
                'icon' => 'fa fa-envelope',
                'is_root' => false,
                'tree' => $root,
                'base' => '/admin/pusher'
            ));
            
            $children = array(
                array(
                    'title' => 'Dashboard',
                    'route' => './admin/pusher',
                    'icon' => 'fa fa-dashboard'
                ),
                array(
                    'title' => 'Settings',
                    'route' => './admin/pusher/settings',
                    'icon' => 'fa fa-cogs'
                )
            );
            $emails->addChildren($children, $root);
            
            \Dsc\System::instance()->addMessage('Pusher added its admin menu items.');
        }
    }
}