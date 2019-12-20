<?php 

namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticoloManager;
use Twig\Environment;


class CreateController implements ControllerInterface
{
	protected $articolo;

	public function __construct(ArticoloManager $articolo, Environment $twig)
	{
		$this->articolo = $articolo;
		$this->twig = $twig;
	}


	public function execute(ServerRequestInterface $request)
	{
					
		$tpl_menu = $this->twig->load('headerAdmin.html');
		$tpl_menu->display();

		//form di inserimento nuovo articolo
		$template = $this->twig->load('create.html');
		$parametros = array();
		$conteudo = $template->render($parametros);
		echo $conteudo;
				
	}
	

}



 