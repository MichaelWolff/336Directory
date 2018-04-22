<!--<?php-->
<!--    header("Access-Control-Allow-Origin: *");-->

<!--    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'OPTIONS') {-->
        // Allows anyone to hit your API, not just this c9 domain
<!--        header("Access-Control-Allow-Headers: X-ACCESS_TOKEN, Access-Control-Allow-Origin, Authorization, Origin, X-Requested-With, Content-Type, Content-Range, Content-Disposition, Content-Description");-->
<!--        header("Access-Control-Allow-Methods: POST, GET");-->
<!--        header("Access-Control-Max-Age: 3600");-->
<!--        exit();-->
<!--    }-->

    // Set the content type so it is not text/html
<!--    header("Content-Type: application/json");-->

<!--    session_start();-->

    // POST is empty
    //var_dump($_POST);

    // Get the body json that was sent
<!--    $rawJsonString = file_get_contents("php://input");-->

    //var_dump($rawJsonString);

    // Make it a associative array (true, second param)
<!--    $jsonData = json_decode($rawJsonString, true);-->

    //var_dump($jsonData);

    //$otherData = getDataFromOtherSite();
<!--    $otherData = getDataFromMySQL();-->

<!--    $results = ["status_code" => "0",-->
<!--                "message" => "Login successful!"];-->

    $_SESSION["token"] = "lkjkowiujhskhkyyt"; //com_create_guid();

<!--    if (!empty($otherData)) {-->
<!--        $results["data"] = $otherData;-->
<!--    }-->

    // Sending back down
<!--    echo json_encode($results);-->

<!--    function getDataFromOtherSite() {-->
<!--        $curl = curl_init();-->
<!--        curl_setopt($curl, CURLOPT_URL, "http://hosting.otterlabs.org/laramiguel/ajax/countyList.php?state=CA");-->
<!--        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);-->
<!--        $curlResult = curl_exec($curl);-->
<!--        curl_close($curl);-->
<!--        return json_decode($curlResult);-->
<!--    }-->

<!--    function getDataFromMySQL() {-->
<!--        $connUrl = getenv('JAWSDB_MARIA_URL');-->
<!--        $hasConnUrl = !empty($connUrl);-->

<!--        $connParts = null;-->
<!--        if ($hasConnUrl) {-->
<!--            $connParts = parse_url($connUrl);-->
<!--        }-->

<!--        $host = $hasConnUrl ? $connParts['host'] : getenv('IP');-->
<!--        $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'midterm';-->
<!--        $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');-->
<!--        $password = $hasConnUrl ? $connParts['pass'] : '';-->

<!--        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);-->
<!--        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);-->
<!--        $sql =  'SELECT * FROM RestQuestion';-->
<!--        $stmt = $dbConn -> prepare ($sql);-->
<!--        $stmt -> execute (  array ( ':id' => '1')  );-->
<!--        $temp = $stmt ->fetchALL(PDO::FETCH_ASSOC);-->
        // if ($stmt->rowCount() > 0) {
        //     //Creates a table
        //     $table_str.='<table>';
        //     $table_str.='<thead>';
        //     $table_str.='</thead>';
        // while ($row = $stmt -> fetch())  {
        //     $table_str.='<tr>';
        //     $table_str.='<td>'.'   Yes: '.$row['Yes'].'</td>'.'<td>'.'   No: '.$row['No'].'</td>'.'<td>'.'   Maybe: '.$row['Maybe'].'</td>';
        //     $table_str.='</tr>';
        // }
        // $table_str.='</table>';

<!--        return $temp;-->
        //}
<!--    }-->
<!--?>-->