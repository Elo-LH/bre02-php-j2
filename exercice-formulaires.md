# Exercice formulaires

## Étape 0

- Créez un repository public avec un README sur GitHub, appelez-le `bre02-php-j2`
- Clonez le dans le dossier `sites/php` de votre IDE.
- Créez un dossier `formulaires` dans votre dossier `bre02-php-j2`.

## Étape 1 : Créer le formulaire

Vous allez devoir créer un formulaire qui permet de saisir deux nombres entiers et de choisir dans un select entre 5 opérations : multiplication, division, addition, soustraction et modulo.

Vous afficherez le résultat de l'opération au dessus de votre formulaire.

Tout le code de votre exercice sera dans un fichier index.php.


## Étape 2 : Récupérer les champs du formulaire

Dans votre `index.php` si le formulaire a été soumis vous allez devoir récupérer les valeurs dans la superglobale `$_POST`, n'oubliez pas de bien vérifier si les champs existent dans `$_POST` sinon ça va planter :)


## Étape 3 : Créer les fonctions

Vous allez créer les fonctions correspondants aux opérations mathématiques :

### addition

```php
function add(int $nb1, int $nb2) : int
{

}
```

### soustraction

```php
function substract(int $nb1, int $nb2) : int
{

}
```

### multiplication

```php
function multiply(int $nb1, int $nb2) : int
{

}
```

### division

```php
function divide(int $nb1, int $nb2) : ?int
{

}
```

### modulo

```php
function modulo(int $nb1, int $nb2) : ?int
{

}
```

## Étape 4 : Utiliser les conditions pour appeler les bonnes fonctions

Lorsque vous allez recevoir les données du formulaire vous allez devoir utiliser des conditions afin d'appeler la bonne opération et lui passer les deux nombres.