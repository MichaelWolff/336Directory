
<?php 
	include('functions.php');
// 	echo "On getuser.php";
	?>
<!DOCTYPE html>

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
// //echo 'testing';
 
//  try{
// $connUrl = getenv('JAWSDB_MARIA_URL');
//         //$connUrl = "mysql://ikxzumlxt0a0uq9x:qendeuysn1eho7ym@thzz882efnak0xod.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/s1vxerk2jlp6h9j1";
//         $hasConnUrl = !empty($connUrl);

//         $connParts = null;
//         if ($hasConnUrl) {
//             $connParts = parse_url($connUrl);
//         }

//         //var_dump($hasConnUrl);
//         $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
//         $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'midterm';
//         $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
//         $password = $hasConnUrl ? $connParts['pass'] : '';

//         $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//         $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo "connected succesfully";
// }
// catch(PDOException $e){
//     echo "Connection failed: ". $e->getMessage();
// }
$q = intval($_GET['q']);
//
//  $connUrl = getenv('JAWSDB_MARIA_URL');
//         $hasConnUrl = !empty($connUrl);
//         $connParts = null;
//         if ($hasConnUrl) {
//             $connParts = parse_url($connUrl);
//         }
//         $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
//         $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'midterm';
//         $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
//         $password = $hasConnUrl ? $connParts['pass'] : '';
//         $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//         $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Z
        if($q == '1'){
            echo "q = 1";
            $sql =  'INSERT INTO Poll (YES) VALUES ("1")';
        }
        if($q =='2'){
            $sql =  'INSERT INTO Poll (No) VALUES ("1")';
        }
        if($q == '3'){
             $sql =  'INSERT INTO Poll (Maybe) VALUES ("1")';
        }
        if($q == '4'){
            $sql =  'SELECT * FROM Poll';
        }
        
        $stmt = $dbConn->prepare($sql);
        $stmt -> execute (  array ( ':id' => '1')  );//This is the problem line
        
        //The raplacement run
        $stmt -> execute();
        //$result = $stmt->fetchAll();
        
        
        $tempYes =0;
        $tempNo = 0;
        $tempMaybe =0;
        if ($stmt->rowCount() > 0) {
            //Creates a table
            $table_str.='<table>';
            $table_str.='<thead>';
            $table_str.='</thead>';
        while ($row = $stmt -> fetch())  {
            $tempYes=$tempYes+$row['Yes'];
            $tempNo=$tempNo+$row['No'];
            $tempMaybe = $tempMaybe+$row['Maybe'];
            $table_str.='<tr>';
            $table_str.='<td>'.$row['Yes'].'</td>'.'<td>'.$row['No'].'</td>'.'<td>'.$row['Maybe'].'</td>';
            $table_str.='</tr>';
        }
        $table_str.='</table>';
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
        // $numrows = $stmt->num_rows;
        // $stmt->bind_result($yes, $no, $maybe);
        // $JSONArray = [];
        // for($i=0; $i < $numrows; $i++){
        //     $row = $stmt->fetch();
        //     $yes = $row['Yes'];
        //     $no = $row['No'];
        //     $maybe = $row['Maybe'];
        //     $JSONArray[]=["Yes" => $yes,
        //                     "No" => $no,
        //                     "Maybe" => $maybe];
                            
        // }
        
        // foreach ($result as $key => $value) {
        //   // $tempYes = $tempYes + $value;
        //     echo "Key: $key; Yes: $value </br>";
        // }
      // array_column($result, 'Yes','myKey');
        //echo json_decode(print_r(array_column($result, 'Yes','myKey')));
        
?>
</body>
</html>