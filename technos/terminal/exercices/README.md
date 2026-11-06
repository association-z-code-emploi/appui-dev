---
tags:
  - exercices
  - technos
  - terminal
---

# Exercices : Le terminal

> 🔙 Retour à la [fiche](../README.md)

Faites tous les exercices dans le terminal intégré de VSCode, sans passer par l'explorateur de fichiers.

## 1. Vérifier

1. Affichez le dossier courant ;
2. Listez son contenu ;
3. Affichez la version de votre shell : `bash --version`, `zsh --version` ou `$PSVersionTable.PSVersion`, selon le cas.

**Résultat attendu** : un chemin, une liste de fichiers et dossiers, puis un numéro de version. Votre environnement est prêt !

## 2. Manipuler

En partant de votre dossier personnel, construisez cette arborescence :

```
mon-projet/
├── index.php
├── notes.md
└── assets/
    ├── style.css
    └── images/
```

Puis, via des commandes uniquement :

1. renommez `notes.md` en `README.md` ;
2. copiez `README.md` dans `assets/` sous le nom `a-propos.md` ;
3. supprimez le dossier `images/` ;
4. vérifiez le résultat avec `ls`, depuis chaque dossier.

## 3. Explorer

Deux opérateurs, absents de la fiche, existent dans les deux familles de shells : la **redirection** (`>` et `>>`) et le **pipe** (`|`). En vous appuyant sur la documentation de votre shell :

1. depuis `mon-projet/`, enregistrez la liste de son contenu dans un fichier `contenu.txt` ;
2. ajoutez à la fin de `contenu.txt` la liste du contenu de `assets/`, **sans effacer** ce qui s'y trouve déjà ;
3. avec un pipe, n'affichez que les lignes de `contenu.txt` qui contiennent `.md`. La commande à placer après le pipe n'est pas la même en bash et en PowerShell : à vous de la trouver.
