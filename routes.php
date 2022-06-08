<?php

require 'vendor/autoload.php';

// $app->get('/', '\Controller\HomeController:homepage');

Flight::route('/', array('Controller/HomeController', 'homepage'));