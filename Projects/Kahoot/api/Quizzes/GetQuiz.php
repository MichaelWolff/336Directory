<?php

///Connection
// include '../connection.php';
// require("../connection.php");
//End Connection

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

    header("Content-Type:application/json");
    if(!empty($_GET['pin'])){
        $pin=$_GET['pin'];
        $quiz = create_quiz($pin); //-- This will need to be function from another script that will read the php database and return the relevant quiz information
        //$quiz = getSingleValue("Quiz", "");
        if(empty($quiz)){
            deliver_response(200, "Quiz not found", NULL);
        }
        else{
           // deliver_response(200, "Quiz found", $quiz);
        }
    }
    else{
        deliver_response(400, "Invalid Request", NULL);
    }
    
    function deliver_response($status, $status_message, $data){
        header("HTTP/1.1 $status $status_message");
        
        $response['status']=$status;
        $response['status_message']=$status_message;
        $response['data']=$data;
        
        $json_response=json_encode($response);
        echo $json_response;
    }
    
function get_quiz($pin){
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
    $sql = 'SELECT * FROM Quiz WHERE PIN = "'. $pin. '"';
    $stmt = $db->prepare($sql);
    $stmt -> execute();
    $result = $stmt->fetch();
    return $result;//This will return the quiz data from the database that has the PIN equal to the given pin
    }
    
function create_quiz(){
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
    $sql = 'INSERT INTO Quiz(Creator, Description, Image, PIN, Title) VALUES ("Michael Wolff", "This is just a test of the create quiz funciton", "https://images-na.ssl-images-amazon.com/images/I/51zLZbEVSTL._SY355_.jpg", "12366", "TestQuiz")';
    $stmt = $db->prepare($sql);
    $stmt -> execute();
    //$result = $stmt->fetch();
    //return $result;
    return "tester";
}

?>