
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
        $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Tester';
        $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
        $password = $hasConnUrl ? $connParts['pass'] : '';

        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        echo "This is a test";
        //$q=4;
        $q = intval($_GET['q']);
        if($q == '1'){
            echo "q = 1";
            $sql =  'INSERT INTO Poll (Yes) VALUES ("1")';
        }
        if($q =='2'){
            $sql =  'INSERT INTO Poll (No) VALUES ("1")';
        }
        if($q == '3'){
             $sql =  'INSERT INTO Poll (Maybe) VALUES ("1")';
        }
        if($q == '4'){
            echo "q=4";
            $sql =  'SELECT * FROM poll';
        }
        echo "38";
        $stmt = $dbConn->prepare($sql);
        echo "40";
        $stmt -> execute (  array ( ':id' => '1')  );//This is the problem line
        echo "48";
        //$user = $query->fetch(PDO::FETCH_ASSOC);
        $tempYes = 0;
        echo "50";
        $tempNo = 0;
        $tempMaybe =0;
        echo "53";
        if ($stmt->rowCount() > 0) {
        echo "55";
        while ($row = $stmt -> fetch())  {
            echo "57";
            $tempYes=$tempYes+$row['Yes'];
            $tempNo=$tempNo+$row['No'];
            $tempMaybe = $tempMaybe+$row['Maybe'];
        }
        echo "62";
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
        echo "this is the end of get user";
        //return null;
        
?>