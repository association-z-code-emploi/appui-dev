---
tags:
  - memo
  - projets
  - idees-de-projets
date: 2026-11-06
---

# Idées de projets

Le meilleur moyen de progresser, c'est de construire des projets par soi-même ! Cette page propose des idées classées par niveau, à réaliser seul·e ou à plusieurs.

## Comment s'y prendre

1. **Choisir une idée à sa portée** : un projet qui avance motive plus qu'un projet trop ambitieux qui s'arrête.
2. **Concevoir avant de coder** : lister les fonctionnalités, découper en étapes, écrire ces étapes en commentaires.
3. **Viser le minimum d'abord** : un projet qui fonctionne, même sans style, vaut mieux qu'un projet joli mais inachevé. Les bonus viennent ensuite.
4. **Savoir expliquer son code** : chaque ligne du projet doit pouvoir être expliquée, par soi.

La démarche détaillée est dans la fiche [Apprendre une nouvelle techno](../demarrer/apprendre-une-techno/).

### Deviner un nombre

Le programme choisit un nombre au hasard, et on doit le deviner

- **Minimum** : dans le terminal, le programme indique "plus grand" ou "plus petit" à chaque proposition, jusqu'à la bonne réponse. La fonction pour lire une saisie est à chercher dans la doc
- **Bonus** : compter les essais, limiter leur nombre, proposer de rejouer
- **Technos possibles** : PHP, JavaScript

### Calculatrice

Un formulaire avec deux nombres et une opération, et le résultat affiché

- **Minimum** : les quatre opérations de base
- **Bonus** : gérer la division par zéro, garder l'historique des calculs (sessions)
- **Technos possibles** : PHP, JavaScript

### Convertisseur de devises

Convertir un montant d'une devise vers une autre

- **Minimum** : les taux de change dans un tableau, un formulaire avec le montant et les deux devises
- **Bonus** : lire les taux depuis un fichier JSON, afficher la conversion dans toutes les devises à la fois
- **Technos possibles** : PHP, JavaScript

### Liste de tâches

Ajouter, cocher et supprimer des tâches

- **Minimum** : afficher la liste, ajouter une tâche par un formulaire
- **Bonus** : cocher une tâche, la supprimer, enregistrer la liste dans un fichier JSON
- **Technos possibles** : PHP, JavaScript

### Carnet de contacts

Une liste de contacts, avec une page par contact

- **Minimum** : afficher les contacts depuis un tableau, une page de détail pour chacun
- **Bonus** : ajouter un contact par un formulaire, rechercher par nom, enregistrer dans un fichier JSON
- **Technos possibles** : PHP

## Intermédiaire

Une base de données, du JavaScript dans la page, une API externe

### Suivi de dépenses

Enregistrer ses dépenses et voir où part l'argent

- **Minimum** : ajouter une dépense (montant, catégorie, date) dans une base de données, afficher le total par catégorie
- **Bonus** : filtrer par mois, afficher un graphique
- **Technos possibles** : PHP et SQL, Node.js

### Mini-blog

Publier des articles, et les lire

- **Minimum** : créer, afficher, modifier et supprimer des articles dans une base de données
- **Bonus** : des commentaires, une pagination
- **Technos possibles** : PHP et SQL, Node.js

### Quiz

Une série de questions à choix multiples, avec un score à la fin

- **Minimum** : les questions stockées dans un fichier JSON ou une base, le score affiché à la fin
- **Bonus** : passer d'une question à l'autre sans recharger la page (JavaScript), un minuteur
- **Technos possibles** : PHP, JavaScript

### Météo

Afficher la météo d'une ville à partir d'une API publique

- **Minimum** : saisir une ville, afficher la température du jour ; [Open-Meteo](https://open-meteo.com/) est une API gratuite, sans compte à créer
- **Bonus** : les prévisions des jours suivants, une icône selon le temps
- **Technos possibles** : JavaScript, PHP

## Avancé

Un framework, des comptes utilisateurs, un déploiement

### Réservation de salles

Réserver un créneau dans une salle, sans double réservation

- **Minimum** : des comptes utilisateurs, la liste des salles, réserver et annuler un créneau
- **Bonus** : un rôle administrateur qui gère les salles, un affichage en calendrier
- **Technos possibles** : Symfony, Laravel, Node.js

### Bibliothèque partagée

Un catalogue de livres que les membres s'empruntent

- **Minimum** : des comptes utilisateurs, le catalogue, emprunter et rendre un livre
- **Bonus** : une liste d'attente, des rappels de retour
- **Technos possibles** : Symfony, Laravel, Node.js

### API et interface séparées

Reprendre la liste de tâches, avec un back-end qui expose une API et un front-end qui la consomme

- **Minimum** : une API qui permet de lister, ajouter et supprimer des tâches ; une page qui l'utilise
- **Bonus** : des comptes utilisateurs, une interface en React
- **Technos possibles** : PHP ou Node.js pour l'API, JavaScript ou React pour l'interface

### Portfolio en ligne

Un site personnel qui présente ses projets, utile pour la recherche d'alternance

- **Minimum** : une page de présentation et une page par projet, mises en ligne
- **Bonus** : un formulaire de contact fonctionnel, un nom de domaine personnalisé
- **Technos possibles** : HTML et CSS (site statique), PHP ou un framework (avec formulaire)

## S'entraîner autrement

Des plateformes de défis, pour pratiquer entre deux projets :

- [Frontend Mentor](https://www.frontendmentor.io/) (en anglais) : des maquettes réelles à intégrer en HTML, CSS et JS, du plus simple au plus complet
- [CSS Battle](https://cssbattle.dev/) (en anglais) : reproduire une image avec le moins de CSS possible
- [Codingame](https://www.codingame.com/) : des problèmes d'algorithmique sous forme de jeux, dans de nombreux langages dont PHP
- [JavaScript 30](https://javascript30.com/) (en anglais) : 30 petits projets en JavaScript, sans framework, gratuits
- [Oh My Git!](https://ohmygit.org/) (en anglais) : un jeu à télécharger pour comprendre Git en manipulant visuellement un dépôt
