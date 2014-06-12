<?php 
class PusherBootstrap extends \Dsc\Bootstrap{
	protected $dir = __DIR__;
	protected $namespace = 'Pusher';
	
	// dont do anything for admin
	protected function preAdmin(){
		
	}
	// dont do anything for admin
	protected function preSite(){

	}
}
$app = new PusherBootstrap();