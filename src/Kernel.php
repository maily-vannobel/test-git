<?php

namespace App; // Namespace pour organiser le code et permettre le chargement automatique des classes.

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait; 
// Ajoute des fonctionnalités pour simplifier la configuration de petites applications ou modules.

use Symfony\Component\HttpKernel\Kernel as BaseKernel; 
// Classe abstraite de Symfony qui gère le cycle de vie de l'application et le chargement des bundles.

use Symfony\Component\Dotenv\Dotenv; 
// Permet de charger les variables d'environnement depuis le fichier .env.

class Kernel extends BaseKernel
{
    use MicroKernelTrait; // Permet de configurer des routes et des services directement dans le noyau, sans dépendre de fichiers de configuration séparés.
    
    // Retourne le répertoire racine du projet. Par défaut, Symfony utilise le répertoire où se trouve `composer.json`.
    public function getProjectDir(): string
    {
        return \dirname(__DIR__);
    }

    // Définit le répertoire de cache utilisé par Symfony. Par défaut, il est stocké dans `var/cache/{environnement}`.
    public function getCacheDir(): string
    {
        return $this->getProjectDir() . '/var/cache/' . $this->environment;
    }

    // Définit le répertoire de logs utilisé par Symfony. Par défaut, il est stocké dans `var/log`.
    public function getLogDir(): string
    {
        return $this->getProjectDir() . '/var/log';
    }
}

// Charger les variables d'environnement depuis le fichier .env
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');
