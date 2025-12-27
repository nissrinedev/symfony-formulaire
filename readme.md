# TP 3 - Les formulaires en Symfony

## Informations
- **Nom:** [belmir nissrine]
- **Date:** 27/12/2025
- EHEI 2025/2026

## Résumé du travail effectué

### Objectif
Création d'une page produit avec formulaire Symfony utilisant les FormTypes et la personnalisation Twig.

### Réalisations

#### 1. Création du FormType (`ProductOrderType`)
- Champ `quantity` : IntegerType avec validation min/max
- Champ `color` : ChoiceType avec 3 options
- Bouton submit intégré
- Protection CSRF activée
- Classes Bootstrap appliquées

#### 2. Controller (`ProductController`)
- Route principale `/`
- Gestion de la soumission du formulaire
- Validation des données
- Message flash de confirmation
- Redirection après soumission

#### 3. Templates Twig
- `base.html.twig` : Intégration Bootstrap 5.3
- `product/show.html.twig` : Page produit complète avec formulaire

