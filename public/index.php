<?php

use App\Kernel; // Charge le noyau de l'application Symfony.
use Symfony\Component\HttpFoundation\Request; // Classe Symfony qui représente une requête HTTP (GET, POST, etc.).
require dirname(__DIR__) . '/vendor/autoload.php';


// Initialise le noyau Symfony avec 2 paramètres :
// - 'dev' : l'environnement actif (dev = développement, prod = production).
// - true : active le mode debug, utile pour afficher les erreurs en développement.
$kernel = new Kernel('dev', true);

// Crée une requête HTTP basée sur les variables globales PHP ($_GET, $_POST, etc.).
$request = Request::createFromGlobals();

// Traite la requête via le Kernel. Symfony utilise ses composants pour générer une réponse appropriée.
$response = $kernel->handle($request);

$response->send(); // Envoie la réponse générée au client (navigateur).

// Termine le cycle de vie de la requête après l'envoi de la réponse (utilisé pour des tâches comme les logs).
$kernel->terminate($request, $response);