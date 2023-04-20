<?php

$noOfRolls = 0;
$diceType = "";

?>

<html>
    <head>  
    </head>
    <body>
        <div class="output">
            <h1> Dice Roller </h1>
         <hr>
         <form name ="form" action method="POST">
            Nunber of Dice Roles: 
            <input type = "number" name = "rolls" size = "2">
            <br><br>
            Number of Dice Faces:
            <input type="radio" name="type" value = "D4"> 4
            <input type="radio" name="type" value = "D6"> 6
            <input type="radio" name="type" value = "D8"> 8
            <input type="radio" name="type" value = "D10"> 10
            <input type="radio" name="type" value = "D20"> 20
            <br><br>
            <input type = "submit" name = "submit" value = "Roll">
         </form>    
         <?php
               if (isset($_POST["rolls"]) && isset($_POST["type"]))
               {
                $noOfRolls = (int) $_POST["rolls"];
                $diceType = (string)$_POST["type"];
               } 
               if(isset($_POST["submit"]))
               {
                if($noOfRolls != 0)
                {
                    $valueRolled = 0;
                    echo "<hr>Number of Rolls : $noOfRolls";
                    echo "<br>Dice Type : $diceType";
                    echo "<br> Rolls : ";
                for($i = 1; $i<= $noOfRolls; $i++)
                {
                    switch($diceType)
                    {
                        case "D4":
                            $valueRolled = rand(1,4);
                        break;
                        case "D6":
                            $valueRolled = rand(1,6);
                        break;
                        case "D8":
                            $valueRolled = rand(1,8);
                        break;
                        case "D10":
                            $valueRolled = rand(1,10);
                        break;
                        case "D20":
                            $valueRolled = rand(1,20);
                        break;
                        default:
                            $valueRolled = 0;
                    }
                    echo "<br> No. $i : $valueRolled";
                }
                }
                else
                {
                    echo "Number of rolls should be more than zero (0)";
                }
               }
            ?>
        </div>
</body>
</html>



