<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Car.php";

    $app['debug']=true;
    session_start();
    if(empty($_SESSION['list_of_cars'])) {
        $porsche = new Car("2014 Porsche 911", 114991, 7864, "img/911.jpg");
        $ford = new Car("2011 Ford F450", 55995, 14241, "img/f450.jpeg");
        $lexus = new Car("2013 Lexus RX 350", 44700, 20000, "img/rx350.jpg");
        $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979, "img/cls550.jpeg");
        $_SESSION['list_of_cars'] = array($porsche, $ford, $lexus, $mercedes);
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=> __DIR__.'/../views'));

    $app->get('/', function() use ($app) {

        // $_SESSION['list_of_cars'] = array();        
        var_dump($_SESSION['list_of_cars']);
        return $app['twig']->render('index.html.twig');
    });
    return $app;
 ?>
