<?php

use Psr\Container\ContainerInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;//extension files twig :(.html o .twig o .tpl)

return [
    'view_path' => 'src/View',
    Environment::class => function(ContainerInterface $c) {
    	$loader = new FilesystemLoader($c->get('view_path'));
		return new Environment($loader);
    },
      //conessione db 
    'dsn' => 'mysql: host=localhost; dbname=quotidiano;',
    'username' => 'root',
    'password' => '1234',
    PDO::class => function(ContainerInterface $c) {
		return new PDO($c->get('dsn'), $c->get('username'), $c->get('password'));
    },
];
