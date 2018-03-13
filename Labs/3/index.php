<?php
include 'inc/functions.php';
?>
<!DOCTYPE html>
<!--The function of this assignment will be to calculate numbers-->
<html>
    
    <head>
        <title> SILVERJACK </title>
        <style>
            @import url("css/styles.css");
        </style>
        
        SILVERJACK
    </head>
    <body>
        <div id="main">
        <!--<img src="img/cherry.png" alt="cherry" title="Cherry" width="70" />-->
        <?php
        //Creates the players
        $players = array("Michael" => $michael);
        $players = array("Jeremy" => $jeremy);
        $players = array("Kathryn" => $kathryn);
        $players = array("Nichole" => $nichole);
        
        $players["Michael"] = array('0');
        $players["Jeremy"] = array('0');
        $players["Kathryn"] = array('0');
        $players["Nichole"] = array('0');

        
        // //Creates the deck of cards
        // $deck = array("hearts" => $hearts);
        // $deck = array("diamonds" => $diamonds);
        // $deck = array("spades" => $spades);
        // $deck = array("clubs" => $clubs);
        // $deck["hearts"] = array('1','2','3','4','5','6','7','8','9','11','12','13');
        // $deck["diamonds"] = array('1','2','3','4','5','6','7','8','9','11','12','13');
        // $deck["spades"] = array('1','2','3','4','5','6','7','8','9','11','12','13');
        // $deck["clubs"] = array('1','2','3','4','5','6','7','8','9','11','12','13');
        
        $newDeck = range(0, 51);
        //Draws a hand for each of the players
<<<<<<< HEAD
                shuffle($newDeck);

        //Prints the players
        
=======
        
        //Prints the players
>>>>>>> 16375ca0fe9249df276297dfc413ed9f1e44609e
        foreach($players as $x){
            //Switch statement
             switch(floor($card/13)){
                    case 0:
                        $players["Michael"][] = array_pop($newDeck);
                        break;
                    case 1:
                        $players["Jeremy"][] = array_pop($newDeck);
                        break;    
                    case 2:
                        $players["Kathryn"][] = array_pop($newDeck);
                        break;
                    case 3:
                        $players["Nichole"][] = array_pop($newDeck);
                        break;
                    default:
                        echo 'default';
                        break;
             }
        }
<<<<<<< HEAD
        
        //Have a for loop that will create an array from the deck and then replace each players array with that array
        //Make sure that the new array doesn't add another card after the total value of the array is 42 or greater.
        //Creates hand for player
        //Create a function for this that iterates through the array or takes the player name as an input.
        //Nichole
        $temp = [];
        $hand = [];
        while(array_sum ($temp)<42){
            $tempnum = array_pop($newDeck);
            $hand[] = $tempnum;
            $temp[] = $tempnum%13;
        }
        $players["Nichole"] = $hand;
        //echo array_sum($temp);
        $temp = [];
        //Michael
        $temp = [];
        $hand = [];
        while(array_sum ($temp)<42){
            $tempnum = array_pop($newDeck);
            $hand[] = $tempnum;
            $temp[] = $tempnum%13;
        }
        $players["Michael"] = $hand;
        //echo array_sum($temp);
        $temp = [];
        //Kathryn
        $temp = [];
        $hand = [];
        while(array_sum ($temp)<42){
            $tempnum = array_pop($newDeck);
            $hand[] = $tempnum;
            $temp[] = $tempnum%13;
        }
        $players["Kathryn"] = $hand;
        //echo array_sum($temp);
        $temp = [];

        //Jeremy
        $temp = [];
        $hand = [];
        while(array_sum ($temp)<42){
            $tempnum = array_pop($newDeck);
            $hand[] = $tempnum;
            $temp[] = $tempnum%13;
        }
        $players["Jeremy"] = $hand;
        //echo array_sum($temp);
        $temp = [];

        foreach($players as $player=>$value){
            $value[]=array_pop($newDeck);
        }
        //$players["Nichole"][] = array_pop($newDeck);
        //$players["Nichole"][] = array_pop($newDeck);
        //$players["Nichole"][] = array_pop($newDeck);

        //array_push($players['Michael'],array_pop($newDeck));
        //$players["Michael"] = array_pop($newDeck);
        function shuffle_with_keys(&$array) { 
        	$aux = array(); 
        	$keys = array_keys($array); 
	        shuffle($keys); 
	        foreach($keys as $key) { 
		        $aux[$key] = $array[$key]; 
		        unset($array[$key]); 
	        } 
	        $array = $aux;
        }
        shuffle_with_keys($players);
        //shuffle($players);
        foreach($players as $x=>$x_value){
            //echo "Player= " . $x;
            //Create an array of size 4 with the player names in it then pop a random element of it to figure what player we are drawing
            $sum;
            echo "<img id='reel$y' src='img/players/smile$x.png' alt='$symbol' title='$symbol' width='70'/>";
=======
        shuffle($newDeck);
        $players["Michael"][] = array_pop($newDeck);
        //array_push($players['Michael'],array_pop($newDeck));
        //$players["Michael"] = array_pop($newDeck);
        
        foreach($players as $x=>$x_value){
            echo "Player= " . $x;
>>>>>>> 16375ca0fe9249df276297dfc413ed9f1e44609e
            foreach($x_value as $card){
                switch(floor($card/13)){
                    case 0:
                        //$temp = card;
                        //echo "$card ";
<<<<<<< HEAD
                        $sum+=$card;
=======
>>>>>>> 16375ca0fe9249df276297dfc413ed9f1e44609e
                        echo "<img id='reel$y' src='img/clubs/$card.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'clubs';
                        //echo '<br>';
                        break;
                    case 1:
                        //echo "$card ";
                        $temp = $card-13;
<<<<<<< HEAD
                        $sum+=$temp;
=======
>>>>>>> 16375ca0fe9249df276297dfc413ed9f1e44609e
                        echo "<img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'diamonds';
                        //echo '<br>';
                        break;    
                    case 2:
                        //echo "$card ";
                        $temp = $card-26;
<<<<<<< HEAD
                        $sum+=$temp;
=======
>>>>>>> 16375ca0fe9249df276297dfc413ed9f1e44609e
                        echo "<img id='reel$y' src='img/hearts/$temp.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'hearts';
                        //echo '<br>';
                        break;
                    case 3:
                        //echo "$card ";
                        $temp = $card-39;
<<<<<<< HEAD
                        $sum+=$temp;
                        echo "<img id='reel$y' src='img/spades/$temp.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'spades';
                        //echo '<br>';
=======
                        echo "<img id='reel$y' src='img/spades/$temp.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'spades';
                        echo '<br>';
>>>>>>> 16375ca0fe9249df276297dfc413ed9f1e44609e
                        break;
                    default:
                        echo 'default';
                        break;
                }
                //echo ' '. $y_value;
                //echo "<img id='reel$y' src='img/clubs/$y_value.png' alt='$symbol' title='$symbol' width='70'/>";
                // $y_value is the value contained within the associative array.
                
            }
<<<<<<< HEAD
            if($sum <= 42){
                echo $sum . " WINNER";
            }
            else{
                echo $sum . " LOSER";
            }
            //echo $sum;
            $sum = 0;
=======
>>>>>>> 16375ca0fe9249df276297dfc413ed9f1e44609e
            echo "<br>";
        }
        
        //printdeck($newDeck);
        //Prints the unshuffled deck of cards
        function printdeck($newDeck){
            foreach ($newDeck as $card) {
                switch(floor($card/13)){
                    case 0:
                        //$temp = card;
                        //echo "$card ";
                        echo "<img id='reel$y' src='img/clubs/$card.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'clubs';
                        //echo '<br>';
                        break;
                    case 1:
                        //echo "$card ";
                        $temp = $card-13;
                        echo "<img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'diamonds';
                        //echo '<br>';
                        break;    
                    case 2:
                        //echo "$card ";
                        $temp = $card-26;
                        echo "<img id='reel$y' src='img/hearts/$temp.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'hearts';
                        //echo '<br>';
                        break;
                    case 3:
                        //echo "$card ";
                        $temp = $card-39;
                        echo "<img id='reel$y' src='img/spades/$temp.png' alt='$symbol' title='$symbol' width='70'/>";
                        //echo 'spades';
                        echo '<br>';
                        break;
                    default:
                        echo 'default';
                        break;
                }
                
            }
        // foreach($deck as $x=>$x_value){
        //     echo "Card=" . $x . ", Value=" . $x_value;
        //     foreach($x_value as $y=>$y_value){
        //         //echo "<br>";
        //         //echo "       Card number: " . $y_value;
        //         switch($x){
        //             case 0:
        //                 $suit='clubs';
        //                 break;
        //             case 1:
        //                 $suit='diamonds';
        //                 break;
        //             case 2:
        //                 $suit='hearts';
        //                 break;
        //             case 3:
        //                 $suit='spades';
        //                 break;
        //             default:
        //                 break;
        //         }
        //          echo "<img id='reel$y' src='img/$x/$y_value.png' alt='$symbol' title='$symbol' width='70'/>";
        //     }
        //     echo "<br>";
        // }
        }
       for ($i = 0; $i < count($deck); $i++) {
                    //echo "<li>Card ($i): ".$deck["hearts"=>"1"]."</li>";
       }
        
        ?>
        <form>
            
<<<<<<< HEAD
            <!--<input type="checkbox" name="replay" value="Replay"> Replay -->
=======
            <input type="checkbox" name="replay" value="Replay"> Replay 
>>>>>>> 16375ca0fe9249df276297dfc413ed9f1e44609e


        </form>
        </div>
    </body>
</html>