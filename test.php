<?php
$file = "src/test";
$lines = file($file,FILE_IGNORE_NEW_LINES);
//fonction compteur de lignes
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

$temp_lignes = compt_ligne($lines);
$run_command = cut($temp_lignes);
//printing value from 2d array returned from command injection
echo "<br> before my call <br>";
echo "<pre>";
print_r($run_command); 
  echo "</pre>";


  echo "<br> before call counts : ". count($run_command)."<br>";


//<-----------GAMMA PRE TESTING------------->
//still underconstruction
  function indexing($run_command)
{   
    //compteur commande total
    $compt_com=count($run_command);
    $i=1;
    while($i<=10)
    {
        //checking every aspect of Mountains pre existing in to commands
        /*if($run_command[$i][0]=="M")
        {   

        }
     */
        echo $i."<br>";
       // sleep(2);
        
        
        
        $i++;
    }

}
//executing the test 
indexing($run_command);