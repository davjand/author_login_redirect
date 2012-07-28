<?php

class extension_author_login_redirect extends Extension
{
	public function getSubscribedDelegates()
	{
		return array(
			array(
				'page' => '/login/',
				'delegate' => 'AuthorLoginSuccess',
				'callback' => 'AuthorLoginSuccess'
			)
		);
	}
	
	

	public function AuthorLoginSuccess($context)
	{
		if(ISSET($_GET['redirect'])){
			$redirect=$_GET['redirect'];
			redirect($redirect);
		}		
	}
}
