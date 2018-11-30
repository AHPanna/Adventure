<?php
//fonction compteur permet de retourner la somme total des lignes et commande 
function compt_ligne($lines)
{
    $c_lines=0;
    foreach ($lines as $c)
    {
        $c_lines++;
    }
return $c_lines;
}

//fonction permettant de relever le nombre de characters dans un elignes;
function compteur_ligne($command){
    $c_command=0;
   foreach ($command as $c)
    {
        $c_command++;
    }
    return $c_command;
}


//fonction retourne tableau a deux dimension avec les configurations 
function command(){
    //fichier source commande
    $file = "src/command.txt";
    //etude des lignes
    $lines = file($file, FILE_IGNORE_NEW_LINES);// [tableau] juste la prmeier ligne
    //compteur de lignes et commande
    $c_count_ligne = compt_ligne($lines);

    //ajout des valeurs
    $wordl = array();
    $count = 0; 
    for($x = 0 ; $x < $c_count_ligne ; $x++) {     
        $world[$x] = $lines[$x]; 
        
        $command = str_split($lines[$x]);//[tableau] split en chaque caracteres de mon string
        $c_count_char=compteur_ligne($command);
       
        for($y = 0 ; $y < $c_count_char ; $y++) {
                $wordl[$x][$y] = $command[$y];
            }
         $command[$count++];// incrementation de la ligne
    }
    return $wordl;
 }



//fonction injection des valeurs 
//  save map @param @map[longeur][largeur] @commande[index][key]
function injection($map,$command){
   
    //ajout des montagnes
    if($command[1][0]=='M'){
       $map[$command[1][2]][$command[1][4]]='M';
    }


     if($command[2][0]=='M'){
       $map[$command[2][2]][$command[2][4]]='M';
    }
    
    
   
    if($command[3][0]=='T'){

         $map[$command[3][4]][$command[3][2]]='T('.$command[3][6].')';
    }
    
     if($command[4][0]=='T'){

         $map[$command[4][4]][$command[4][2]]='T('.$command[4][6].')';
    }


    return $map;
}

?>