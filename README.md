## Étape 1 : Installation de Symfony avec Composer🔨
Avant de commencer, il  faut installer les composants de base nécessaires pour construire une application Symfony. (Composer,vWamp..)

### Commande d'installation
Pour installer Symfony, dans un terminal du projet :

```bash
composer require symfony/framework-bundle
```

Sinon créer manuellement le composer.json, copier les dépendances et executer "composer install" : 

```bash
{
    "require": {
        "symfony/framework-bundle": "^7.1"
    }
}
```
