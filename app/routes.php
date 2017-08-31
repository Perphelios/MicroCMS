<?php
// Home page
// TIP : This fonction is anonymous, see also the closure concept
$app->get('/', function () use ($app) {

    // Old fashioned code (before using TWIG)
    // require '../src/model-obsolete.php';
    $articles = $app['dao.article']->findAll();

    return $app['twig']->render('index.html.twig', array('articles' => $articles));

    // Old fashioned code (before using TWIG)
    // ob_start();             // start buffering HTML output
    // require '../views/view-obsolete.php';
    // $view = ob_get_clean(); // assign HTML output to $view
    // return $view;
})->bind('home');

// Article details with comments
$app->get('/article/{id}', function ($id) use ($app) {
    $article = $app['dao.article']->find($id);
    $comments = $app['dao.comment']->findAllByArticle($id);
    return $app['twig']->render('article.html.twig', array('article' => $article, 'comments' => $comments));
})->bind('article');