
<!DOCTYPE html>
<html>
    
    <head>
        <title> Lab 4 </title>
    </head>
    <body>
        <?php
            ///////////////////////////////////////////////////////////////////////
            //This is the example provided on ilearn modified to fit this project
        $type = $_POST["type"];
        $name = $_POST["name"];
        $availability = $_POST["status"];
        
        //The connection originally used in cloud9
        /////////////////////////////////////////
        // $host = "localhost";
        // $dbname = "Tester";
        // $username ="mwolff10";
        // $password = "";
        // $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        // $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////
        
        //The new connection setup for Heroku
        ////////////////////////////////////////////////////////////
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
        //return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);//For some reason this line from Jasons exampled isnt working for me
        //////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////
        //$sql = " SELECT * FROM device ORDER BY deviceName";//This will sort them alphabetically by the device name add DESC to reverse the order
        //$order = 'deviceName';
        $sql =  'SELECT * FROM device';
        ////$sql = 'SELECT * FROM device WHERE deviceName = "HTC Vive" ORDER BY ' .$order;
        //$sql = 'SELECT * FROM device WHERE deviceName = '.$name.' ORDER BY ' .$order;

        $stmt = $dbConn -> prepare ($sql);
        $stmt -> execute (  array ( ':id' => '1')  );
        if ($stmt->rowCount() > 0) {
            //Creates a table
            $table_str.='<table>';
            $table_str.='<thead>';
            $table_str.='</thead>';
        while ($row = $stmt -> fetch())  {
            //echo  $row['deviceName'] . ", " . $row['deviceType'] . ', ' . $row['price'] . ", " . $row['status']. "</br>";
            $table_str.='<tr>';
            $table_str.='<td>'.$row['deviceName'].'</td>'.'<td>'.$row['deviceType'].'</td>'.'<td>'.$row['price'].'</td>'.'<td>'.$row['status'].'</td>';
            $table_str.='</tr>';
        }
        $table_str.='</table>';
        echo $table_str;
        }
        else {
        echo "No data found";
        }
        ?>
        <form>
            <!--<input type="submit" value="Spin!"/>-->
        </form>
        </div>
    </body>
</html>