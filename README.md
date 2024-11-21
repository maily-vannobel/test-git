## Étape 1 : Installation de Symfony avec Composer🔨

Avant de commencer, il  faut installer les composants de base nécessaires pour construire une application Symfony. (Composer,vWamp..)

### Commande d'installation
Pour installer Symfony, dans un terminal du projet :

  ```bash
  composer require symfony/framework-bundle
  ```

  #### Différence entre `framework-bundle` et `symfony/skeleton`

`framework-bundle` installe `uniquement le cœur de Symfony`, sans structure imposée, l'architecture, les fichiers et leur contenu doivent être faits à la main.
À l'inverse, `symfony/skeleton` crée un projet complet avec une structure prédéfinie et des dépendances initiales, ajoute parfois des fichiers ou des bundles pas nécessaires. Pour l'installer :

  ```bash
   composer require symfony/skeleton
  ```

---

### Configuration de l'autoload
Une fois Symfony installé, il faut configurer l'autoload PSR-4 dans le fichier `composer.json` pour que Symfony puisse détecter correctement les classes de l'application (comme `Kernel`).

À ce stade, `composer.json` doit ressembler à ça : 

```json
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

---

### Création des fichiers de base
Pour démarrer une application Symfony, nous avons besoin de deux fichiers essentiels :
- **`src/Kernel.php`** : Le noyau de l’application qui configure les bundles et initialise l’application.
  
- **`public/index.php`** : Le point d’entrée de l’application, qui reçoit toutes les requêtes HTTP.
  Il charge les classes et dépendances nécessaires via Composer (`vendor/autoload.php`).  Initialise le noyau (Kernel) avec l'environnement actif (comme `dev` ou `prod`) et un mode debug. Crée une requête HTTP en 
  utilisant les données du client (navigateur).Transmet la requête au Kernel pour traitement et génère une réponse. puis l'envoie au client et termine le cycle de requête.
 Dans un projet créé automatiquement (skeletton), ce fichier est généré par Symfony et fonctionne tel quel dans la plupart des cas. Il peut être modifié pour passer en mode prod ou personnaliser certains comportements si le projet nécessite une gestion avancée des requêtes.

- **`.env `** :
  
    ```bash
    APP_ENV=dev
    APP_DEBUG=1
    APP_SECRET=your-secret-key
    ```

  Pour générer une clé secrète :
    ```bash
    php -r "echo bin2hex(random_bytes(16));"
    ```
       
---
