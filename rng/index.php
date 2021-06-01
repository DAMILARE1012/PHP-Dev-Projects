<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <div class="heading">
        <h2 class="title">Random Number Generator Web App</h2>
    </div>

    <form action="#" method="post">

        <!-- An input box to assign how many dices to roll -->
        <input type="number" name="diceNum" id="diceNum" min="0" class="diceNum">
        <br>
        <!-- A drop down box to select the sides of the dice (e.g. d4,d6,d8,d10,d12,d20) -->
        <select name="diceSide" id="diceSide" class="diceSide">
            <option value="4">d4</option>
            <option value="6">d6</option>
            <option value="8">d8</option>
            <option value="10">d10</option>
            <option value="12">d12</option>
            <option value="20">d20</option>
        </select>

        <div>
            <input type="submit" value="Submit">
        </div>
    </form>

    

    <?php 
        if($_SERVER["REQUEST_METHOD"] = "POST"){

            $numDice = $_POST["diceNum"];
            $sideDice = $_POST["diceSide"];

            // Amount of dice to be rolled

            echo "<p>There are $numDice dice(s) to be rolled.</p>";
            $totalDiceRoll = 0;
            $arrayNum = [];
            for($i=1; $i<=$numDice; $i++){
                
                $randomNum = rand(1, $sideDice);
                echo "$randomNum ";
                $totalDiceRoll += $randomNum;
                $arrayNum[] = $randomNum;
            }
            
            // Output to show the number of dice rolled, type of dice
            echo "<p>Output of the number of dice rolled - $numDice </p>";

            // Output the type of dice
            echo "<p> The output type of the rolled dice - $sideDice </p>";

            // Total count of the dices rolled
            echo "<p>The total count of the dices rolled is - $totalDiceRoll</p>";

            // Output the details(number) of the individual dice rolls

            print_r($arrayNum);

            foreach($arrayNum as $num){
                if($num == 1){
                    echo "";
                }
            }

        }
    ?>
    
</body>
</html>

<!-- Requirement -->

<!-- The RNG should consist of:

An input box to assign how many dice to roll
A drop down box to select the sides of the dice (for example d4, d6, d8, d10, d12, d20)
A PHP rand(); function taking the inputs from the form
An output to show # of dice rolled, the type of dice (d4, d6 ..), the total count of the dices rolled
Output the details (number) of the individual dice rolls (Possibly using a foreach loop) -->