<?php 
namespace Pusher\Admin\Controllers;

class Home extends \Admin\Controllers\BaseAuth 
{    
    public function index()
    {
        $this->app->set('meta.title', 'Dashboard | Pusher');
       // $this->pusher->trigger('my-channel', 'my_event', 'hello world');
        
    	$view = \Dsc\System::instance()->get('theme');
    	echo $view->render('Pusher/Admin/Views::home/index.php');
    }
}