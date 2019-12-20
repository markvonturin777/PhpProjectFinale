<?php 
declare(strict_types=1);

namespace SimpleMVC\Controller;

use Psr\Http\Message\ServerRequestInterface;
use Twig\Environment;

class ErroController implements ControllerInterface
{
	//obs. Environment è per twig e Engine per plates
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function execute(ServerRequestInterface $request)
    {
        $template = $this->twig->load('error.html');
        $template->display();
        
    }
}



