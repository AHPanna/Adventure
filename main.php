<?php
include'src/fonction.php'; //recuperation de la map
include'src/map.php'; //recuperation des fonctions

$command = command();
//variable global
$longeur = $command[0][2]; //varible global
$largeur = $command[0][4]; //varible global
//ajout des varibles par defaut
$map_init = init_map($longeur,$largeur); 

    //test postion
     echo "<pre>";
     print_r($command);
     echo "</pre>";           
    
//$map[1][1]='M'; //test ajout valeur manuel
// $map[1][2]='B';
// $map[1][3]='C';

//injection des parametres dans la map

$map=injection($map_init,$command);


//display map @param @map @largeur @hauteur 
display($map,$longeur,$largeur);