<?php

function init_map($longeur,$largeur)
{   
    //remplissage du tableau a double dimension
    $wordl = array();//init tableau
    for($x = 0 ; $x < $largeur ; $x++)
    {
        for($y = 0 ; $y < $longeur ; $y++)
        {  
           
           $wordl[$x][$y] =" . ";//ajout valeur par défaut & &nbsp; = espace vide
        }
    }
    return $wordl; //important le return de la map
}


function display($map,$longeur,$largeur)
{
     for($x_x = 0 ; $x_x < $largeur ; $x_x++)
    {
        for($y_y = 0 ; $y_y < $longeur ; $y_y++)
        {
           echo "&nbsp;&nbsp;".$map[$x_x][$y_y]."&nbsp;&nbsp;";//affichage de la valeur
        }
        echo "<br>";
    }
}
?>