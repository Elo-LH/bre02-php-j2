---
theme: theme.json
author: Gaellan
date: May 16, 2024
paging: Page %d sur %d
---

# Introduction au PHP

## Plan du cours

### Les formulaires en PHP

### Exercice sur les formulaires

### Require

### Exercice sur require

---

# Les formulaires en PHP

## Transmettre des données d'une page à une autre

Il existe deux techniques principales pour transmettre des données d'une page à une autre (ou à elle-même) en PHP, les paramètres d'URL ou les formulaires.

### Par l'URL

Une URL qui contient des paramètres à la forme suivante :

http://monsite.com?param1=truc&param2=bidule.

Pour récupérer ces paramètres coté PHP on va utiliser la superglobale `$_GET`.

```php
echo $_GET["param1"]; // afficherait truc
echo $_GET["param2"]; // afficherait bidule
```

### Par les formulaires

Dans un formulaire HTML (donc ceux que vous trouverez dans vos `.phtml`) vous avez deux attributs très importants pour ce qui va suivre : l'`action` et la `method`.

```html
<form action="index.php" method="GET">
    <fieldset>
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName" />
    </fieldset>
    <fieldset>
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName" />
    </fieldset>
    <button type="submit">Envoyer</button>
</form>
```

```php
<?php
echo $_GET["firstName"];
// ou si le formulaire a la method="POST"
echo $_POST["lastName"];
?>
```
---

# Formulaires en PHP

## Vérifier si une valeur existe et/ou est vide

Pour vérifier si une valeur existe dans `$_GET` ou dans `$_POST`, utilisez la fonction `isset`.

```php
if(isset($_GET["maVariable"])) // vérifie si la valeur existe
{

}
```

Pour vérifier si elle n'est pas vide : 

```php
if(!empty($_POST["maVariable"]))
{

}
```

Et pour vérifier les deux :

```php
if(isset($_GET["maVariable"]) && !empty($_GET["maVariable"]))
{

}
```


---

# Exercices sur les formulaires

Dans le fichier `exercice-formulaires.md` sur Discord.

---

# Require

`require` est une fonctionnalité native de PHP qui permet d'injecter le contenu d'un fichier dans la page.

Pour l'instant nous allons nous en servir pour afficher le contenu de nos fichiers `.phtml` depuis nos fichiers `.php`.

Plus tard dans le module c'est aussi grâce à `require` que nous pourrons utiliser nos classes.

## Utiliser require

Pour utiliser `require` c'est assez simple : 

```php
require "chemin-du-fichier.phtml";
```

Donc si j'ai un fichier `home.phtml` dans un dossier `templates` : 

```php
require "templates/home.phtml";
```

💡 Lorsque vous faites un `require` d'un fichier, toutes les variables déclarées avant ce `require` seront disponibles dans le fichier.

index.php
```php
$title = "Mon titre";

require "home.phtml";

$content = "Mon contenu";
```

home.phtml
```php
// la variable existe
echo $title;

// la variable n'existe pas 
echo $content;
```

---

# Exercices sur require

Dans le fichier `exercices-require.md` sur Discord.

