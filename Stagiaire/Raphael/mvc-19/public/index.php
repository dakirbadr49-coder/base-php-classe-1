<?php
# Stagiaire/Raphael/mvc-19/public/index.php

# CONTROLEUR FRONTAL
/* 
Chargement une seul fois 
et qui arrête
le script en cas d'échec 
*/
require_once "../config.php";

// si il n'éxiste pas de variable GET nommée 'page'
if(!isset($_GET['page'])){
    //  on charge la page d'accueil
    include ROOT_PATH."/view/index.php";
// sinonsi la variable get 'page' a une valeur 
// acceptée dans la constante de type array PUBLIC_PAGES
}elseif(in_array($_GET['page'],PUBLIC_PAGES)){

  // si la variable get correspond à une valeur
  // acceptée dans le tableau
  include ROOT_PATH."/view/".$_GET['page'].".php";

// sinon, la variable get page existe
}else{

    // Appel de l'erreur 404
    include ROOT_PATH."/view/404.php";

}