<?php 
namespace Pusher\Admin\Controllers;

class Settings extends \Admin\Controllers\BaseAuth 
{
	use \Dsc\Traits\Controllers\Settings;
	
	protected $layout_link = 'Pusher/Admin/Views::settings/default.php';
	protected $settings_route = '/admin/mailer/settings';
    
    protected function getModel()
    {
        $model = new \Pusher\Models\Settings;
        return $model;
    }
}