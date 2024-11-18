## Étape 1 : Installation de Symfony avec Composer🔨
Avant de commencer, il  faut installer les composants de base nécessaires pour construire une application Symfony. (Composer,vWamp..)

### Commande d'installation
Pour installer Symfony, dans un terminal du projet :

```bash
composer require symfony/framework-bundle
```
### Différence entre `framework-bundle` et `symfony/skeleton`

Cette commande` installe uniquement le cœur de Symfony, sans structure imposée, l'architecture doit être faite à la main.
À l'inverse, la commande `composer create-project symfony/skeleton` crée un projet complet avec une structure prédéfinie et des dépendances initiales. ajoute parfois des fichiers ou des bundles pas nécessaires. 


Sinon créer manuellement le composer.json, copier les dépendances et executer "composer install" , "composer update" pour mettre à jour les packages et synchroniser composer.lock : 

```bash
{
    "require": {
        "symfony/framework-bundle": "^7.1"
    }
}
```
