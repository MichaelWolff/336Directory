<?php

    $httpMethod = strtoupper($_SERVER['REQUEST_METHOD']);

    switch($httpMethod) {
      case "OPTIONS":
        // Allows anyone to hit your API, not just this c9 domain
        header("Access-Control-Allow-Headers: X-ACCESS_TOKEN, Access-Control-Allow-Origin, Authorization, Origin, X-Requested-With, Content-Type, Content-Range, Content-Disposition, Content-Description");
        header("Access-Control-Allow-Methods: POST, GET");
        header("Access-Control-Max-Age: 3600");
        exit();
      case "GET":
        break;
      case 'POST':
        // Get the body json that was sent
        $rawJsonString = $_FILES['file']['tmp_name'];
        // echo $_POST['title'];
        $title = $_POST['title'];
        $Creator= $_POST['Creator'];
        $Description=$_POST['Description'];
        echo $title.$Creator.$Description;
            $connUrl = getenv('JAWSDB_MARIA_URL');
            $hasConnUrl = !empty($connUrl);
            $connParts = null;
            if ($hasConnUrl) {
                $connParts = parse_url($connUrl);
            }
            $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
            $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Kahoot';
            $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
            $password = $hasConnUrl ? $connParts['pass'] : '';
            $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected succesfully";

        // Compose the SQL statement
        $sql = "INSERT INTO Quiz(Creator, Description, Image, PIN, Title) VALUES (:Creator, :Description, :Image, :PIN, :Title)";
        echo "test 1";
        // Prepare the statement
        $stmt = $db -> prepare ($sql);
echo "test 2";
        // Execute the statement, passing in array of parameters
        // $stmt -> execute (  array ( ':Creator' => "Wolff", ':Description' => "Wolff2", ':Image' => "Wolff3", ':PIN' => 1, ':Title' => "Wolff4")  );
        echo $jsonData;
        $stmt -> execute (  array ( ':Creator' => $Creator, ':Description' => $Description, ':Image' => "tester", ':PIN' => 1, ':Title' => $title)  );
echo "test 3";
        // Return status in JSON
        $results = array("status" => 0, "message" => "all good");
echo "test 4";
        // Allow any client to access
        header("Access-Control-Allow-Origin: *");
echo "test 5";       // Let the client know the format of the data being returned
        header("Content-Type: application/json");
echo "test 6";
        // Sending back down as JSON
        echo json_encode($results);

        break;
    }
?>