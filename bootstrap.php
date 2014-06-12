<?php 
class PusherBootstrap extends \Dsc\Bootstrap{
	protected $dir = __DIR__;
	protected $namespace = 'Pusher';
	
	// dont do anything for admin
	protected function preAdmin(){
		$container = \Dsc\System::instance()->get('container');
			
		$container->share( 'pusher', function() {
			$settings = \Pusher\Models\Settings::fetch();
			return  new \Pusher\Pusher($settings->{'pusher.key'}, $settings->{'pusher.secret'}, $settings->{'pusher.app_id'});
			 
		} );
		
	}
	// dont do anything for admin
	protected function preSite(){
		$settings = \Pusher\Models\Settings::fetch();
		
	}
	
	protected function runAdmin()
	{	
		parent::runAdmin();
		\Dsc\System::instance()->get('router')->mount( new \Pusher\Admin\Routes, $this->namespace );
		
		
	
	}
	
	protected function runSite()
	{
		parent::runSite();
	}
}
$app = new PusherBootstrap();