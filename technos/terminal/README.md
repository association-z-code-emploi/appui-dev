---
tags:
  - fiche
  - technos
  - terminal
  - bash
  - powershell
---

# Le terminal

> Dernière vérification : 2026-11-06
>
> Version concernée :
>
> - bash 5
> - zsh 5
> - PowerShell 5.1

## En une phrase

Le terminal (ou CLI, _Command Line Interface_) permet de piloter l'ordinateur en tapant des commandes plutôt qu'en cliquant : c'est plus rapide, ça s'automatise, et c'est souvent le seul moyen d'utiliser les outils de développement (PHP, Node, Git, Docker, ...).

> **Deux familles de terminaux.** Il existe plusieurs _shells_ (le programme qui interprète les commandes). On en rencontre surtout deux familles :
>
> - **bash / zsh** sous Linux et macOS (et sur la plupart des serveurs) ;
> - **PowerShell** sous Windows.
>
> La logique est la même partout : seuls les noms et les options des commandes changent. Cette fiche présente donc les deux côte à côte.

## Prérequis

- Avoir installé [VSCode](https://code.visualstudio.com/)

## Démarrer

1. Ouvrir VSCode, puis un terminal intégré : menu **Terminal > Nouveau terminal**, ou le raccourci <kbd>Ctrl</kbd> + <kbd>`</kbd>.
2. Repérer le nom du shell, affiché en haut à droite du panneau du terminal : `bash`, `zsh` ou `powershell`. C'est la colonne à suivre dans les tableaux de cette fiche.
3. Taper une première commande, puis valider avec <kbd>Entrée</kbd> :

   ```shell
   echo "Bonjour le terminal"
   ```

   Le texte s'affiche juste en dessous : `echo` fonctionne dans les deux familles !

## L'essentiel

### 1. On est toujours quelque part

Les dossiers et fichiers forment une **arborescence**, et le terminal est toujours placé dans l'un d'eux : le **dossier courant**. On peut l'imaginer comme une bibliothèque :

- le dossier courant, c'est la salle où l'on se trouve ;
- `pwd`, c'est lire le panneau sur la porte pour savoir dans quelle salle on est ;
- `ls`, c'est regarder les étagères autour de soi ;
- `cd`, c'est marcher vers une autre salle.

Ces trois commandes s'écrivent de la même façon en bash, zsh et PowerShell !

### 2. Les chemins

Un **chemin** indique où se trouve un fichier ou un dossier.

| Écriture                                      | Signification                                | Exemple                |
| --------------------------------------------- | -------------------------------------------- | ---------------------- |
| `Projets/site`                                | **relatif** : à partir du dossier courant    | `cd Projets/site`      |
| `/home/sam/Projets` ou `C:\Users\sam\Projets` | **absolu** : à partir de la racine du disque | `cd /home/sam/Projets` |
| `.`                                           | le dossier courant                           | `ls .`                 |
| `..`                                          | le dossier parent                            | `cd ..`                |
| `~`                                           | le dossier personnel                         | `cd ~`                 |

PowerShell accepte aussi `/` comme séparateur : on peut écrire `cd Projets/site` partout !

### 3. Anatomie d'une commande

```shell
ls -l Documents
```

- `ls` : la **commande**, ce qu'on veut faire ;
- `-l` : une **option**, qui modifie le comportement (ici, un affichage détaillé) ;
- `Documents` : un **argument**, ce sur quoi on agit.

Les commandes et leurs arguments se retrouvent dans les deux familles ; **ce sont surtout les options qui diffèrent**.

### 4. Créer, déplacer, supprimer

| Action                              | bash / zsh                 | PowerShell                 |
| ----------------------------------- | -------------------------- | -------------------------- |
| Créer un dossier                    | `mkdir Projets`            | `mkdir Projets`            |
| Créer un fichier vide               | `touch index.php`          | `New-Item index.php`       |
| Afficher un fichier                 | `cat index.php`            | `cat index.php`            |
| Copier                              | `cp index.php accueil.php` | `cp index.php accueil.php` |
| Déplacer ou renommer                | `mv accueil.php Projets/`  | `mv accueil.php Projets/`  |
| Supprimer un fichier                | `rm accueil.php`           | `rm accueil.php`           |
| Supprimer un dossier et son contenu | `rm -r Projets`            | `rm -Recurse Projets`      |

Dans PowerShell, `cat`, `cp`, `mv` ou `rm` sont des **alias** : des raccourcis vers ses vraies commandes (`Get-Content`, `Copy-Item`, ...). Ils imitent bash, mais leurs options restent celles de PowerShell. Le [mémo des commandes](memos/commandes.md) donne les équivalences complètes.

### 5. S'aider soi-même

- <kbd>Tab</kbd> **complète** un nom de fichier ou de dossier : on tape les premières lettres, puis <kbd>Tab</kbd>. Moins de frappe, moins de fautes.
- <kbd>↑</kbd> rappelle les **commandes précédentes**.
- <kbd>Ctrl</kbd> + <kbd>C</kbd> **interrompt** une commande qui ne rend pas la main.
- L'**aide intégrée** : `man ls` ou `ls --help` en bash/zsh, `Get-Help ls` en PowerShell.

> ⚠️ **`rm` ne passe pas par la corbeille**, dans aucune des deux familles : un fichier supprimé est perdu !
>
> 📌 On vérifie toujours avec `pwd` et `ls` avant de supprimer.

## Exercices

Les énoncés sont dans [`exercices/README.md`](exercices/README.md) :

1. **Vérifier** : se repérer et afficher la version de son shell
2. **Manipuler** : construire puis réorganiser l'arborescence d'un petit projet, uniquement en ligne de commande
3. **Explorer** : découvrir dans la doc la redirection et le pipe pour enregistrer et filtrer un résultat

## Pièges classiques

- **`No such file or directory` / `Cannot find path`** : on n'est pas dans le dossier qu'on croit. On vérifie avec `pwd` et `ls`, puis on corrige le chemin.
- **Un nom avec des espaces** (`mes projets`) est lu comme deux arguments. On l'entoure de guillemets (`cd "mes projets"`), ou mieux, on évite les espaces dans les noms.
- **Une option bash qui échoue dans PowerShell** (`rm -rf`, par exemple) : l'alias imite le nom de la commande, pas ses options. On consulte le mémo ou `Get-Help`.
- **Le terminal ne répond plus** : une commande attend une saisie ou tourne encore. <kbd>Ctrl</kbd> + <kbd>C</kbd> pour l'interrompre (<kbd>q</kbd> pour quitter une page d'aide `man`).
- **Majuscules et minuscules** : sous Linux, `Projets` et `projets` sont deux dossiers différents, alors que Windows et macOS (par défaut) ne font pas la différence. On prend l'habitude de respecter la casse partout.

## Pour aller plus loin

**Un shell, plusieurs shells** :

- **PowerShell n'est pas un shell POSIX** (la norme suivie par bash et zsh). Il fonctionne avec des objets plutôt qu'avec du texte, et ses alias ne couvrent que les commandes de base.
- **VSCode n'embarque pas de shell** : son terminal ouvre celui du système. On peut en changer avec la flèche à côté du bouton **+** du panneau.
- **Sous Windows, on peut aussi utiliser bash** : avec **Git Bash** (installé avec Git) ou **WSL** (un vrai Linux dans Windows, plus complet mais plus lourd à installer). Utile quand une doc ou un tutoriel ne donne que les commandes bash.

**Notions à découvrir ensuite** : lire un long fichier (`less`, `head`, `tail`), chercher dans des fichiers (`grep`), les processus (`ps`, `kill`), les variables d'environnement (`$HOME`, `$PATH`), les alias personnels et les scripts shell.

**Documentation officielle**

- [Bash Reference Manual](https://www.gnu.org/software/bash/manual/) : la référence complète de bash, à consulter ponctuellement plutôt qu'à lire
- [Documentation PowerShell](https://learn.microsoft.com/fr-fr/powershell/) : en français, avec une partie "prise en main"
- [Terminal intégré de VSCode](https://code.visualstudio.com/docs/terminal/basics) : changer de shell, ouvrir plusieurs terminaux, raccourcis

**Pour approfondir**

- [explainshell](https://explainshell.com/) : on colle une commande bash, il explique chaque morceau
- [tldr pages](https://tldr.sh/) : des pages d'aide simplifiées, avec les exemples les plus courants
- [The Missing Semester of Your CS Education](https://missing.csail.mit.edu/) : un cours du MIT sur les outils du développeur, en anglais, dont la première leçon porte sur le shell

**Communautés**

- [Unix & Linux Stack Exchange](https://unix.stackexchange.com/) : questions-réponses sur bash, zsh et la ligne de commande
- [Stack Overflow, tag PowerShell](https://stackoverflow.com/questions/tagged/powershell) : pour les questions spécifiques à PowerShell

## Et ensuite ?

Vous savez maintenant repérer (`pwd`, `ls`), vous déplacer avec des chemins relatifs et absolus, manipuler fichiers et dossiers, et trouver seul·es l'aide d'une commande ? Alors vous êtes prêt·es à continuer avec la documentation de votre shell.

Un oubli plus tard ? Revenez au [mémo des commandes](memos/commandes.md) !
