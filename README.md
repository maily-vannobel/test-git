## Étape 2.2 : Fichiers de configuration ⚙️

### Création des fichiers

- **`config/bundles.php`** : Le noyau de l’application ; il est utilisé pour enregistrer et activer les **bundles** et initialise l’application.

 Les options de chaque bundle sont définies dans des fichiers YAML dans le dossier config/packages/.
  Pour l'app Symfony par exemple ↓
- **`config/packages/framework.yaml`** :  Pour configurer le comportement global du Framework Symfony
     
### Lancer le serveur 

 ```bash
  php -S localhost:8000 -t public
```
  #### Regénèrer l’autoload 
   ```bash
    composer dump-autoload
  ```

---
