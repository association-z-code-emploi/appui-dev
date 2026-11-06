---
tags:
  - fiche
  - demarrer
  - lire-une-doc
date: 2026-11-06
---

# Lire une documentation

> Version concernée : PHP 8 minimum (pour les exemples)

## En une phrase

La documentation officielle est la source la plus fiable et la plus à jour sur une techno : savoir s'y repérer et lire une page de référence permet de trouver seul·e la réponse à la plupart de ses questions.

## Prérequis

- Connaître les bases de PHP : variables, tableaux, fonctions
- Savoir exécuter un script PHP dans le terminal : `php mon-script.php`

## Démarrer

1. Ouvrir le [manuel PHP](https://www.php.net/manual/fr/) et repérer la barre de recherche, en haut de la page ;
2. Y taper `explode`, puis ouvrir la page de la fonction.

C'est la page qui servira d'exemple dans toute la fiche : on la gardera donc ouverte à côté.

## L'essentiel

### 1. Quatre sortes de pages

Une documentation contient en général quatre sortes de pages, qui répondent à quatre besoins différents :

| Sorte de page      | Elle répond à ...                       | Dans le manuel PHP                                                 |
| ------------------ | --------------------------------------- | ------------------------------------------------------------------ |
| **Tutoriel**       | "Je débute, guidez-moi."                | _Getting Started_                                                  |
| **Guide pratique** | "Comment faire telle tâche ?"           | Les chapitres sur les fonctionnalités (formulaires, sessions, ...) |
| **Référence**      | "Que fait précisément cette fonction ?" | Une page par fonction, comme `explode()`                           |
| **Explication**    | "Pourquoi ça fonctionne ainsi ?"        | Les chapitres sur le langage (types, portée des variables, ...)    |

On choisit la sorte de page selon son besoin : inutile de relire un tutoriel pour vérifier un paramètre, la référence répond plus vite.

### 2. Anatomie d'une page de référence

La page d'`explode()` suit le même plan que toutes les pages de fonctions :

- **Description** : ce que fait la fonction, et sa **syntaxe** :

  ```php
  explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
  ```

  On peut y lire le nom de chaque paramètre et son type (`string`, `int`), le type de la valeur renvoyée (`: array`), et les paramètres **facultatifs** : ceux qui ont une valeur par défaut (`= PHP_INT_MAX`).

- **Liste de paramètres** : le rôle de chaque paramètre, et ses cas particuliers
- **Valeurs de retour** : ce que la fonction renvoie, y compris en cas de problème
- **Historique** : ce qui a changé selon les versions de PHP
- **Exemples** : du code prêt à tester C'est souvent la section la plus utile pour comprendre
- **Voir aussi** : les fonctions proches, ou qui font l'inverse

### 3. La version

Une doc décrit une version précise d'une techno. Sur php.net, la section **Historique** indique ce qui a changé et depuis quand. D'autres docs (Symfony, Node, ...) proposent de sélectionner la version en haut de page. On vérifie toujours que la doc correspond à la version qu'on utilise : `php -v` affiche la sienne.

### 4. Chercher efficacement

- La **recherche interne** de la doc est le plus court chemin quand on connaît le nom de ce qu'on cherche.
- Sinon, dans un moteur de recherche, on ajoute le nom de la techno : `php découper un texte`.
- Parmi les résultats, on privilégie la doc officielle : un article de blog peut être ancien ou approximatif !

### 5. Lire en anglais

Les traductions sont pratiques, mais la version anglaise d'une doc est souvent la plus complète et la plus à jour.

Quelques mots reviennent partout :

| Anglais                 | Sens                         |
| ----------------------- | ---------------------------- |
| _returns_               | renvoie                      |
| _optional_ / _required_ | facultatif / obligatoire     |
| _default_               | valeur par défaut            |
| _deprecated_            | obsolète, à ne plus utiliser |
| _throws_                | lance (une erreur)           |
| _since_                 | depuis (telle version)       |

## Exercices

Les énoncés sont dans [`exercices/README.md`](exercices/README.md) :

1. **Vérifier** : trouver la page d'`explode()` et répondre à trois questions sur sa syntaxe ;
2. **Manipuler** : prédire le résultat de trois appels d'`explode()` avec la doc seule, puis vérifier en les exécutant ;
3. **Explorer** : lire la page de `split()` (JavaScript) sur MDN et la comparer à celle d'`explode()`.

## Pièges classiques

- **Lire seulement la première phrase** : les cas particuliers sont dans "Liste de paramètres" et "Valeurs de retour". C'est souvent là qu'est la réponse.
- **Copier un exemple sans lire la syntaxe** : l'ordre des paramètres compte, et il varie d'une fonction à l'autre.
- **Se fier aux notes des utilisateurs** (_User Contributed Notes_, en bas des pages de php.net) : parfois utiles, mais souvent anciennes et non vérifiées. On les lit en dernier, avec prudence.
- **Suivre la doc d'une autre version** : une fonction peut avoir changé de comportement. On vérifie l'Historique et sa propre version.
- **Chercher sur le web avant de chercher dans la doc** : on tombe sur des réponses datées ou incomplètes, alors que la doc avait la réponse.

## Pour aller plus loin

**Documentation officielle**

- [Manuel PHP](https://www.php.net/manual/fr/) : la référence de PHP, en français et en anglais
- [W3Schools PHP](https://www.w3schools.com/php/) : une autre référence (non officielle) de PHP, en anglais
- [MDN Web Docs](https://developer.mozilla.org/fr/) : la référence pour HTML, CSS et JavaScript
- [W3Schools JS](https://www.w3schools.com/js/) : une autre référence (non officielle) de JS, toujours en anglais

**Pour approfondir**

- [Diátaxis](https://diataxis.fr/) : le modèle des quatre sortes de pages, expliqué par son auteur (en anglais). Utile aussi le jour où on écrit sa propre doc !

## Et ensuite ?

Vous savez maintenant vous repérer dans une documentation et lire une page de référence : vous êtes alors prêt·es à chercher seul·es dans la doc de n'importe quelle techno !

Un doute plus tard ? Revenez à l'anatomie d'une page de référence.
