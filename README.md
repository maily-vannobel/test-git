## Étape 1 : Installation de Symfony avec Composer🔨

Avant de commencer, il  faut installer les composants de base nécessaires pour construire une application Symfony. (Composer,vWamp..)

### Commande d'installation
Pour installer Symfony, dans un terminal du projet :

  ```bash
  composer require symfony/framework-bundle
  ```

  #### Différence entre `framework-bundle` et `symfony/skeleton`

  Cette commande installe `uniquement le cœur de Symfony, sans structure imposée, l'architecture, les fichiers et leur contenu doivent être faits à la main.
  À l'inverse, la commande `Skeletton crée un projet complet avec une structure prédéfinie et des dépendances initiales, ajoute parfois des fichiers ou des bundles pas nécessaires. 

    ```bash
    composer require symfony/skeleton

    ```
---

### Configuration de l'autoload
Une fois Symfony installé, il faut configurer l'autoload PSR-4 dans le fichier `composer.json` pour que Symfony puisse détecter correctement les classes de l'application (comme `Kernel`).

A ce stade, `composer.json` doit ressembler à ça : 
    ```bash
        {
    "require": {
        "symfony/framework-bundle": "^7.1"
    },
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}

    ```

    Ensuite regénérer l'autoload pour que Synfony puisse charger les changements.
    ```bash
    composer dump-autoload

    ``` 


---
## Étape 2 : Création de l'architecture et des fichiers 🗂️
### Structure de dossiers 
```
php-symfony-essentials/
├── src/
│   └── Kernel.php
├── public/
│   └── index.php
├── config/
│   └── packages
├── composer.json
├── composer.lock
├── vendor/ (ignoré par Git)
├── .env
├── .gitignore
```
### Création des fichiers de base
Pour démarrer une application Symfony, nous avons besoin de deux fichiers essentiels :
- **`src/Kernel.php`** : Le noyau de l’application qui configure les bundles et initialise l’application.
  
- **`public/index.php`** : Le point d’entrée de l’application, qui reçoit toutes les requêtes HTTP.

1. Charge les classes et dépendances nécessaires via Composer (`vendor/autoload.php`).
2. Initialise le noyau (Kernel) avec l'environnement actif (comme `dev` ou `prod`) et un mode debug.
3. Crée une requête HTTP en utilisant les données du client (navigateur).
4. Transmet la requête au Kernel pour traitement et génère une réponse.
5. Envoie cette réponse au client et termine le cycle de requête.

Dans un projet créé automatiquement (ex. `symfony/skeleton`), ce fichier est généré par Symfony et fonctionne tel quel dans la plupart des cas. Iil peut être modifié pour passer en mode prod ou personnaliser certains comportements si le projet nécessite une gestion avancée des requêtes.

- **`.env `** :
  
    ```bash
    APP_ENV=dev
    APP_DEBUG=1
    APP_SECRET=your-secret-key
    ```
    ```bash
    php -r "echo bin2hex(random_bytes(16));"
    ```
       
---
