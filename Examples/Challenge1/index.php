<!DOCTYPE html>
<html>
    <head>
        <title>Number Guesser </title>
    </head>
    
    <body>
        
        <?php
        $MyStr1 = "Test";
        $MyStr2 = "er";
        
        $MyNum1 = rand(1,10);
        $MyNum2 = rand(1,10);
        
        $NewVar = $MyStr1 . $MyStr2;
                echo "<h2>Guess the Numbers</h2>";
                echo "<h3>Guess the two numbers between 1 and 10!<h3>" . "\n";
                // echo 'This is my first random number '.rand(1,10) . "\n";
                // echo 'Number 1: '
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Number1: <input type="text" name="number1"><br>
        Number2: <input tupe="text" name="number2"><br>
        <input type="submit" value="Guess Numbers" name="guessForm">
        <br>
        <input type="submit" value="Give Up" name="giveUp">
        <input type="submit" value="Reset" name="reset">
        </form>
        <?php
            //Assign our variables here, mynum1 and mynum2 should be set here
            //echo $_POST['number1'];
            // if(!isset($_POST['number1']) || !isset($_POST['number2']))
            // {
            //     echo 'You have not guessed any numbers yet';
            // }
            if($_POST['number1'] == "" || $_POST['number2']=="")
            {
                echo 'You have not input both numbers';
            }
            else{
                // Indicate whether you need to guess lower or higher for the first number
                if($_POST["number1"] == $MyNum1){
                    echo 'you have sucessfully guessed the first number'."<br>";
                }
                
                if($_POST["number1"] < $MyNum1){
                    echo 'the first number is higher'."<br>";
                }
                
                if($_POST["number1"] > $MyNum1){
                    echo 'the first number is lower'."<br>";
                }
                
                // Indicate whether you need to guess lower or higher for the second number
                
                if($_POST["number2"] == $MyNum2){
                    echo 'you have sucessfully guessed the second number'."<br>";
                }
                
                if($_POST["number2"] < $MyNum2){
                    echo 'the second number is higher'."<br>";
                }
                
                if($_POST["number2"] > $MyNum2){
                    echo 'the second number is lower'."<br>";
                }
                
                //echo 'This is your first number guess: ' . $_POST["number1"]."<br>";
                //echo 'This is your second number guess: ' . $_POST["number2"];
            }

        ?>
    </body>
</html>