<?php
  session_start();

    $httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);

    switch($httpMethod) {
      case "OPTIONS":
        // Allows anyone to hit your API, not just this c9 domain
        header("Access-Control-Allow-Headers: X-ACCESS_TOKEN, Access-Control-Allow-Origin, Authorization, Origin, X-Requested-With, Content-Type, Content-Range, Content-Disposition, Content-Description");
        header("Access-Control-Allow-Methods: POST, GET");
        header("Access-Control-Max-Age: 3600");
        exit();
      case "GET":
        // Allow any client to access
        header("Access-Control-Allow-Origin: *");
        // Let the client know the format of the data being returned
        header("Content-Type: application/json");

        // TODO: do stuff to get the $results which is an associative array
        $results = array();
        //My Methods
        
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
        
        
        ///
        // Sending back down as JSON
        echo json_encode($stmt);

        break;
      case 'POST':
        // Get the body json that was sent
        $rawJsonString = file_get_contents("php://input");

        //var_dump($rawJsonString);

        // Make it a associative array (true, second param)
        $jsonData = json_decode($rawJsonString, true);

        // TODO: do stuff to get the $results which is an associative array
        $results = array();

        // Allow any client to access
        header("Access-Control-Allow-Origin: *");
        // Let the client know the format of the data being returned
        header("Content-Type: application/json");
        break;
      case 'PUT':
        // TODO: Access-Control-Allow-Origin
        http_response_code(401);
        echo "Not Supported";
        break;
      case 'DELETE':
        // TODO: Access-Control-Allow-Origin
        http_response_code(401);
        break;
    }
?>