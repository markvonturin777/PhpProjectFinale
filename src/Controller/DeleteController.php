<?php 

namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use SimpleMVC\Model\ArticoloManager;
use Twig\Environment;


class DeleteController implements ControllerInterface
{
	protected $articolo;

	public function __construct(ArticoloManager $articolo, Environment $twig)
	{
		$this->articolo = $articolo;
		$this->twig = $twig;
	}


	public function execute(ServerRequestInterface $request)
	{
					
		//renderizza headerAdmin
		$tpl_menu = $this->twig->load('headerAdmin.html');
		$tpl_menu->display();
		

		$idArticolo = $_GET['metodo_delete'];

		$postage= $this->articolo->delete($idArticolo);//chiama metodo delete classe Manager
		

		if (isset($idArticolo)) {
			echo '<script>alert("Cancellazione eseguita con successo!");</script>';
		 	echo '<script>location.href="/admin"</script>';
		}
		else{
			echo '<script>alert("'.$e->getMessage().'");</script>';
			echo '<script>location.href="/admin"</script>';

		}

		
	}
	

}



 