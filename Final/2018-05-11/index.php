<?php 
	session_start();
?>
<!DOCTYPE html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<html>
<head>
	<title>Scheduler</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<body>
<div class="container">
    <body>
     <h2>Appointments</h2>
        <form action="index.php" method="post">
          <input type="submit" value="Submit">
         
        </form>
         <a href="AddAppt.php"><button>Add Appointments</button></a>
    
    <?php
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
        $dbname = $hasConnUrl ? ltrim($connParts['path'],'/') : 'Final';
        $username = $hasConnUrl ? $connParts['user'] : getenv('C9_USER');
        $password = $hasConnUrl ? $connParts['pass'] : '';

        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //return new PDO("mysql:host=$host;dbname=$dbname", $username, $password);//For some reason this line from Jasons exampled isnt working for me
        //////////////////////////////////////////////////////////////
        $sql =  'SELECT * FROM Appointment';

        $stmt = $dbConn -> prepare ($sql);
        $stmt -> execute (  array ( ':id' => '1')  );
        if ($stmt->rowCount() > 0) {
            //Creates a table headers
        $table_str3.='<table id="appointments">';
            $table_str3.='<th>StartDate</th>';
            $table_str3.='<th>StartTime</th>';
            $table_str3.='<th>Duration</th>';
            $table_str3.='<th>Booked By</th>';
            $table_str3.='<th>Details</th>';
            $table_str3.='<th></th>';
        while ($row = $stmt -> fetch())  {
            //fills the table rows
            $table_str3.='<tr>';
            $table_str3.='<td>'.$row['StartDate'].'</td>'.'<td>'.$row['StartTime'].'</td>'.'<td>'.$row['Duration'].'</td>'.'<td>'.'Not Booked'.'</td>'.'<td>'.$row['Details'].'</td>';
            // $table_str3.='<td><form action="AddAppt.php"><input type="submit" value="Submit"></form></td>';
            $table_str3.='<td><input type="button" value="delete" onclick="remove('.$row['Id'].')"</td>';
            $table_str3.='</tr>';
            
        }
        $table_str3.='</table>';
        //$table_str3.='</div>';
        echo '<div class="row">';
        echo $table_str3;
        //echo $_SESSION['tester2'];
        echo '</div>';
        }
        else {
        echo "No data found";
        }
        ?>
        </body>
      </div>
</div>
  			<script>
  			function remove(pin) {
  			    var data = {"pin": pin};
                    $.ajax({
                        type: 'GET',
                        url: 'AppointmentAPI.php',
                        data: {'data': data},
                        dataType: "json",
                        success: function ( data ) {
                            window.location.href = "index.php";
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                });
                }
  			</script>>
</body>
</html>