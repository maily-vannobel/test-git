![image](https://github.com/user-attachments/assets/40887311-c96b-444a-aba0-bfd2c0c43f62)![header](https://capsule-render.vercel.app/api?type=soft&color=0:CDEFFB,100:F0FBFF&height=100&section=header&text=Étape%203%20:%20Base%20de%20données%20💻&fontSize=30&fontColor=002B5B)

### 📥 Installer Doctrine
Doctrine est un outil puissant qui permet de :

<ul>
<li>Mapper des objets PHP aux tables de la base de données (ORM)</li>
<li>Générer automatiquement des tables à partir de classes (Entités)</li>
<li>Manipuler les données de la base avec une approche orientée objet (Entity Manager).</li>
</ul>

Pour installer **Doctrine** et ses dépendances : 
  ```bash
    composer require symfony/orm-pack
  ```
Il faut aussi installer **MakerBundle** (qui servira plus tard), qui permet de générer des entités et d'autres fichiers automatiquement :
 ```bash
   composer require --dev symfony/maker-bundle
  ```
 #### 📥 Installation du bundle Doctrine
 Après avoir installé Doctrine, il faut installer son **bundle** sinon Symfony ne peut 
 pas interpréter la configuration.
  ```bash
   composer require doctrine/doctrine-bundle
  ```
 #### 🔧 Configuration Doctrine
 Dans ce projet où tout est crée manuellement, la configuration du **bundle Doctrine** ne se crée pas automatiquement, il font donc la créer dans `config/packages` :
  - **config/package/doctrine.yaml** :  *Voir le contenu dans le code* 
  Il faut ajouter cette ligne dans `config/bundles.php` pour ajouter Doctrine à la liste 
  des bundles.
  ```bash
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true]
  ```

Nettoyer le cache pour être sûrs que Symfony prenne les changements en compte.
  ```bash
   php bin/console cache:clear
  ```
💡Penser à régénerer l'autoload !

---

### 🛠️ Configuration de la base de données

  Dans  `.env`  il faut configurer la connexion à la BDD avec la variable DATABASE_URL 
  (penser à mettre les bonnes infos)
   ```bash
    DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=8.0.37" 
   ```
  #### Créer la base de données
  - Manuellement avec MySQL : Cela permet de garder un contrôle total sur la structure et 
    les relations. 
      - Les schémas de la BDD ici, 3 tables simples avec 1 table jointe.
    ![image](https://github.com/user-attachments/assets/f753b4d6-777a-41b8-8536-4dd2a9fcdb10)
    
  - Avec **Doctrine** : permet de créer automatiquement la BDD et ses tables en se basant 
    sur des "entités" définies en PHP (une entité = une table).
       -  Grâce à ces fichiers d'entités, la BDD peut être décrite directement dans le              code PHP (pas besoins d'écrire de commandes SQL).
       - Ensuite Doctrine génère ou met à jour les tables dans la BDD à partir de ces 
         descriptions.

---
## Étape 3.1 : Relier Doctrine à la base de données

### Vérifier la connexion 
Vérifier que la variable `DATABASE_URL` (dans `.env`) correspond à la bonne BDD. Doctrine utilisera cette configuration pour accéder à la BDD. 

Pour tester que Doctrine peut bien  se connecter : 
 ```bash
   php bin/console doctrine:database:validate
 ```
💡 Si aucune entité n’a encore été créée, la commande retournera une erreur indiquant que le schéma de la base n’est pas synchronisé avec les fichiers de mapping, c'est normal, les entités seront crées dans l'étape suivante. 

## Étape 3.2 :



---
### Commandes utiles

  #### Regénèrer l’autoload
   ```bash
    composer dump-autoload
  ```
 #### Lancer le serveur 
 
 ```bash
   php -S localhost:8000 -t public
 ```

#### Lien de l'application 
À cette adresse : [http://localhost:8000](http://localhost:8000)


---

