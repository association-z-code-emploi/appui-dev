---
tags:
  - exercices
  - demarrer
  - deboguer
date: 2026-11-06
---

# Exercices : Déboguer

> 🔙 Retour à la [fiche](../README.md)

Chaque exercice part de fichiers fournis dans son dossier. Copiez le dossier avant de commencer, pour garder l'original intact.

## 1. Vérifier

Dans le dossier [`1-verifier/`](1-verifier/) :

1. Exécutez `bonjour.php` dans le terminal ;
2. Dans le message d'erreur, repérez le type d'erreur, la description et la ligne indiquée ;
3. Trouvez la cause, corrigez-la, puis exécutez de nouveau le script.

**Résultat attendu** : le script affiche `Bonjour Ada, tu as 28 ans.` Notez aussi sur quelle ligne se trouvait vraiment la cause, et pourquoi PHP en indiquait une autre.

## 2. Manipuler

Dans le dossier [`2-manipuler/`](2-manipuler/), le script `moyenne.php` calcule la moyenne des notes `12`, `15`, `9` et `18`.

1. Calculez la moyenne attendue à la main.
2. Exécutez le script : il n'affiche aucune erreur, mais le résultat est faux.
3. Écrivez votre hypothèse en commentaire dans le script, avant toute modification.
4. Vérifiez-la avec `var_dump()`, placé là où vous avez un doute.
5. Corrigez, retestez, puis retirez vos `var_dump()`.

## 3. Explorer

Dans le dossier [`3-explorer/`](3-explorer/), la page `index.html` devrait afficher un titre en bleu, et un message quand on clique sur le bouton. Elle contient **trois problèmes**.

Ouvrez la page dans votre navigateur, puis les DevTools (<kbd>F12</kbd> ou <kbd>Clic droit -> Inspecter</kbd>). En vous aidant de la documentation des DevTools, trouvez chaque problème grâce à un onglet différent : **Console**, **Éléments** (ou **Inspecteur**) et **Réseau**. Corrigez-les un par un, en rechargeant la page après chaque correction.
