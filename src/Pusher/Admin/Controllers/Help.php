<?php 
namespace Pusher\Admin\Controllers;

class Help extends \Admin\Controllers\BaseAuth 
{    
    public function index()
    {
        $this->app->set('meta.title', 'Help | Pusher');
       // $this->pusher->trigger('my-channel', 'my_event', 'hello world');
        
    	$view = \Dsc\System::instance()->get('theme');
    	echo $view->render('Pusher/Admin/Views::help/index.php');
    }
}