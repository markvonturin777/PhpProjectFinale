<?php 

namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticoloManager;
use Twig\Environment;

session_start();

class LoginController implements ControllerInterface
{
	
	protected $articolo;

	public function __construct(ArticoloManager $articolo, Environment $twig)
	{
		$this->articolo = $articolo;
		$this->twig = $twig;
	}


	public function execute(ServerRequestInterface $request)
	{

		$_SESSION["email"]= $_POST['email'];
				
		//renderizza page login
		$template = $this->twig->load('login.html');
		$template->display();

		$bodyParam = $request->getParsedBody();
		//var_dump($bodyParam['email']);
				

		//call getLogin from ArticoloManager
		$paramLogin = $this->articolo->getLogin($bodyParam);			

	}
	
}




 