<?php
function operation($operation, $a,$b){
    switch($operation){
        case "+":
        return $a+$b;
        echo "tester";
        break;
        case "-":
        return $a-$b;
        break;
        case "*":
        return $a*$b;
        break;
        case "/":
        return $a/$b;
        break;
    }
}
// if(isset($_POST['calculate']))
// {
//     echo 'tester';
//   operation('+','5','5');
// } 
?>