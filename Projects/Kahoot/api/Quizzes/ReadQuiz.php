<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and quiz files
include_once ('Quiz.php');
include_once('../connection.php');
// instantiate database and quiz object
 echo "This is temp Tester.......".$tempTester;
// initialize object
$Quiz = new Quiz($db);
 echo "Line 13";
// query quizzes
$stmt = $Quiz.read();
 echo "Line 16";
$num = $stmt->rowCount();
 
// check if more than 0 record found
if($num>0){
 
    // products array
    $Quiz_arr=array();
    $Quiz_arr["records"]=array();
 
    // retrieve our table contents
    // fetch() is faster than fetchAll()
    // http://stackoverflow.com/questions/2770630/pdofetchall-vs-pdofetch-in-a-loop
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // extract row
        // this will make $row['name'] to
        // just $name only
        extract($row);
 
        $Quiz_item=array(
            "Quiz_Key" => $Quiz_Key,
            "PIN" => $PIN,
            "Description" => html_entity_decode($Description),
            "Title" => $Title,
            "Image" => $Image,
            "Creator" => $Creator,
            "Questions" => $Questions,
            "Player_IDs" => $Player_IDs
        );
 
        array_push($Quiz_arr["records"], $Quiz_item);
    }
 
    echo json_encode($Quiz_arr);
}
 
else{
    echo json_encode(
        array("message" => "No products found.")
    );
}
?>