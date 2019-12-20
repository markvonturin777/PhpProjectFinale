About the project:


1) Per aprire il progetto e far funzionare il database:
* Importare il file quotidiano.sql, presente nella cartella root del progetto, su mysql (es.phpmyadmin)

* Inserire la password de mysql, se avete una, nela voce 'password' => '', del file container.php nella cartella "config". Altrimenti lasciate vuota. Fare lo stesso se avete un user diverso da root.

2) Per accedere al database attraverso il login (Area Riservata Amministratore) si entra con email esistente su db e la password: its2019.
Esempio:
Email: admin@gmail.com
Password: its2019

3) Utilizzo di:
* PHP-DI per implementare un DIC (Dependency Injection Container) per riunire tutte le dipendenze in una unica classe, il Container.
* PHPUNIT per realizzare gli unit tests
* standard psr-4 per autoload delle classi
* template Twig per la gestione di template html
* zendframework/zend-diactoros (psr-7) per la gestione dei messagi HTTP.

3) Codice sorgente disponibile in: https://github.com/markvonturin777/PhpProjectFinale





