## Étape 3 : Base de données 💻

### Installer Doctrine
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

### Lier La BDD MySQL à Doctrine
  La configuration de la BDD se fait dans  `.env` 
   ```bash
      
   ``` 
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

