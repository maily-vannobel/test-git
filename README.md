![header](https://capsule-render.vercel.app/api?type=soft&color=0:FFF9C4,100:FFE082&height=100&section=header&text=Étape%201%20:%20Installation%20🔨&fontSize=30&fontColor=6D4C41)


## Installer Symfony et ses composants avec Composer

Avant de commencer, il faut installer les composants de base nécessaires pour construire une application Symfony. (Composer,Wamp..)

### Étape 1.1 : Commande d'installation
Pour installer Symfony, dans un terminal du projet :

  ```bash
  composer require symfony/framework-bundle
  ```

  #### Différence entre `framework-bundle`, `symfony/skeleton` et `symfony/website-skeleton`

`framework-bundle` installe `uniquement le cœur de Symfony`, sans structure imposée, l'architecture, les fichiers et leur contenu doivent être faits à la main.
À l'inverse, `symfony/skeleton` crée un projet complet avec une structure prédéfinie et des dépendances initiales, ajoute parfois des fichiers ou des bundles pas nécessaires. Pour l'installer :

  ```bash
   composer require symfony/website-skeleton
  ```
Il existe une version plus légère avec moins de dossiers crées automatiquement : 
  ```bash
   composer require symfony/skeleton
  ```

### Étape 1.2 : Installation des composants essentiels
- Dotenv : Charge les variables définies dans .env pour que Symfony puisse les utiliser
    ```bash
   composer require symfony/dotenv
  ```

### Étape 1.3 : Configuration de l'autoload
Une fois Symfony installé, il faut configurer l'autoload PSR-4 dans le fichier `composer.json` pour que Symfony puisse détecter correctement les classes de l'application (comme `Kernel`). Il faut manuellement rajouter cette partie dans le json.

À ce stade, `composer.json` doit ressembler à ça : 

```json
{
    "require": {
        "symfony/framework-bundle": "^7.1",
        "symfony/dotenv": "^7.1"
    },
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

Ensuite faire un `composer install` pour installer les dépendances puis regénérer l'autoload avec `composer dump-autoload` pour que Synfony puisse charger les changements.

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
│   ├── bundles.php
│   ├── packages/
│   ├── services.yaml       
├── bin/
│   └── console
├── var/  
├── composer.json
├── composer.lock
├── vendor/ 
├── .env
├── .gitignore
```

---

### Création des fichiers de base
Pour démarrer une application Symfony, nous avons besoin de deux fichiers essentiels :
- **`src/Kernel.php`** : Le noyau de l’application qui charge les bundles et initialise l’application. Il configure les répertoires du projet, du cache, et des logs et 
charge les variables d'environnement de `.env`.
  
- **`public/index.php`** : Le point d’entrée de l’application, qui reçoit toutes les requêtes HTTP.
      <p> Il charge les classes et dépendances nécessaires via Composer (`vendor/autoload.php`).  Initialise le noyau (Kernel) avec l'environnement actif (comme `dev` ou 
        `prod`) et un mode debug. <br>
          Crée une requête HTTP en utilisant les données du client (navigateur).Transmet la requête au Kernel pour traitement et génère une réponse. puis l'envoie au client             et termine le cycle de requête. <br>
         Dans un projet créé automatiquement (skeletton), ce fichier est généré par Symfony et fonctionne tel quel dans la plupart des cas. Il peut être modifié pour passer             en mode prod ou personnaliser certains comportements si le projet nécessite une gestion avancée des requêtes. </p>

- **`config/services.yaml`** : Configure les services et dépendances. Le fichier services.yaml ne fait qu'enregistrer des services, mais il ne crée pas automatiquement les classes, pour chaque service ajouté il faut créer une classe.
  
- **`bin/console`** :permet d'exécuter des commandes Symfony pour interagir avec l'application.

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
### Commandes utiles

  ##### Regénèrer l’autoload
   ```bash
    composer dump-autoload
  ```
 ##### Installer les dépendances
   ```bash
    composer install
  ```
 ##### Mettre à jour
   ```bash
     composer update
   ```
 ##### Nettoyer le cache
   ```bash
     php bin/console cache:clear
   ```
 ##### Lancer le serveur
   ```bash
     php -S localhost:8000 -t public
   ```

---
