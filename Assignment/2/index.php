<?php
include 'inc/functions.php';
?>
<!DOCTYPE html>
<!--The function of this assignment will be to calculate numbers-->
<html>
    
    <head>
        <title> Assignment 2 </title>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        
        <h1>CALCULATOR</h1>
    </head>
    <body>
        <div id="main">
        <form action="" method="post">
            Number 1: <input type="number" name="num1" value="<?php echo $num1;?>"><br>
            Number 2: <input type="number" name="num2" value="<?php echo $num2;?>"><br>
            <input type="radio" name="action" value="Add" checked id="operation"> Add<br>
            <input type="radio" name="action" value="Subtract"> Subtract<br>
            <input type="radio" name="action" value="Multiply"> Multiply<br>
            <input type="radio" name="action" value="Divide"> Divide<br>
            <input type="submit" value = "calculate"/>
        </form>
        <div id = answer>
        <?php
        
            if(!empty($_POST['num1']) && !empty($_POST['num2'])){
                $action = $_POST['action'];
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                switch($action){
                    case "Add":
                    echo "Answer: ".($num1+$num2);
                    break;
                
                    case "Subtract":
                    echo "Answer: ".($num1-$num2);
                    break;
                
                    case "Multiply":
                    echo "Answer: ".($num1*$num2);
                    break;
                
                    case "Divide":
                    echo "Answer: ".($num1/$num2);
                    break;
            }
            
        }
        else{
                echo "One of the numbers is not set, please set it and try again.";
            }
        
        ?>
        </div>
        </div>
    </body>
</html>