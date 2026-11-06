---
tags:
  - fiche
  - demarrer
  - demander-de-l-aide
date: 2026-11-06
---

# Demander de l'aide

## En une phrase

Tout le monde se retrouve bloqué un jour : savoir **quand** demander et **comment** formuler sa question est une compétence essentiel chez un·e dev, fait partie de l'autonomie, et permet d'obtenir une réponse utile plutôt qu'une série de questions en retour.

## Prérequis

- Avoir lu les fiches [Lire une documentation](../lire-une-doc/) et [Déboguer](../deboguer/) : ce sont les deux premières choses à faire avant de demander

## Démarrer

Repérer, dès maintenant, **où** on peut demander de l'aide dans sa formation : un canal de discussion, des créneaux avec l'équipe pédagogique, son binôme, ... et les noter dans son fichier `notes.md`. Le jour où on est bloqué·e, on ne perd pas de temps à chercher à qui s'adresser.

## L'essentiel

### 1. Avant de demander

Une courte liste à parcourir, dans l'ordre :

- **Découper le problème** en petites étapes, écrites en pseudo-code : on repère souvent l'étape qui coince, et elle est plus simple à chercher que le problème entier.
- **Chercher l'étape qui coince**, avec le nom de la techno : `php reste d'une division` plutôt que `pair ou impair`.
- **Relire le message d'erreur** en entier, et le rechercher tel quel, sans le chemin du fichier.
- **Consulter la doc** (fiche [Lire une documentation](../lire-une-doc/)).
- **Vérifier les fautes de frappe** : un nom de variable mal orthographié, un `;` oublié.
- **Appliquer la méthode de débogage** (fiche [Déboguer](../deboguer/)).
- **Faire une pause**, puis **expliquer son code à voix haute**, ligne par ligne : la solution apparaît souvent à ce moment-là !

### 2. Savoir quand demander

Après **une vingtaine de minutes** (environ) **sans nouvelle piste**, on demande. Rester bloqué·e des heures n'apprend rien de plus, et demander n'est pas un échec : c'est même une compétence attendue et challengée en entreprise !

Quand on demande, **on pose directement sa question**. "Quelqu'un s'y connaît en PHP ?" oblige à attendre une réponse avant même d'avoir exposé le problème.

### 3. Bien formuler sa question

Sans tomber dans quelque chose de dogmatique, une bonne question contient généralement cinq parties :

```md
**Contexte** : ce que je cherche à faire (le but, pas seulement l'étape bloquante)
**Résultat attendu** : ce que je devrais obtenir
**Résultat obtenu** : ce que j'obtiens, avec le message d'erreur copié en texte
**Ce que j'ai essayé** : mes pistes, et ce qu'elles ont donné
**Code** : le plus court extrait qui reproduit le problème, en bloc de code
```

- Le code est envoyé **en texte formaté**, pas en capture d'écran : on peut le lire, le copier et le tester. Une capture sert seulement pour un problème visuel.
- On demande **une piste** plutôt que la solution complète : on apprend davantage, et on saura résoudre le problème suivant !
- On décrit **le vrai problème**, pas seulement la solution qu'on a imaginée. Demander "comment récupérer les trois derniers caractères d'un nom de fichier ?" quand on veut en fait connaître son extension, c'est risquer une réponse certes juste mais à la mauvaise question.

### 4. Où demander

Dans l'ordre : **son binôme ou ses camarades**, puis **l'équipe pédagogique**, puis les **communautés en ligne**, où l'on vérifie d'abord que la question n'a pas déjà été posée.

> ℹ️ **Et l'IA ?**
>
> Les règles sur son usage dépendent de la formation et de son avancement : on se renseigne auprès de son équipe pédagogique. Si vous êtes en apprentissage, souvenez-vous que vous apprendrez bien mieux par vous-même que si on vous donne "bêtement" la réponse !

### 5. Après la réponse

- **On accepte les demandes de précisions** : la personne qui aide ne voit ni l'écran ni le contexte. Ses questions servent à ne pas mal orienter.
- **On comprend la solution** avant de l'appliquer, et on vérifie qu'on saurait l'expliquer à son tour !
- **On note** le problème et sa solution dans `notes.md`.
- Sur un forum, **on indique ce qui a résolu le problème** : la personne suivante gagnera du temps !

Et quand c'est à nous d'aider un·e camarade : voir le mémo [Aider les autres](memos/aider-les-autres.md).

## Exercices

Les énoncés sont dans [`exercices/README.md`](exercices/README.md) :

1. **Vérifier** : résoudre seul·e une erreur PHP à partir d'une recherche ;
2. **Manipuler** : réécrire une question mal posée en suivant le modèle en cinq parties ;
3. **Explorer** : comparer la fiche avec les conseils officiels de Stack Overflow.

## Pièges classiques

- **Demander à demander** ("Je peux poser une question ?") : on perd un échange. On pose directement sa question, et si la personne est effectivement occupée, elle saura vous le signaler !
- **Envoyer une capture d'écran de son code** : illisible sur téléphone, impossible à copier. On envoie plutôt le texte, si possible formaté.
- **Écrire "ça marche pas"** : on précise ce qui était attendu et ce qui est obtenu.
- **Demander la solution complète** : on obtient un code qu'on ne sait pas expliquer. Mieux vaut demander une piste !
- **Disparaître une fois la réponse obtenue** : on confirme si ça a fonctionné, et on remercie !

## Pour aller plus loin

**Pour approfondir**

- [Don't ask to ask, just ask](https://dontasktoask.com/) : pourquoi poser directement sa question (en anglais)
- [The XY Problem](https://xyproblem.info/) : le piège de la question qui porte sur la solution imaginée plutôt que sur le vrai problème (en anglais)
- [The Odin Project : Asking for help](https://www.theodinproject.com/lessons/foundations-asking-for-help) et [Before asking for help](https://www.theodinproject.com/guides/community/before_asking) : deux guides détaillés sur le même sujet (en anglais)

## Et ensuite ?

Vous savez maintenant quand demander de l'aide, comment formuler votre question et quoi faire de la réponse : vous êtes prêt·es à débloquer une situation sans y passer des heures ... normalement !

Un doute plus tard ? Revenez au modèle de question en cinq parties.
