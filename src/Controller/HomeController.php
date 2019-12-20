<?php 
namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticoloManager;
use Twig\Environment;

session_start();//controllo logout con sessione

class HomeController implements ControllerInterface
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
					
		//renderizza header
		$tpl_menu = $this->twig->load('header.html');
		$tpl_menu->display();

			
		if (isset($_GET['pagina']) && $_GET['pagina'] != null) { 
			//chiamo metodo singlepage che renderizza articolo singolo
			$this->singlePage();
			exit();
		}


		//renderizza view de de default
		$template = $this->twig->load('home.html');
		$parametros = array();
		//prendo param articoli del ciclo for in home.hmtl
		$parametros['articoli'] = $this->articolo->selectAll();
		$conteudo = $template->render($parametros);
		echo $conteudo;
		
	}




	public function singlePage()
	{

		$template = $this->twig->load('single.html');
		
		$idArticolo = $_GET['pagina'];
		$postage = $this->articolo->selectById($idArticolo);

		$parametros = array();
		$parametros['TITLE']= 'Quotidiano Online';
		$parametros['TITOLO']=$postage->titolo;
		$parametros['TESTO']=$postage->testo;
		$parametros['IMAGE']=$postage->image;

		$conteudo = $template->render($parametros);
		echo $conteudo;

		
	}

}
