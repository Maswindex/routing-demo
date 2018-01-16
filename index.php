<?php
require_once("vendor/autoload.php");

//create an instance of the Base class
$f3 = Base::instance();

$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function () {
    $view = new View;
    echo $view->render('views/home.php');
});

//Define a page1 route
$f3->route('GET /page1', function () {
    echo '<h2>Page 1<h2>';
});

//Define a page1 route
$f3->route('GET /jewelry/rings/toe-rings', function () {
    $template = new Template();
    echo $template->render('views/toe-rings.html');
});

//run fat free
$f3->run();
