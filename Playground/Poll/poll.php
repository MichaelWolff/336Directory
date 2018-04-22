<?php
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
        
        
$vote = $_REQUEST['vote'];
//         $sql =  'SELECT * FROM Poll';
//         $stmt = $dbConn -> prepare ($sql);
        
//         $content = $stmt -> execute (  array ()  );
//         echo $content;
//         var_dump($content);
//         //put content in array
//         $array = explode("||", $content[0]);
//         $yes = $array[0];
//         $no = $array[1];

//         if ($vote == 0) {
//           $yes = $yes + 1;
//         }
//         if ($vote == 1) {
//           $no = $no + 1;
//         }

// //insert votes to txt file
//         $insertvote = $yes."||".$no;
//         $fp = fopen($filename,"w");
//         fputs($fp,$insertvote);
//         fclose($fp);
        
        
function get_all_answers($qid){
  global $dbConn;
  //Get answers
  $answer_count = 0;
  $count = array();
  $ans = answer_options($qid);
  $stmt = $dbConn->prepare("SELECT * FROM 'Poll'");
  $stmt->execute(array());
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  while($info = $stmt->fetch()){
    $answer_count++;
    $count[$info['answer_id']] +=1;
  }
  return json_encode(array("success" => "1","total"=>"$answer_count","$details" => $count,"opt"=>$ans));
}
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>