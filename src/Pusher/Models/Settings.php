<?php 
namespace Pusher\Models;

class Settings extends \Dsc\Mongo\Collections\Settings
{
    protected $__type = 'pusher.settings';
    
    public $pusher = array(
        'app_id' => null,
    	'key' => null, 
        'secret' => null
    );
    
  
}