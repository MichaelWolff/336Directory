<?php
echo 'Loaded Quiz.php ';
include('../connection.php');




class Quiz{
 
    //Database connection and table name
    private $dbconn;
    private $table_name = "Quiz";
 
    //Quiz properties
    public $Quiz_Key;
    public $PIN;
    public $Title;
    public $Image;
    public $Description;
    public $Creator;
    public $Questions;
    public $Player_IDs;
 
    // constructor with $db as database connection
    // public function __construct($db){
    //     $this->conn = $db;
    // }
}

// read products
function read(){
    $dbconn = $db;
    echo "Started Read ";
    echo $tempTester;
    // select all query
    $query = "SELECT * FROM Quiz";
                
    echo "Defined the query ";
    // prepare query statement
    $stmt = $this->dbconn->prepare($query);
    echo "Prepared statment on line 38";
    // execute query
    $stmt->execute();
    echo "Finished Read";
    return $stmt;
}
    $sql = 'SELECT * FROM Quiz';
        $connUrl = getenv('JAWSDB_MARIA_URL');
        //$connUrl = "mysql://ikxzumlxt0a0uq9x:qendeuysn1eho7ym@thzz882efnak0xod.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/s1vxerk2jlp6h9j1";
        $hasConnUrl = !empty($connUrl);

        $connParts = null;
        if ($hasConnUrl) {
            $connParts = parse_url($connUrl);
        }

        //var_dump($hasConnUrl);
        $host = $hasConnUrl ? $connParts['host'] : getenv('IP');
        $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Kahoot';
        $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
        $password = $hasConnUrl ? $connParts['pass'] : '';

        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //$q=4;
        //Working from example on showdeo
        $method = strtoupper($_SERVER['REQUEST_METHOD']);
        
        switch($method){
            case "OPTIONS":
                header("Access-Control-Allow-Headers: X-ACCESS_TOKEN, Access-Control-Allow-Origin, Authorization, Origin, X-Requested-With, Content-Type, Content-Range, Content-Disposition, Content-Description");
                header("Access-Control-Allow-Methods: POST, GET");
                header("Access-Control-Max-Age: 3600");
                exit();
            case "GET";
                header("Access-Control-Allow-Origin: *");
                header("Content-Type: application/json");
                // TODO: do stuff to get the $results which is an associative array
                $results = array();
                // Sending back down as JSON
                echo json_encode($results);
                break;
            case "POST":
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
                // Sending back down as JSON
                echo json_encode($results);
                break;
            case "PUT":
                // TODO: Access-Control-Allow-Origin
                http_response_code(401);
                echo "Not Supported";
                break;
            case "DELETE":
                // TODO: Access-Control-Allow-Origin
                http_response_code(401);
                break;
        }
        
        
        $q = intval($_GET['q']);
        if($q == '1'){
            $sql =  'SELECT * FROM Quiz';
        }
        if($q =='2'){
            $sql =  'SELECT * FROM Quiz';
        }
        if($q == '3'){
             $sql =  'SELECT * FROM Quiz';
        }
        if($q == '4'){
            $sql =  'SELECT * FROM Quiz';
        }
        if($q=='5'){
            $sql = 'SELECT * FROM Quiz';
        }
        $stmt = $dbConn->prepare($sql);
        $stmt -> execute (  array ( ':id' => '1')  );//This is the problem line
        //$user = $query->fetch(PDO::FETCH_ASSOC);
        $tempYes = 0;
        $tempNo = 0;
        $tempMaybe =0;
        if ($stmt->rowCount() > 0) {
        while ($row = $stmt -> fetch())  {
            $tempYes=$tempYes+$row['Yes'];
            $tempNo=$tempNo+$row['No'];
            $tempMaybe = $tempMaybe+$row['Maybe'];
        }
        }
        else {
        echo "No data found";
        }
        //return null;
?>
