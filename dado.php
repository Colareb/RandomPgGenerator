<?php 

    function dado($min, $max){
        
        //global $dado; 
        
        $dado = mt_rand($min, $max);
        
       return $dado;
    }

    /*dado(1,6);
    echo $dado;*/

?>