![header](https://capsule-render.vercel.app/api?type=soft&color=0:CDEFFB,100:F0FBFF&height=100&section=header&text=Étape%203%20:%20Base%20de%20données%20💻&fontSize=30&fontColor=002B5B)

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
💡Penser à régénerer l'autoload !

---

### Configuration de la base de données

  Dans  `.env`  il faut configurer la connexion à la BDD avec la variable DATABASE_URL (penser à mettre les bonnes infos)
   ```bash
    DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=8.0.37" 
   ```
  #### Créer la base de données
  - Manuellement avec MySQL : Cela permet de garder un contrôle total sur la structure et les relations. Les schémas de la BDD ici :
    ![image](https://github.com/user-attachments/assets/f753b4d6-777a-41b8-8536-4dd2a9fcdb10)
    
  - Avec **Doctrine** : permet de créer automatiquement la base de données et ses tables en se basant sur des "entités" définies en PHP (une entité représente une table). Grâce à ces fichiers d'entités, tu peux décrire ta     base de données directement dans ton code PHP, sans avoir à écrire les commandes SQL. Doctrine se charge ensuite de générer ou de mettre à jour les tables dans la base à partir de ces descriptions.

### Relier la base de données à Doctrine
 ```bash
   
  ```

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

