<?php
include'src/fonction.php'; //recuperation de la map
include'src/map.php'; //recuperation des fonctions

//global variable
$temp_lignes = compt_ligne($lines);
$run_command = cut($temp_lignes);
$longeur = (int)$run_command[0][1]; //varible global
$largeur = (int)$run_command[0][2]; //varible global

//ajout des varibles par defaut
$map_init = init_map($longeur,$largeur); 

    //test tab
     echo "<pre>";
     print_r($run_command);
     echo "</pre>";           
    

//injection des parametres dans la map
$map=injection($map_init,$run_command);

//$map[1][1]='M'; //test ajout valeur manuel
//$map[1][2]='B';
//$map[3][2]='C';


//display map @param @map @largeur @hauteur 
display($map,$longeur,$largeur);