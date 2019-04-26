# Installation de wordpress et son environnement 

## Tutoriel
https://bloginfos.com/laragon/

## Installation de Laragon
https://translate.googleusercontent.com/translate_c?depth=1&hl=fr&prev=search&rurl=translate.google.com&sl=en&sp=nmt4&u=https://github.com/leokhoa/laragon/releases&xid=17259,15700021,15700186,15700190,15700253,15700256,15700259&usg=ALkJrhikSBzigq-jlG_bmp4s6d_6ai4-7g
 
ou

https://laragon.org/download/

## Télécharger wordpress
*actuellement en version 5.1.1*

https://fr.wordpress.org/download/

### Configuration de wordpress et Laragon
- Copier le dossier wordpress dans le dossier www de Laragon
- Créer une BDD depuis l'interface de Laragon
- *BDD name : wp_base*
- Lancé les services de l'interface de laragon (MySQL et Apache)
- Accéder au dossier www `localhost/www/nomDuDossierWordpress`
- Installer wordpress
- Installer le thème Flat : https://fr.wordpress.org/themes/flat/
- Créer un thème enfant dans `wordpress\wp-content\themes\nomDuTheme`à partir du thème flat
- Créer un fichier style.css
- Créer un fichier functions.php et copier ce code à l'intérieur 
```<?php
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );```