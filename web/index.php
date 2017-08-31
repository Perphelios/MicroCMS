<?php
    require_once __DIR__.'/../vendor/autoload.php';
    $app = new Silex\Application();
    // enable the debug mode
    $app['debug'] = true;
    // TIP : L'instruction "Require" inclut et exécute le fichier php.
    // De plus, il stoppe l'exécution du fichier source en cas de soucis alors qu'include ne donne qu'un avertissement
    require __DIR__.'/../app/config/dev.php';
    require __DIR__.'/../app/app.php';
    require __DIR__.'/../app/routes.php';
    $app->run();

   // TIP : Le fait de ne pas mettre de "? >" à la fin d'un fichier dédié à un fichier réservé à du php est une bonne pratique et permet de ne pas inclure de caractères en trop.