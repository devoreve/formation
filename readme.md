# Git et Github

## Instructions

### Créer un jeton d'accès personnel

Sur votre compte Github, cliquez sur votre profil et sélectionnez "settings>developer settings>Personal access tokens" puis cliquez sur le bouton "Generate new token".

### Mise en place du dépôt

* Créer sur votre IDE un dossier git/ dans sites/
* Se déplacer dans ce dossier créé au niveau du terminal avec la commande *cd*
* Taper les commandes indiquées lors de la création du dépôt (repository) :
  * git init (initialise un dépôt vide) -> va créer un dossier ".git/" dans votre dossier git/ (NE PAS TOUCHER A CE DOSSIER !!!)
  * Créer un fichier *index.php* dans le dossier git/ (et pas .git/ hein) avec un peu de code dedans
  * Taper la commande *git add -A* pour ajouter les fichiers au suivi
  * Vérifier lorsque vous tapez *git status* que les fichiers apparaissent bien au vert
  * Taper la commande *git commit -m "first commit"*
  * Taper la commande *git branch -M main*
  * Taper la commande *git remote add origin https://github.com/{votre pseudo}/{votre dépôt}.git*
  * Taper la commande *git push -u origin main*