# Git et Github

## Pré-requis

1. Créer un compte sur la plateforme Github
2. Créer un dépôt Github (repository) qui s'appellera "formation"
3. Dans settings > developer settings > personal access tokens, cliquer sur "Generate new token"
4. Dans "note" taper "formation"
5. Comme contexte (scope) sélectionner uniquement "repo"
6. Cliquer sur "Generate token"
7. Enregistrer le token qui apparaît dans un fichier chez vous

## Définition

Git est un outil de versionning. C'est un outil qui va vous permettre à la fois de sauvegarder votre code (en créant différentes versions de ce dernier) mais aussi de travailler plus efficacement à plusieurs sur un même projet.

## Utilisation

Git s'utilise en ligne de commande mais il existe des outils graphiques (notamment intégrés aux ide).

### Les commandes principales

* git init : initialise un dépôt git
* git clone : cloner un projet dans un nouveau dossier
* git status : affiche l'état de suivi des fichiers 
* git add : ajoute un ou plusieurs fichiers au suivi
* git commit : réalise un "commit"
* git push : envoie tous les commit vers github
* git pull : récupérer les mises à jour du dépôt

### Initialiser un dépôt git

1. git init
2. Créer un fichier "readme.md"
3. git add -A
4. git commit -m "first commit" (git vous demandera peut-être de renseigner email et nom d'utilisateur)
5. git branch -M main
6. git remote add origin https://github.com/nomutilisateur/nomdudepot.git
7. git push -u origin main

### Faire une mise à jour sur Github

1. git add -A
2. git commit -m "Le message de votre commit"
3. git push -u origin main
4. Renseigner votre compte github et token d'accès

### Récupérer un dépôt (cloner un dépôt)

1. git clone https://github.com/nomutilisation/nomdudepot.git
2. cd nomdudepot

### Récupérer les mises à jour

Pour récupérer les mises à jours effectuées par les membres de votre équipe, taper la commande *git pull origin main*.