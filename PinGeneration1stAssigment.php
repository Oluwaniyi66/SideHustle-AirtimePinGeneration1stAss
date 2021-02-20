<?php
    
    /* A function to generate a 12-pin 200 airtime recharge card */
    function generatePin($max_val){

        echo "Generating ".$max_val." (12-pin) airtime numbers<br><br>";

        for($i = 1; 
        $i <= $max_val; 
        $i++)
        {
            $pin = "";
            for ($count = 1; $count <= 12; $count++)
            {
                $num= rand(0,9);
                $pin = $pin.$num;
            }
            echo $pin;

            echo "<br>";
        }
        
    }
    //calling the generate pin function with specific number of recharge card needed
    generatePin(200);

?>