<?php 

namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticoloManager;
use Twig\Environment;

session_start();
$msg = "";

class AdminController implements ControllerInterface
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

		if(isset($_SESSION["email"]))
		  $msg= 'Welcome'." ".$_SESSION["email"];
		else
		  	header("location: /login");

				
		//renderizza view 'admin' con la tbl di modifica dell' articolo
		$template = $this->twig->load('admin.html');
		$parametros = array();
		$parametros['MSG']= $msg;
		$parametros['articoli'] = $this->articolo->selectAll();
		$conteudo = $template->render($parametros);
		echo $conteudo;	

	}	


}





