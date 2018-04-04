<?php
include 'inc/functions.php';
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title> Lab 4 </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <h2>Student Report</h2>
        </form>

        <!--<img src="img/cherry.png" alt="cherry" title="Cherry" width="70" />-->
        <?php
            ///////////////////////////////////////////////////////////////////////
            //This is the example provided on ilearn modified to fit this project
        $orderBy = array('deviceName', 'deviceType', 'price', 'status');

        $order = "deviceName";
        if (isset($_GET['orderBy']) && in_array($_GET['orderBy'], $orderBy)) {
            $order = $_GET['orderBy'];
        }

        //$query = 'SELECT * FROM aTable ORDER BY '.$order;
        //Variables used to filter the results
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
        $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'midterm';
        $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
        $password = $hasConnUrl ? $connParts['pass'] : '';

        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);//For some reason this line from Jasons exampled isnt working for me
        //////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////
        //$sql = " SELECT * FROM device ORDER BY deviceName";//This will sort them alphabetically by the device name add DESC to reverse the order
        //$order = 'deviceName';
        //This retrieves and prints the female students
        $sql =  'SELECT * FROM m_students WHERE gender LIKE "F" ';
        $stmt = $dbConn -> prepare ($sql);
        $stmt -> execute (  array ( ':id' => '1')  );
        if ($stmt->rowCount() > 0) {
            //Creates a table
            $table_str.='<table>';
            $table_str.='<thead><h2>Female Students</h2>';
            $table_str.='</thead>';
        while ($row = $stmt -> fetch())  {
            //echo  $row['deviceName'] . ", " . $row['deviceType'] . ', ' . $row['price'] . ", " . $row['status']. "</br>";
            $table_str.='<tr>';
            $table_str.='<td>'.$row['firstName'].'</td>'.'<td>'.$row['lastName'].'</td>'.'<td>'.$row['gender'].'</td>';
            $table_str.='</tr>';
        }
        $table_str.='</table>';
        echo $table_str;
        
        $sql =  'SELECT * FROM m_students';
        //$stmt2 = $dbConn -> prepare ($sql2);
        $stmt -> execute (  array ( ':id' => '1')  );
        if ($stmt->rowCount() > 0) {
            //Creates a table
            $table_str2.='<table>';
            $table_str2.='<thead><h2>Female Students</h2>';
            $table_str2.='</thead>';
        while ($row = $stmt -> fetch())  {
            //echo  $row['deviceName'] . ", " . $row['deviceType'] . ', ' . $row['price'] . ", " . $row['status']. "</br>";
            $table_str2.='<tr>';
            $table_str2.='<td>'.$row['firstName'].'</td>'.'<td>'.$row['lastName'].'</td>'.'<td>'.$row['gender'].'</td>';
            $table_str2.='</tr>';
        }
        $table_str2.='</table>';
        echo $table_str2;
        }
        else {
        echo "No data found";
        }
        }
        ?>
        
                                <table border="1" width="600">
                                    <tbody><tr>
                                        <th>#</th>
                                        <th>Task Description</th>
                                        <th>Points</th>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>1</td>
                                        <td>A report shows all female students ordered by last name, from A to Z</td>
                                        <td width="20" align="center">10</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>2</td>
                                        <td>A report shows students that have assignments with a grade lower than 50, ordered by grade, in ascending order</td>
                                        <td width="20" align="center">15</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>3</td>
                                        <td>A report lists those assignments that have not been graded and their due date, ordered by due date, ascending</td>
                                        <td width="20" align="center">15</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>4</td>
                                        <td>A report shows the Gradebook, which includes first name, last name, assignment title, and grade. It should be ordered by last name and assignment title </td>
                                        <td align="center">15</td>
                                    </tr>
                                    <tr style="background-color:#FFC0C0">
                                        <td>5</td>
                                        <td>A report lists each student along with his/her average grade, ordered by average grade, from highest to lowest</td>
                                        <td width="20" align="center">15</td>
                                    </tr>
                                    <tr style="background-color:#99E999">
                                        <td>6</td>
                                        <td>This rubric is properly included AND UPDATED (BONUS)</td>
                                        <td width="20" align="center">2</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>T O T A L </td>
                                        <td width="20" align="center"><b></b></td>
                                    </tr>
                                </tbody></table>
                            
        <form>
            <!--<input type="submit" value="Spin!"/>-->
        </form>
        </div>
    </body>