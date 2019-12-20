<?php

namespace SimpleMVC\Controller;
use Psr\Http\Message\ServerRequestInterface;

session_start();

class LogoutController implements ControllerInterface
{

	public function execute(ServerRequestInterface $request)
	{
	
		//session_start();
		if(isset($_SESSION["email"]))
		{
			//se esiste destroy e torna in login
			session_destroy();
			header("location: /login");

		}else{ //se non existe continua in admin
			header("location: /admin");
		}
		 

	}
	
}


