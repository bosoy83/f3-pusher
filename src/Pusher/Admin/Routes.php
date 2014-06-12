<?php
namespace Pusher\Admin;

class Routes extends \Dsc\Routes\Group
{
    public function initialize()
    {	
    	
        $this->setDefaults(array(
            'namespace' => '\Pusher\Admin\Controllers',
            'url_prefix' => '/admin/pusher'
        ));
        
        $this->addSettingsRoutes();
        
        $this->add( '', 'GET', array(
            'controller' => 'Home',
            'action' => 'index'
        ) );
                
   
    }
}