---
tags:
  - exercices
  - demarrer
  - lire-une-doc
date: 2026-11-06
---

# Exercices : Lire une documentation

> 🔙 Retour à la [fiche](../README.md)

Pour les deux premiers exercices, n'utilisez **que** la page d'`explode()` du manuel PHP : pas de moteur de recherche, pas de tutoriel. On compte sur vous (pour vous-même) !

## 1. Vérifier

Sur la page d'`explode()`, trouvez :

1. le type de la valeur renvoyée par la fonction ;
2. le paramètre facultatif, et sa valeur par défaut ;
3. ce qui a changé dans PHP 8.0.

**Résultat attendu** : trois réponses courtes, et pour chacune le nom de la section où vous l'avez trouvée.

## 2. Manipuler

1. Pour chacun de ces appels, écrivez **sur papier** le tableau que vous pensez obtenir :

   ```php
   explode(",", "florian,nicolas,martin");
   explode(",", "florian,nicolas,martin", 2);
   explode(",", "florian,nicolas,martin", -1);
   ```

2. Créez un fichier `explode.php`, affichez le résultat de chaque appel avec `print_r()`, puis exécutez-le.
3. Comparez avec vos prédictions. Pour chaque écart, retrouvez dans la doc la phrase qui l'explique.

## 3. Explorer

> ℹ️ Vous pouvez écrire du JavaScript sans installation avec un bac-à-sable en ligne, comme CodePen.

En JavaScript, la méthode `split()` découpe aussi une chaîne. Sur [MDN](https://developer.mozilla.org/fr/), trouvez sa page de référence, puis :

1. repérez les sections qui correspondent à celles de la page d'`explode()`, et celles qui n'ont pas d'équivalent ;
2. comparez le rôle du deuxième paramètre de `split()` avec celui de `$limit` dans `explode()`.

Les deux fonctions se ressemblent, mais pas en tout point : à vous de trouver la différence !
