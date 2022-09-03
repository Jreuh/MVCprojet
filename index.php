<?php

/******************************MISE EN PLACE DU ROUTEUR*******************************************************/

//On genere une constante qui contiendra le chemin vers index.php
//$_SERVER est une super global qui contient des information relative 
//sur la page a laquelle on se trouve actuelement
///$_SERVER est une super global qui contient des information relative
/// sur la page a laquelle on se trouve
//str_replace nous permet de recuperer l url d acces a la page en supprimant le index.php

define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

// Nous permet de charger les controller et model principaux 
require_once(ROOT . 'app/Model.php');
require_once(ROOT . 'app/Controller.php');

// On separe les parametres get  de l'url

$params = explode('/', $_GET['p']);

// Est ce qu un parametre existe 
if ($params[0] != '') {
    //Si il existe on le recupere avvec la premiere lettre en majuscule (convention de nomage des classes)

    $controller = ucfirst($params[0]);
    // Conditionnement en ternaire pour verifier l existence du second parametre (action) et sa recuperation
    $action = isset($params[1]) ? $params[1] : 'index';


    //On redirige donc l'utilisateur vers la page concernee
    require_once(ROOT . 'controllers/' . $controller . '.php');
    //on instancie l'objet souhaiter 
    $controller = new $controller();
    // On verifie l'existence de la methode et on l'appelle
    if (method_exists($controller, $action)) {
        unset($params[0]);
        unset($params[1]);
        call_user_func_array([$controller, $action], $params);
        // $controller->$action();
    }
    // Si la methode demandee n existe pas on Renvoi une erreure 404  
    else {
        http_response_code(404);
        echo "La page demadee n'existe pas";
    }
};
