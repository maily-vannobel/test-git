## Étape 2.2 : Configuration ⚙️

### Création des fichiers de configuration

- **`config/bundles.php`** : Le noyau de l’application ; il est utilisé pour enregistrer et activer les **bundles** et initialise l’application.
  Pour l'app Symfony par exemple ↓
- **`config/packages/framework.yaml`** :  Pour configurer le comportement global du Framework Symfony

### Installation des composants essentiels
 #### Composant DebugBundle
 Ajoute des outils de débogage pour l’environnement de développement.
  ```bash
   composer require symfony/debug-bundle --dev
  ```
 ##### Composant YAML
  Les options de chaque bundle sont définies dans des fichiers YAML dans le dossier `config/packages/`. Il faut d'abord installer le composant : 
   ```bash
  composer require symfony/yaml
   ``` 
---
### Test de la configuration & commandes utiles

  #### Regénèrer l’autoload
  L'autoload permet de charger automatiquement les classes nécessaires. À chaque installation ou modifification de composant, il faut régénerer l'autoload pour que Symfony reconaisse les nouvelles classes.
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
