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
    <form id="Appointment" action="AppointmentAPI.php" enctype="multipart/form-data" method = "POST">
        <label for="StartDate">Start Date</label>
            <input id="StartDate" name="StartDate" type="date">

        <label for="EndDate">End Date</label>
            <input id="EndDate" name="EndDate"type="date">

        <label for="StartTime">Start Time</label>
            <input id="StartTime" name="StartTime" type="time">

        <label for="ApptNumber">Number of Appointments</label>
            <input id="ApptNumber" name="ApptNumber" type="number">
            
        <label for="ApptLength">Length of Appointments(Minutes)</label>
            <input id="ApptLength" name="ApptLength" type="number">
            
        <label for="Details">Details</label>
            <textarea id="Details" name="Details" placeholder="Write something.." style="height:200px"></textarea>
            
        <p>An appointment slot will be created for amount of time specified starting at the time of day specified for each day between the Start Date and the End Date</p>
        
        <input id="Cancel"type="button" Value="Cancel">
            <input type="submit" value="Create Appointment" />
        </form>
      </div>
</div>
  			<script>
                $( 'Appointment' ).submit(function ( e ) {
                    e.preventDefault();
                    // document.getElementById('PIN').disabled= false;
  			       // document.getElementById('PIN').value= 123456;
  			        var form = $(this);
  			        var formData = new FormData($("#Appointment")[0]);
                    $.ajax({
                        type: 'POST',
                        url: 'AppointmentAPI.php',
                        dataType:'json',
                        data: JSON_encode(formData),
                        success: function ( data ) {
                            window.location.href = "index.php";
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                });

    
});
  return false; // To avoid actual submission of the form
  			</script>>
</body>
</html>