<?php
namespace Pusher;

class Routes extends \Dsc\Routes\Group
{

    public function initialize()
    {
        $f3 = \Base::instance();
        
        $this->setDefaults(array(
            'namespace' => '\Pusher',
            'url_prefix' => '/pusher'
        ));
    }
}