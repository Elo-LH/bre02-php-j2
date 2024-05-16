# Mini Projet CV

## Consignes

### Intégration

Vous trouverez sur Discord trois maquettes :

- une pour un formulaire
- une pour un cv de couleur bleue
- une pour un cv de couleur rouge

Vous allez devoir réaliser l'intégration de ces trois maquettes dans deux fichiers :

- `formulaire.phtml` pour l'intégration du formulaire
- `cv.phtml` pour l'intégration du CV

### Dynamisation

Vous allez créer un fichier `index.php`. Si aucun formulaire n'est soumis, `index.php` require `formulaire.phtml`.
Si le formulaire a été soumis, `index.php` require `cv.phtml` qui sera rempli avec les information envoyées par le formulaire.

Dans votre formulaire, vous pouvez choisir la couleur de votre CV entre bleu et rouge, faites en sorte d'utiliser cette option du formulaire pour modifier l'apprence du CV.


## Informations Design

### Polices de caractères

```html
<link rel="preconnect" href="https://fonts.googleapis.com">  
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;800&display=swap" rel="stylesheet">
```

```css
font-family: 'Montserrat', sans-serif;
```

### Couleurs

```css
/*  
  
rouge : #b50604;  
bleu : #24527c;  
blanc fond : #fefefe;  
blanc : white;  
gris : #bababa;  
  
*/
```
