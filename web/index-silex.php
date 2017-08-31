<?php
    // TIP : __DIR__ est une constante magique PHP qui contient le chemin absolu du dossier qui contient le fichier PHP courant.
    require_once __DIR__.'/../vendor/autoload.php';
    $app = new Silex\Application();

    // Première route : se déclenche si on arrive sur l'url "index-silex.php"
    $app->get('/', function () {
        return 'Hello world';
    });

    // Seconde route : se déclenche si on arrive sur l'url "index-silex.php/hello/..."
    $app->get('/hello/{name}', function ($name) use ($app) {

        return 'Hello ' . $app->escape($name);

    });
    $app->run();