## Étape 3 : Base de données 💻

### Installer Doctrine
Doctrine est un outil puissant qui permet de :

<ul>
<li>Mapper des objets PHP aux tables de la base de données (ORM)</li>
<li>Générer automatiquement des tables à partir de classes (Entités)</li>
<li>Manipuler les données de la base avec une approche orientée objet (Entity Manager).</li>
</ul>

  ```bash
   composer require symfony/orm-pack
  ```
 ##### Lier La BDD MySQL à Doctrine
  
   ```bash
      -
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
Si tout fonctionne correctemment, cette page apparait : 
![image](https://github.com/user-attachments/assets/5e80704e-9c1e-4cf9-995e-df0299c1164e)
