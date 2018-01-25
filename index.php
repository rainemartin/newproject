<?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    require_once ('vendor/autoload.php');


    $f3 = Base::instance();
    $f3->set('DEBUG', 3);

    $f3->route('GET /', function ($f3)
    {
        /*
        $view = new View();
        echo $view->render('views/home.html');
        */

        // Save variables to the hive
        $f3->set('username', 'jshmo');
        $f3->set('password', sha1('Password01'));
        $f3->set('title', 'Working with Templates');
        $f3->set('temp', 68);
        $f3->set('color', 'purple');
        $f3->set('radius', 10);
        $f3->set('fruits', array('blood oranges', 'grapes', 'watermelon', 'kiwi'));
        $f3->set('bookmarks', array('http://www.cnet.com', 'http://www.reddit.com/r/news',
                                    'http://edition.cnn.com/sport'));
        $f3->set('addresses', array('primary' => '1000 Apple Ln. Seattle, Wa 98999',
                                    'secondary' => '2510 100th Court Tac, Wa 90000'));
        $f3->set('desserts', array('chocolate' => 'Chocolate Mousse', 'vanilla' => 'Vanilla Custard',
                                    'strawberry' => 'Strawberry Shortcake'));

        // Load a template - Long version
        /* $template = new Template();
           echo $template->render('views/info.html');
        */

       // alternate syntax
        echo Template::instance()->render('views/info.html');
    });

    $f3->run();