---
tags:
  - exercices
  - demarrer
  - demander-de-l-aide
date: 2026-11-06
---

# Exercices : Demander de l'aide

> 🔙 Retour à la [fiche](../README.md)

## 1. Vérifier

Créez un fichier `bonjour.php` avec ce code, puis exécutez-le :

```php
<?php

$utilisateur = ["prenom" => "Clara", "age" => 28];
echo "Bonjour " . $utilisateur["nom"] . " !\n";
```

PHP affiche un avertissement. **Sans demander à personne** :

1. recherchez le message d'erreur dans un moteur de recherche, sans le chemin du fichier ;
2. trouvez la cause, puis corrigez le code pour qu'il affiche `Bonjour Clara !` ;
3. notez dans `notes.md` les mots-clés de recherche qui vous ont mené·e à la réponse.

**Résultat attendu** : le script affiche `Bonjour Clara !`, sans avertissement.

## 2. Manipuler

Clara envoie ce message à son binôme, avec une capture d'écran floue de son code :

> Mon code marche pas 😩 je dois afficher le résultat mais je sais pas comment faire

Voici ce que Clara ne dit pas :

- Son script `panier.php` doit afficher le total d'un panier, soit `Total : 42.5 €`.
- Dans le navigateur, la page affiche seulement `Total :  €`.
- Clara a déjà vérifié que le fichier était bien enregistré, et a rechargé la page plusieurs fois.
- Voici son code :

  ```php
  <?php

  $prix = [12.50, 20, 10];
  $total = 0;

  foreach ($prix as $p) {
      $total += $p;
  }

  echo "Total : " . $totale . " €\n";
  ```

1. Réécrivez le message de Clara en suivant le modèle en cinq parties de la fiche.
2. Relisez votre question comme si vous étiez le binôme : a-t-il tout ce qu'il faut pour aider sans poser de question ?
3. Bonus : en rédigeant la question, avez-vous trouvé le problème ?

## 3. Explorer

Lisez les deux pages d'aide de Stack Overflow : [How do I ask a good question?](https://stackoverflow.com/help/how-to-ask) et [How to create a Minimal, Reproducible Example](https://stackoverflow.com/help/minimal-reproducible-example).

1. Notez deux conseils qui ne figurent pas dans la fiche.
2. Appliquez la notion d'exemple minimal au code de Clara : quel est le plus petit code qui reproduirait encore son problème ?
