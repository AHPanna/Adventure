<?php

$file = "src/test";
$lines = file($file,FILE_IGNORE_NEW_LINES);


//                  <---------------BETA TESTING---------------->
function compt_ligne($lines)
{
    $c_lines=0;
    foreach ($lines as $c)
    {
        $c_lines++;
    }
return $c_lines;
}

//fonction cut permet de recuperer les données et de speare en plusieurs morceaux 
function cut($temp_lignes)
{
    $file = "src/test";
    $lines = file($file,FILE_IGNORE_NEW_LINES);
  
    //decoupages de mes lignes 

    for($i=0;$i<$temp_lignes;$i++)
    {
        //ignore les # et les espace vide du debut
    if($lines[$i][0]==="#" OR $lines[$i][0]===" ") continue;
       //remove the '-'
        $cut_param_unique = explode("-", $lines[$i]);
        
        //print_r($cut_param_unique);
        //echo $cut_param_unique[0]."<br>";
        
        for($y = 0; $y < count($cut_param_unique); $y++ )
        {
            $command[$i][$y] = $cut_param_unique[$y]; 
        }        
    }
   // echo "<br> my call request for each col X # row Y (input them manually) of array: ".$command[X][Y]."<br>";
    return $command;
}



//fonction injection des valeurs 
//  save map @param @map[longeur][largeur] @run_commande[index][key]
function injection($map,$run_command){
   
    //ajout des montagnes
     if($run_command[1][0]!="M")
     {
       $map[
           (int)$run_command[1][1]
           ][
               (int)$run_command[1][2]
               ]='M';
     }
     if($run_command[4][0]!='M')
     {
        $map[
            (int)$run_command[4][1]
            ][
                (int)$run_command[4][2]
                ]='M';
     }
     if($run_command[5][0]!='T')
     {
        $map[
            (int)$run_command[5][2]
            ][
                (int)$run_command[5][1]
                ]='T('.$run_command[5][2].')';
     }
     if($run_command[7][0]!='T')
     {
        $map[
            (int)$run_command[7][2]
            ][
                (int)$run_command[7][1]
                ]='T('.$run_command[7][3].')';
    }
    return $map;
}

//<-----------------------ALPHA TESTING--------------------->
//fonction retourne les valeur 
//en construction ici le bouton update sera implementé pour les maj de chaque action 
//elle est configurer sur le fichier js utilisation de module ajax.
function indexing($map,$run_command)
{   
    $i=1;
    while($i<10){
    
        //if(run())
    
        $i++;
    }

   


}













/*
echo "<br> <-------DEBUG MODE--------> <br>";
echo $run_command[1][1]."<br>";
echo $run_command[1][2]."<br>";
*/




