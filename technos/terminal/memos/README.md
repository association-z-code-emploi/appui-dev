---
tags:
  - memo
  - technos
  - terminal
  - bash
  - powershell
---

# Mémo : commandes du terminal

> Dernière vérification : 2026-11-06
>
> 🔙 Retour à la [fiche Terminal](../README.md)

Les noms entre chevrons (`<dossier>`, `<fichier>`, ...) sont à remplacer.

La colonne **Alias PowerShell** donne le raccourci qui imite bash, quand il existe : il accepte le nom, pas les options bash !

## Se repérer et se déplacer

| Action                           | bash / zsh     | PowerShell               | Alias PowerShell              |
| -------------------------------- | -------------- | ------------------------ | ----------------------------- |
| Afficher le dossier courant      | `pwd`          | `Get-Location`           | `pwd`                         |
| Lister le contenu                | `ls`           | `Get-ChildItem`          | `ls`, `dir`                   |
| Lister le contenu détaillé       | `ls -l`        | `Get-ChildItem`          | `ls` (affiche déjà le détail) |
| Lister aussi les fichiers cachés | `ls -a`        | `Get-ChildItem -Force`   | `ls -Force`                   |
| Changer de dossier               | `cd <dossier>` | `Set-Location <dossier>` | `cd`                          |
| Remonter d'un niveau             | `cd ..`        | `Set-Location ..`        | `cd ..`                       |
| Aller dans le dossier personnel  | `cd ~`         | `Set-Location ~`         | `cd ~`                        |

## Créer, copier, déplacer, supprimer

| Action                              | bash / zsh                     | PowerShell                                  | Alias PowerShell |
| ----------------------------------- | ------------------------------ | ------------------------------------------- | ---------------- |
| Créer un dossier                    | `mkdir <dossier>`              | `New-Item -ItemType Directory <dossier>`    | `mkdir`          |
| Créer des dossiers imbriqués        | `mkdir -p <a>/<b>`             | `New-Item -ItemType Directory <a>/<b>`      | `mkdir <a>/<b>`  |
| Créer un fichier vide               | `touch <fichier>`              | `New-Item <fichier>`                        | `ni`             |
| Copier un fichier                   | `cp <source> <destination>`    | `Copy-Item <source> <destination>`          | `cp`, `copy`     |
| Copier un dossier                   | `cp -r <source> <destination>` | `Copy-Item -Recurse <source> <destination>` | `cp -Recurse`    |
| Déplacer ou renommer                | `mv <source> <destination>`    | `Move-Item <source> <destination>`          | `mv`, `move`     |
| Supprimer un fichier                | `rm <fichier>`                 | `Remove-Item <fichier>`                     | `rm`, `del`      |
| Supprimer un dossier et son contenu | `rm -r <dossier>`              | `Remove-Item -Recurse <dossier>`            | `rm -Recurse`    |

## Lire et chercher

| Action                             | bash / zsh                 | PowerShell                               | Alias PowerShell        |
| ---------------------------------- | -------------------------- | ---------------------------------------- | ----------------------- |
| Afficher un fichier                | `cat <fichier>`            | `Get-Content <fichier>`                  | `cat`, `type`           |
| Afficher les premières lignes      | `head -n 5 <fichier>`      | `Get-Content <fichier> -Head 5`          | `cat <fichier> -Head 5` |
| Afficher les dernières lignes      | `tail -n 5 <fichier>`      | `Get-Content <fichier> -Tail 5`          | `cat <fichier> -Tail 5` |
| Lire un long fichier page par page | `less <fichier>`           | `Get-Content <fichier> \| more`          | —                       |
| Chercher un texte dans un fichier  | `grep "<texte>" <fichier>` | `Select-String "<texte>" <fichier>`      | `sls`                   |
| Trouver un fichier par son nom     | `find . -name "<nom>"`     | `Get-ChildItem -Recurse -Filter "<nom>"` | `ls -Recurse -Filter`   |

## Utilitaires

| Action                                | bash / zsh                              | PowerShell               | Alias PowerShell |
| ------------------------------------- | --------------------------------------- | ------------------------ | ---------------- |
| Afficher un texte                     | `echo "<texte>"`                        | `Write-Output "<texte>"` | `echo`           |
| Effacer l'écran                       | `clear`                                 | `Clear-Host`             | `clear`, `cls`   |
| Historique des commandes              | `history`                               | `Get-History`            | `history`, `h`   |
| Aide sur une commande                 | `man <commande>` ou `<commande> --help` | `Get-Help <commande>`    | `help`, `man`    |
| Exécuter un script du dossier courant | `./<script>.sh`                         | `.\<script>.ps1`         | —                |
| Fermer le terminal                    | `exit`                                  | `exit`                   | —                |

## À savoir

- **Partout** : <kbd>Tab</kbd> complète, <kbd>↑</kbd> rappelle la commande précédente, <kbd>Ctrl</kbd> + <kbd>C</kbd> interrompt.
- **PowerShell** : le préfixe `.\` sert à exécuter un script situé dans le dossier courant, pas à se déplacer.
- **PowerShell** : selon la configuration de Windows, l'exécution de scripts `.ps1` peut être bloquée par défaut.
- **Certaines commandes demandent des droits d'administrateur** (`sudo` en bash, terminal lancé "en tant qu'administrateur" sous Windows) : on ne les utilise que lorsqu'on sait pourquoi !
