---
tags:
  - fiche
  - demarrer
  - deboguer
date: 2026-11-06
---

# Déboguer

> Version concernée : PHP 8 minimum (pour les exemples)

## En une phrase

Déboguer (ou "débuguer" ; ou simplement "_to debug_" en anglais), c'est trouver pourquoi un programme ne fait pas ce qu'on attend : plutôt que de modifier le code au hasard, on suit une méthode, généralement valable dans tous les langages.

## Prérequis

- Connaître les bases de PHP et savoir exécuter un script dans le terminal : fiche [Le terminal](../../technos/terminal/)
- Connaître les bases de HTML et CSS (pour le troisième exercice)

## Démarrer

Créer un fichier `test.php`, y écrire une ligne volontairement fausse (par exemple, oublier le `;` à la fin d'un `echo`), puis l'exécuter :

```shell
php test.php
```

PHP répond par un message d'erreur. C'est le point de départ de toute la fiche : **ce message est une aide, pas un reproche** !

## L'essentiel

### 1. Trois sortes de problèmes

| Problème                 | Ce qu'on observe                                                                  | Exemple                               |
| ------------------------ | --------------------------------------------------------------------------------- | ------------------------------------- |
| **Erreur de syntaxe**    | Le script ne démarre pas, un message s'affiche                                    | Un `;` ou une `}` oubliés             |
| **Erreur à l'exécution** | Le script démarre, puis s'arrête avec un message                                  | Appeler une fonction qui n'existe pas |
| **Bug de logique**       | Le script tourne jusqu'au bout, mais **le résultat est faux**, sans aucun message | Un `=` au lieu d'un `+=`              |

Les deux premières sont les plus faciles : PHP indique où chercher. Le bug de logique demande en revanche une méthode.

### 2. Lire un message d'erreur

```
PHP Parse error:  syntax error, unexpected variable "$age" in /home/my-pc/test.php on line 4
```

On y lit trois informations :

- **le type** (`Parse error`, une erreur de syntaxe),
- **la description** (PHP ne s'attendait pas à trouver `$age`),
- **l'emplacement** (`test.php`, ligne 4).

Attention : la ligne indiquée est celle où PHP **s'est aperçu** du problème. La cause est souvent **juste avant** : ici, un `;` manquant à la ligne 3 et non pas à la ligne 4 !

### 3. La méthode

1. **Reproduire** : savoir déclencher le problème à coup sûr, et noter le résultat attendu.
2. **Localiser** : lire le message d'erreur, ou repérer à partir de quelle étape le résultat devient faux.
3. **Formuler une hypothèse** : "Je pense que `$total` ne contient pas ce que je crois."
4. **Vérifier** l'hypothèse, en affichant les valeurs (voir ci-dessous).
5. **Corriger, puis retester** : le problème a disparu, et rien d'autre n'a été cassé !

On ne change qu'**une chose à la fois** : si on modifie trois lignes d'un coup, on ne sait plus laquelle a réglé le problème, ni si les deux autres en ont créé un nouveau ...

### 4. Afficher les valeurs et isoler

- **`var_dump($variable)`** affiche la valeur **et son type** : `int(15)`, `string(2) "15"`, `NULL`, ... C'est plus fiable qu'`echo`, qui n'affiche rien pour `null` ou `false`. En JavaScript, l'équivalent est **`console.log()`**.
- On place l'affichage **là où on a un doute** : avant une condition, dans une boucle, juste avant le résultat.
- **Isoler** : on met en commentaire une partie du code, ou on teste un petit morceau seul dans un fichier à part, pour réduire la zone où chercher.
- Une fois le bug corrigé, **on retire les affichages de débogage**.

### 5. Les outils de développement du navigateur

Pour une page web, les outils de développement (_DevTools_) s'ouvrent avec <kbd>F12</kbd> ou <kbd>Clic droit -> Inspecter</kbd>, dans Chrome comme dans Firefox. Trois onglets suffisent pour commencer :

| Onglet                                           | Il sert à ...                                                                     |
| ------------------------------------------------ | --------------------------------------------------------------------------------- |
| **Console**                                      | Lire les erreurs JavaScript et les `console.log()`                                |
| **Éléments** (Chrome) / **Inspecteur** (Firefox) | Voir le HTML réel de la page et les règles CSS appliquées à chaque élément        |
| **Réseau**                                       | Voir les fichiers chargés par la page, et ceux qui sont introuvables (erreur 404) |

## Exercices

Les énoncés sont dans [`exercices/README.md`](exercices/README.md) :

1. **Vérifier** : corriger une erreur de syntaxe à partir du message de PHP ;
2. **Manipuler** : trouver un bug de logique avec la méthode et `var_dump()` ;
3. **Explorer** : découvrir les DevTools pour réparer une petite page web.

## Pièges classiques

- **Modifier le code au hasard** jusqu'à ce que ça marche : on corrige parfois le symptôme, rarement la cause. On formule toujours une hypothèse (souvent simple) avant de toucher au code !
- **Ne lire que la ligne indiquée** : la cause est souvent une ligne plus haut (un `;`, une parenthèse ou une accolade oubliés) !
- **Ne pas relire le message en entier** : la description dit souvent exactement ce qui manque (`unexpected`, `undefined`, `expecting ";"`).
- **Page blanche en PHP web** : les erreurs ne s'affichent pas forcément dans le navigateur. On regarde aussi le terminal où tourne le serveur.
- **Oublier de retirer les `var_dump()`** : ils s'affichent ensuite pour tout le monde.

## Pour aller plus loin

**Documentation officielle**

- [`var_dump()` dans le manuel PHP](https://www.php.net/manual/fr/function.var-dump.php) : avec ses variantes `print_r()` et `var_export()` dans "Voir aussi".
- [Chrome DevTools](https://developer.chrome.com/docs/devtools) et [outils de développement de Firefox](https://firefox-source-docs.mozilla.org/devtools-user/) : la doc de chaque onglet (recommandée en anglais pour une doc complète).

**Pour approfondir**

- [La méthode du canard en plastique](https://fr.wikipedia.org/wiki/M%C3%A9thode_du_canard_en_plastique) : expliquer son code ligne par ligne, à voix haute, fait souvent apparaître le bug. C'est aussi la meilleure façon de vérifier qu'on sait expliquer son code.
- [Xdebug](https://xdebug.org/) : un débogueur pour PHP, qui permet d'arrêter le programme sur une ligne (_point d'arrêt_) et d'avancer pas à pas. Les DevTools proposent la même chose pour JavaScript, dans l'onglet **Sources**.

## Et ensuite ?

Vous savez maintenant reconnaître la sorte de problème, lire un message d'erreur et suivre une méthode plutôt que tâtonner : vous êtes prêt·es à déboguer seul·es dans n'importe quel langage. Si vous restez bloqué·es malgré tout, c'est le moment de chercher dans la doc (fiche [Lire une documentation](../lire-une-doc/)), puis de demander de l'aide.

Un doute plus tard ? Revenez à la méthode en cinq étapes, sinon faites une pause : inutile de "forcer" une résolution, laisser vous un peu d'air avant de revenir à la charge !
