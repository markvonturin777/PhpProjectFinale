<?php 

namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticoloManager;
use Twig\Environment;

ini_set('error_reporting', E_ALL);

class UpdateController implements ControllerInterface
{
	protected $articolo;

	//passo in construzione model e twig
	public function __construct(ArticoloManager $articolo, Environment $twig)
	{
		$this->articolo = $articolo;
		$this->twig = $twig;
	}


	public function execute(ServerRequestInterface $request)
	{
					
			//renderizza header
			$tpl_menu = $this->twig->load('header.html');
			$tpl_menu->display();

			//esse getparse me da tds parametros data,titolo etc
			$bodyParam = $request->getParsedBody();

			//chiama function UPDATE de articManager 
			$postage = $this->articolo->update($bodyParam);

			if (isset($bodyParam)) {
				header("location: /admin");
			}else{
				header("location: /update?metodo_modifica");
			}			
		
	}
	

}



 