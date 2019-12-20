<?php 

namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticoloManager;
use Twig\Environment;


class ChangeController implements ControllerInterface
{
	protected $articolo;

	public function __construct(ArticoloManager $articolo, Environment $twig)
	{
		$this->articolo = $articolo;
		$this->twig = $twig;
	}


	public function execute(ServerRequestInterface $request)
	{
					
		//renderizza header
		$tpl_menu = $this->twig->load('headerAdmin.html');
		$tpl_menu->display();
		

		//chiama form per modificare l'articolo
		$template = $this->twig->load('update.html');
		
		
		$idArticolo = $_GET['metodo_modifica'];
		
		//chiamo metodo selectbyid di ArticoloManager
		$postage= $this->articolo->selectById($idArticolo);
				
		//inserisce con twig
		$parametros = array();
		$parametros['ID']= $postage->id;
		$parametros['DATA']= $postage->data;
		$parametros['TITOLO']=$postage->titolo;
		$parametros['TESTO']=$postage->testo;

		$conteudo = $template->render($parametros);
		echo $conteudo;

		
	}
	

}



 