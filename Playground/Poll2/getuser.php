<?php 
	include('functions.php');
// 	echo "On getuser.php";
	?>

<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
    <?php
    echo "This is a test";
    ?>

<?php
$q=4;
//$q = intval($_GET['q']);
        if($q == '1'){
            echo "q = 1";
            $sql =  'INSERT INTO Poll (Yes) VALUES ("1")';
        }
        if($q =='2'){
            $sql =  'INSERT INTO Poll (No) VALUES ("1")';
        }
        if($q == '3'){
             $sql =  'INSERT INTO Poll (Maybe) VALUES ("1")';
        }
        if($q == '4'){
            echo "q=4";
            $sql =  'SELECT * FROM Poll';
        }
        
        $stmt = $dbConn->prepare($sql);
        $stmt -> execute (  array ( ':id' => '1')  );//This is the problem line
        $tempYes =0;
        $tempNo = 0;
        $tempMaybe =0;
        if ($stmt->rowCount() > 0) {
        while ($row = $stmt -> fetch())  {
            $tempYes=$tempYes+$row['Yes'];
            $tempNo=$tempNo+$row['No'];
            $tempMaybe = $tempMaybe+$row['Maybe'];
        }
        //echo $table_str;//Prints the whole table
        echo "<img src = 'poll.jpg' width =".(100*round($tempYes/($tempNo+$tempYes+$tempMaybe),2))." height = '20'> ";
        echo (100*round($tempYes/($tempNo+$tempYes+$tempMaybe),2))."% Yes</br>";
        echo "<img src = 'poll.jpg' width =".(100*round($tempNo/($tempYes+$tempNo+$tempMaybe),2))." height = '20'> ";
        echo (100*round($tempNo/($tempYes+$tempNo+$tempMaybe),2)).'% No</br>';
        echo "<img src = 'poll.jpg' width =".(100*round($tempMaybe/($tempYes+$tempNo+$tempMaybe),2))." height = '20'> ";
        echo (100*round($tempMaybe/($tempYes+$tempNo+$tempMaybe),2)).'% Maybe</br>';
        }
        else {
        echo "No data found";
        }
        //return null;
        
?>
</body>
</html>