<?php 

namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Twig\Environment;


class AboutController implements ControllerInterface
{
	
	//passo in construzione twig
	public function __construct(Environment $twig)
	{
		$this->twig = $twig;
	}

	public function execute(ServerRequestInterface $request)
	{

		$tpl_menu = $this->twig->load('header.html');
		$tpl_menu->display();

		$template = $this->twig->load('about.html');
		//con twig posso usare render o display(questo renderiza senza parametri) 
		$template->display();

	}
	
}




 