<?php

class fonction{
     private $file = "command.txt"; //file wheareas have the command to launch the map
     private $lines;
     private $nbr_tot_ligne;
     private $command; //every command exclude " - "
     private $map = array();
     private $long,$larg;   
     public function __construct()
     {
         echo "Init map & Start Map\n";
     }    
     public function __destruct()
     {
         echo " \nfinished map...\n";
     }
 
     public function init_map($longs,$largs)
     {
        //init tableau
        $maps = array();
            for($x = 0 ; $x < $longs ; $x++)
            {
             for($y = 0 ; $y < $largs ; $y++)
             {  
                $maps[$x][$y] =" . ";//ajout valeur par défaut & &nbsp; = espace vide
         }
        }
        $this->map=$maps;
        return $this->map; //important le return de la map
     }
     public function display($map,$longeur,$largeur)
     {
         for($x = 0 ; $x < $longeur ; $x++){
             for($y = 0 ; $y < $largeur ; $y++){
                 echo "  ".$map[$x][$y]."  ";//affichage de la valeur
             }
             echo "\n";
         }
     }
     public function nb_ligne_tot($nb_tot_ligne)
     {
         $c_lines=0;
         foreach ($nb_tot_ligne as $c)
         {
                 $c_lines++;
         }
         $this->nbr_tot_ligne = $c_lines;
     }
     public function clean_command($lines_com)
     {
         for($i=0;$i<$this->nbr_tot_ligne;$i++)
         {
             if($lines_com[$i][0]=="#" OR $lines_com[$i][0]==" ") continue;
                $cut_param_unique = explode(" - ", $lines_com[$i]);
                    for($y = 0; $y < count($cut_param_unique); $y++)
                    {
                        $this->command[$i][$y] = $cut_param_unique[$y]; 
                    }        
        }
        return $this->command;
     }
 
     public function adventure($command)
     {  
         $adv_name = substr($command[1], 0, 3); //return adventure name with 3 char
         $this->map[ (int)$command[3] ][ (int)$command[2] ]="A(".$adv_name.")";    
     }
     function find_exist($map)
     {
         if($map == $adv_name )
         {
            echo "there is aleardy an adventure there !";
         }
        return FALSE;
     }
     public function injection($run_command)
     {
         for($i = 1 ; $i < $this->nbr_tot_ligne; $i++)
         {   
             //attention le $run_command contient des values encodé en dehors de utf-8,
             //donc si votre logique est correcte c'est juste que ce n'est pas la bonne valeur a comparer.
             if($run_command[$i][0]=== "M")
             {
                $this->map[ (int)$run_command[$i][1]    ][  (int)$run_command[$i][2]    ] = " M ";
             }
             if($run_command[$i][0]=== "T")
             {
                $this->map[ (int)$run_command[$i][2]    ][  (int)$run_command[$i][1]    ]="T(".(int)$run_command[$i][3].")";
             }
             
             if($run_command[$i][0]=== "A​") 
             {  
                $this->adventure($run_command[$i]);
             }

        
         }
         $this->display($this->map,$this->long,$this->larg);
     }
 
     //this is the main function which run all commands
     public function start()
     {
         //[Attention]this return 2d array  
         $this->lines=file($this->file,FILE_IGNORE_NEW_LINES);
         $this->nb_ligne_tot($this->lines);
         $this->clean_command($this->lines);
         $this->larg=$this->command[0][1];//glob
         $this->long=$this->command[0][2];//glob
         $this->init_map($this->long,$this->larg);
       
         //param @command & tot of lines
         $this->injection($this->command);
         //print_r($this->nb_ligne_tot); //debug mode prints commands arrays
        
         echo "\n update \n";
        
         //$this->adventure($this->command[5]);
         //$this->adventure($this->command[6]);
         //$this->display($this->map,$this->long,$this->larg);

        
         
        
     }
}