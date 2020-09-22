<?php
    
    include "../";

    function delta(){
        $a = $_POST ['va'];
        $b = $_POST ['vb'];
        $c = $_POST ['vc'];
        $x = $_POST ['result'];

        $x = ($b*$b)-4*$a*$c;
        
        
        if($x > 0)
        {
            $rq = sqrt($x);
            echo "A raíz de $x é igual a $rq";

        }
        
        return $x;

        
    }
    echo delta();

    
    
    // echo delta();
   
    // }
    
    

?>


<?php

    // function Calculadora()
    // {
     
    // function delta(){
    //     $a = $_POST ['va'];
    //     $b = $_POST ['vb'];
    //     $c = $_POST ['vc'];
    //     $x = $_POST ['result'];

    //     $x = ($b*$b)-4*$a*$c;
        
        
    //     if($x > 0)
    //     {
    //         echo sqrt($x);
    //         echo "ta dando pau";
            
    //     }
        
    //     return $x;

        
    // }
    // echo delta();
    

    
    
    // echo delta();
   
    // }
    
    ?>

