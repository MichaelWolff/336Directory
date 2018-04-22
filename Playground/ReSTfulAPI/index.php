<!--<?php-->
<!--include 'inc/functions.php';-->
<!--?>-->
<!--<!DOCTYPE html>-->
<!--<html>-->
    
<!--    <head>-->
<!--        <title> RESTful API</title>-->
<!--        <style>-->
<!--            @import url("css/styles.css");-->
<!--        </style>-->
<!--    </head>-->
<!--    <body>-->
        
<!--        <?php-->

<!--        ?>-->

<!--    </body>-->
<!--</html>-->

<!DOCTYPE html>
<?php
include 'inc/GetPoll.php';
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
$q = intval($_GET['q']);

 $connUrl = getenv('JAWSDB_MARIA_URL');
        //$connUrl = "mysql://ikxzumlxt0a0uq9x:qendeuysn1eho7ym@thzz882efnak0xod.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/s1vxerk2jlp6h9j1";
        $hasConnUrl = !empty($connUrl);

        $connParts = null;
        if ($hasConnUrl) {
            $connParts = parse_url($connUrl);
        }

        //var_dump($hasConnUrl);
        $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
        $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'midterm';
        $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
        $password = $hasConnUrl ? $connParts['pass'] : '';

        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$sql="SELECT * FROM Poll";
$stmt = $dbConn -> prepare ($sql);
$stmt -> execute (  array ( ':id' => '1')  );
// $result = mysqli_query($con,$sql);

// echo "<table>
// <tr>
// <th>Yes</th>
// <th>No</th>
// <th>Maybe</th>
// </tr>";
// while($row = mysqli_fetch_array($result)) {
//     echo "<tr>";
//     echo "<td>" . $row['Yes'] . "</td>";
//     echo "<td>" . $row['No'] . "</td>";
//     echo "<td>" . $row['Maybe'] . "</td>";
//     echo "</tr>";
// }

// echo "</table>";
if ($stmt->rowCount() > 0) {
            //Creates a table
            $table_str.='<table>';
            $table_str.='<thead>';
            $table_str.='</thead>';
            while ($row = $stmt -> fetch())  {
                //echo  $row['deviceName'] . ", " . $row['deviceType'] . ', ' . $row['price'] . ", " . $row['status']. "</br>";
                $table_str.='<tr>';
                $table_str.='<td>'.'Yes: '.$row['Yes'].'</td>'.'<td>'.'No:'.$row['No'].'</td>'.'<td>'.'Maybe: '.$row['Maybe'];
                $table_str.='</tr>';
            }
            $table_str.='</table>';
            echo $table_str;
        }
        else {
            echo "No data found";
        }
        xhttp.open("GET", "getPoll.php=", true);
        xhttp.send();
        echo strtoupper("GET");
// mysqli_close($con);
?>
</body>
</html>