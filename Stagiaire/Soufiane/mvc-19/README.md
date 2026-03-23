# Exercice MVC | mvc-19
 
## Marche à suivre préparation TI1
 
### Phase 1
 
1. On part de votre ordinateur
 
- Création d'un dossier sur votre ordinateur : `git init`
- Création d'un `repository` sur `Github`, puis on le lie en local : `git remote add origin KEY@SSH`
 
#### Ou
 
2. On part de `Github`
 
- On crée un `fork` du `repository` "**upstream**" depuis `Github`
- On clone le `fork` du `repository` depuis `Github` (utilisation de `SSH` de préférence) sur votre ordinateur mais **pas dans un projet git existant ni un endroit suivi par une synchronisation (OneDrive, Dropbox, iCloud etc..., )**
 
#### Ensuite
 
- Ajout de l'upstream (pour le `pull request` final) : `git remote add upstream KEY@SSH`
 
- Création du `.gitignore` vide (**! Important**)
 
- Dossiers vide ? `.gitkeep`
- Informer sur le projet ? `README.md`
 
### Phase 2
 
Création des dossiers importants du site pour le MVC (Model View Controller)
 
- `public` accessible à tous (**Frontend**)
- `model` Dossier qui gère l'accès aux données (**Backend**)
- `view` Dossier contenant les vues (templates **Backend**)
- `controller` Dossier qui gère le lien entre les `view` et les `model` (Entre **Backend** et **Middle-end**)
- `datas` - nos fichiers de préparation du travail
 
 