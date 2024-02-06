<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once ('vendor/autoload.php');

// Instantiate the f3 base class
$f3 = Base::instance();

$f3->route('GET /', function ($f3) {

    $f3->set('veggies',array('tomato','corn','pea', 33));
    $f3->set('fruits',array('apple','orange','banana'));
    $f3->set('radius','10');
    $f3->set ('color','purple');
    $f3->set ('username','jshmo');
    $f3->set ('password',sha1('Password01'));
    $f3->set ('title','Working with templates');
    $f3->set('food', 'Sushi');
    $view = new Template();
    echo $view->render('views/home.html');
});

$f3->run();