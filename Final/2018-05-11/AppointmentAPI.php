<?php

    $httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);

    switch($httpMethod) {
      case "OPTIONS":
        // Allows anyone to hit your API, not just this c9 domain
        header("Access-Control-Allow-Headers: X-ACCESS_TOKEN, Access-Control-Allow-Origin, Authorization, Origin, X-Requested-With, Content-Type, Content-Range, Content-Disposition, Content-Description");
        header("Access-Control-Allow-Methods: POST, GET");
        header("Access-Control-Max-Age: 3600");
        exit();
      case "DELETE":
        break;
      case "GET":
        //   $pin = $_GET['data'].pin;
          $pin=json_decode($_POST['data'], true).pin;
          $connUrl = getenv('JAWSDB_MARIA_URL');
            $hasConnUrl = !empty($connUrl);
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }
            $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
            $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Final';
            $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
            $password = $hasConnUrl ? $connParts['pass'] : '';
            $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected succesfully";

        // Compose the SQL statement
        $sql = "DELETE FROM Appointment WHERE Id=".$pin.'"';
        echo "test 1";
        $stmt = $db -> prepare ($sql);
// for($y=0; $y<5; $y++){
        $stmt -> execute (array());
        break;
      case 'POST':
        // Get the body json that was sent
//$rawJsonString = $_FILES['file']['tmp_name'];
        // echo $_POST['title'];
        
        $StartDate =$_POST['StartDate'];
        $StartTime=$_POST['StartTime'];
        $EndDate=$_POST['EndDate'];
        $Details=$_POST['Details'];
        $Appointments=$_POST['ApptNumber'];
        $ApptLength=$_POST['ApptLength'];
       echo $initialTime = $StartTime;
       echo $StartDate.'</br>';
       echo $StartTime.'</br>';
       echo $EndDate. '</br>';
       echo $Details .'</br>';
       echo $Appointments .'</br>';
       echo $ApptLength;
            $connUrl = getenv('JAWSDB_MARIA_URL');
            $hasConnUrl = !empty($connUrl);
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }
            $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
            $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Final';
            $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
            $password = $hasConnUrl ? $connParts['pass'] : '';
            $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected succesfully";

        // Compose the SQL statement
        $sql = "INSERT INTO Appointment(StartDate, StartTime, EndDate, Details, Duration) VALUES (:StartDate, :StartTime, :EndDate, :Details, :Duration)";
        echo "test 1";
        $stmt = $db -> prepare ($sql);
echo "test 2";
// for($y=0; $y<5; $y++){
while($StartDate<$EndDate){
    $StartTime=$initialTime;
    $StartDate=date('Y-m-d H:i:s', strtotime($StartDate . ' +1 day'));
for ($x=0; $x<$Appointments; $x++) {
        $stmt -> execute (  array ( ':StartDate' => $StartDate, ':StartTime' => $StartTime, ':EndDate' => $EndDate, 'Details' => $Details, ':Duration' => $ApptLength)  );
        // $StartTime = $StartTime+$ApptLength;
        $StartTime = date('Y-m-d H:i',strtotime('+'.$ApptLength.' minutes',strtotime($StartTime)));
}
}
echo "test 3";
        $results = array("status" => 0, "message" => "all good");
echo "test 4";
        header("Access-Control-Allow-Origin: *");
echo "test 5";       // Let the client know the format of the data being returned
        header("Content-Type: application/json");
echo "test 6";
        echo json_encode($results);
        header('Location: index.php'); 
        break;
    }
?>