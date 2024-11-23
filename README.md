![header](https://capsule-render.vercel.app/api?type=soft&color=0:FF8000,100:FFD580&height=100&section=header&text=Étape%202%20:%20Configuration%20⚙️&fontSize=30&fontColor=5B3D00)


### Création des fichiers de configuration

- **`config/bundles.php`** : Fichier qui liste tous les **bundles**, et indique au noyau (le **Kernel**, qui lit ce fichier) quoi faire. Chaque bundle nécessite la creation d'un fichier yaml.
⚠️ Ce fichier ne gère pas directement la configuration des bundles, mais il indique seulement quels 
    bundles sont disponibles. Chaque bundle peut nécessiter un fichier de configuration séparé; pour Symfony par exemple ↓
- **`config/packages/framework.yaml`** :  Pour configurer le comportement global du Framework Symfony

### Installation des composants essentiels
 #### Composant DebugBundle (facultatif)
 Ajoute des outils de débogage pour l’environnement de développement.
  ```bash
   composer require symfony/debug-bundle --dev
  ```
 ##### Composant YAML
  Symfony utilise des fichiers YAML pour configurer les bundles dans le dossier `config/packages/`. Il 
  faut d'abord installer le composant : 
   ```bash
  composer require symfony/yaml
   ``` 
---
### Test de la configuration & commandes utiles

  #### Regénèrer l’autoload
  L'autoload permet de charger automatiquement les classes nécessaires. À chaque installation ou 
 modifification de composant, il faut régénerer l'autoload pour que Symfony reconaisse les nouvelles 
 classes.
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
