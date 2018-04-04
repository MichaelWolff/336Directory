<?php
include 'inc/functions.php';
session_start();
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title> Aces vs. Kings </title>
        <style>
            @import url("css/styles.css");
        </style>
        <script>
function myFunction(info)
{
alert(info);
}
</script>
    </head>
    <body>
        <h2>Aces vs. Kings</h2>
        <form action="program1.php" method="post">
          Number of Rows:<br>
          <input type="text" name="rows"><br>
          Number of Columns:<br>
          <input type="text" name="columns"><br>
          Suit to omit:<br>
          <select name="omit">
              <option value="Hearts" selected="selected">Hearts</option>
              <option value="Clubs">Clubs</option>
              <option value="Diamonds">Diamonds</option>
              <option value="Spades">Spades</option>
            </select>
          <input type="submit" value="Submit">
        </form>
        <!--<img src="img/cherry.png" alt="cherry" title="Cherry" width="70" />-->
        <?php
        // echo "<a href=cart.php class='button'>Shopping Cart</a>";
        $num=0;
        $rows = $_POST["rows"];
        $columns = $_POST["columns"];
        $omit = $_POST["omit"];
        if($rows*$columns>39){
            echo "<h1>The product of Columns and Rows must not exceed 39</h1></br>";
        }
         echo "Number of Rows: ".$rows. "</br>";
         echo "Number of Columns: ".$columns. "</br>";
         echo "Cards to omit: ". $omit. "</br>";
         echo "Total cards:". $rows*$columns."</br>";
         echo "<img id='reel$y' src='img/clubs/$card.png' alt='$symbol' title='$symbol' width='70'/>";
         
         //
         $newDeck = range(1, 51);
        //Draws a hand for each of the players
        shuffle($newDeck);
        $temprow=0;
        $tempcol=0;
        $totalcards = $rows*$columns;
        $count =0;
        $aces=0;
        $kinds=0;
         //function printdeck($newDeck){
         $table_str.='<table>';
         $table_str.="<tr>";
            foreach ($newDeck as $card) {
                if($count == $totalcards||$totalcards>=39){
                    break;
                }
                $count=$count+1;
                if($tempcol < $columns){
                    $tempcol=$tempcol+1;
                switch(floor($card/13)){
                    case 0:
                        if($card == 1){
                            $aces=$aces+1;
                            $table_str.= "<td bgcolor='#fff600'><img id='reel$y' src='img/diamonds/$card.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            break;
                        }
                        if($card== 13){
                            $kings=$kings+1;
                            $table_str.= "<td bgcolor='#00f2ff'><img id='reel$y' src='img/diamonds/$card.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            break;
                            
                        }
                        $table_str.= "<td><img id='reel$y' src='img/clubs/$card.png' alt='$symbol' title='$symbol' width='70'/></td>";
                        break;
                    case 1:
                        $temp = $card-12;
                        if($temp == 1){
                            $aces=$aces+1;
                            $table_str.= "<td bgcolor='#fff600'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            break;
                        }
                        if($temp== 13){
                            $kings=$kings+1;
                            $table_str.= "<td bgcolor='#00f2ff'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            break;
                            
                        }
                        $table_str.= "<td><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                        break;    
                    case 2:
                        $temp = $card-25;
                        if($temp == 1){
                            $aces=$aces+1;
                            $table_str.= "<td bgcolor='#fff600'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            break;
                        }
                        if($temp== 13){
                            $kings=$kings+1;
                            $table_str.= "<td bgcolor='#00f2ff'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            break;
                            
                        }
                        $table_str.= "<td><img id='reel$y' src='img/hearts/$temp.png' alt='$symbol' title='$symbol' width='70'/></td>";
                        break;
                    case 3:
                        $temp = $card-38;
                        if($temp == 1){
                            $aces=$aces+1;
                            $table_str.= "<td bgcolor='#fff600'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            break;
                        }
                        if($temp== 13){
                            $kings=$kings+1;
                            $table_str.= "<td bgcolor='#00f2ff'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            break;
                            
                        }
                        $table_str.= "<td><img id='reel$y' src='img/spades/$temp.png' alt='$symbol' title='$symbol' width='70'/></td>";
                        break;
                    default:
                        echo 'default';
                        break;
                }
                }
                else{
                    $table_str.="</tr>";
                    $tempcol=0;
                    $table_str.="<tr>";
                    switch(floor($card/13)){
                    case 0:
                        if($temp == 1){
                            $aces=$aces+1;
                            $table_str.= "<td bgcolor='#fff600'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            $tempcol=$tempcol+1;
                            break;
                        }
                        if($temp== 13){
                            $kings=$kings+1;
                            $table_str.= "<td bgcolor='#00f2ff'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            $tempcol=$tempcol+1;
                            break;
                            
                        }
                        $table_str.= "<td><img id='reel$y' src='img/clubs/$card.png' alt='$symbol' title='$symbol' width='70'/></td>";
                        $tempcol=$tempcol+1;
                        break;
                    case 1:
                        $temp = $card-12;
                        if($temp == 1){
                            $aces=$aces+1;
                            $table_str.= "<td bgcolor='#fff600'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            $tempcol=$tempcol+1;
                            break;
                        }
                        if($temp== 13){
                            $kings=$kings+1;
                            $table_str.= "<td bgcolor='#00f2ff'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            $tempcol=$tempcol+1;
                            break;
                            
                        }
                        $table_str.= "<td><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70'/></td>";
                        $tempcol=$tempcol+1;
                        break;    
                    case 2:
                        $temp = $card-25;
                        if($temp == 1){
                            $aces=$aces+1;
                            $table_str.= "<td bgcolor='#fff600'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            $tempcol=$tempcol+1;
                            break;
                        }
                        if($temp== 13){
                            $kings=$kings+1;
                            $table_str.= "<td bgcolor='#00f2ff'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            $tempcol=$tempcol+1;
                            break;
                            
                        }
                        $table_str.= "<td><img id='reel$y' src='img/hearts/$temp.png' alt='$symbol' title='$symbol' width='70'/></td>";
                        $tempcol=$tempcol+1;
                        break;
                    case 3:
                        $temp = $card-38;
                        if($temp == 1){
                            $aces=$aces+1;
                            $table_str.= "<td bgcolor='#fff600'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            $tempcol=$tempcol+1;
                            break;
                        }
                        if($temp== 13){
                            $kings=$kings+1;
                            $table_str.= "<td bgcolor='#00f2ff'><img id='reel$y' src='img/diamonds/$temp.png' alt='$symbol' title='$symbol' width='70' /></td>";
                            $tempcol=$tempcol+1;
                            break;
                            
                        }
                        $table_str.= "<td><img id='reel$y' src='img/spades/$temp.png' alt='$symbol' title='$symbol' width='70'/></td>";
                        $tempcol=$tempcol+1;
                        break;
                    default:
                        echo 'default';
                        break;
                }
                }
            }
            $table_str.="</tr>";
            $table_str.="</table>";
            echo "Count:" . $count . "</br>";
            echo $table_str;
            echo "Number of Kings: ".$kings."</br>";
            echo "Number of Aces: ".$aces;
            if($kings>$aces){
                echo "<h1>Kings Win!!</h1>";
            }
            if($aces>$kings){
                echo "<h1>Aces Win!!!</h1>";
            }
            if($aces==$kings){
                echo "<h1>Tie Game!!!</h1>";
            }
        // }
        
        ?>
        
                                <table border="1" width="600">
                                    <tbody><tr>
                                        <th>#</th>
                                        <th>Task Description</th>
                                        <th>Points</th>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>1</td>
                                        <td>The page includes the basic form elements as in the Program Sample: Text boxes, Dropdown menu, submit button</td>
                                        <td width="20" align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>2</td>
                                        <td>When submitting the form, an error message is displayed if the product of columns and rows exceeds 39</td>
                                        <td width="20" align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>3</td>
                                        <td>When submitting the form, a table is created with random playing cards</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>4</td>
                                        <td>The size of the table corresponds to the one selected by the user </td>
                                        <td align="center">10</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>5</td>
                                        <td>The cards are NOT duplicated </td>
                                        <td align="center">10</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>6</td>
                                        <td>No cards of the suit selected by the user are displayed in the game </td>
                                        <td align="center">10</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>7</td>
                                        <td>The Aces have a yellow background</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>8</td>
                                        <td>The Kings have a cyan background</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>9</td>
                                        <td>The total number of Aces and Kings are displayed</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>10</td>
                                        <td>A message indicates who won, Aces or Kings, (or neither) </td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>11</td>
                                        <td>At least five CSS rules are included</td>
                                        <td align="center">5</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>12</td>
                                        <td>This rubric is properly included AND UPDATED (BONUS)</td>
                                        <td width="20" align="center">2</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>T O T A L </td>
                                        <td width="20" align="center"><b></b></td>
                                    </tr>
                                </tbody></table>
                            
        </div>
    </body>
</html>