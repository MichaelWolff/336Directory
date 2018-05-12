<?php 
	include('api/connection.php');
	session_start();
?>
<!DOCTYPE html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<html>
<head>
	<title>Kahoot</title>
	<link rel="stylesheet" type="text/css" href="../../css/styles.css">
</head>
<body>
<body>
<div class="container">
    <form id="QuizDetails" action="QuizAPI.php" enctype="multipart/form-data" method = "POST">
        <div>
        <input type="text" id="Title" name="title" placeholder="Your title..">
        <textarea id="Description" name="Description" placeholder="Write something.." style="height:200px"></textarea>
        <input type="text" id="Creator" name="Creator" placeholder="Your name..">
        </div>
        <div>
        <img id="tempImage" class= "uploadImage" src="../../img/QuizImage.png" alt="Smileyface">
        <input type="file" id="Image" name="Image" id="Image">
        <input type="text" id="PIN" name="PIN" placeholder="########...Soon to be your PIN" disabled>
        <input type="submit" value="Create Quiz" />
        </div>
        </form>
      </div>
</div>
  			<script>
  			    // The Javascript
  			    
        //         var form = document.getElementById('QuizDetails');
        //         form.onsubmit = function() {
        //         document.getElementById('PIN').disabled= false;
  			   // document.getElementById('PIN').value= 123456;
  			   //// document.getElementById("Image").value= ""
        //         var formData = new FormData();
        //         formData.append('file', form);
        //         $.ajax({
        //             url: "QuizAPI.php",//form.getAttribute('action'),
        //             data: formData,
        //             processData: false,
        //             contentType: false,
        //             type: 'POST',
        //             success: function(data){
        //                 alert(data);
        //             }
        //         });
                
                $( 'QuizDetails' ).submit(function ( e ) {
                    e.preventDefault();
                    document.getElementById('PIN').disabled= false;
  			        document.getElementById('PIN').value= 123456;
  			        var form = $(this);
  			        var formData = new FormData($("#QuizDetails")[0]);
                    $.ajax({
                        type: 'POST',
                        url: 'QuizAPI.php',
                        dataType:'json',
                        data: JSON_encode(formData),
                        success: function ( data ) {
                            alert( data );
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                });

    
});
                // var xhr = new XMLHttpRequest();
                // xhr.open('POST', form.getAttribute('action'), true);
                // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                // xhr.send(formData);

  return false; // To avoid actual submission of the form
  			</script>>
	        <!--This above line should be put onto the create quiz page as well as the necessary function-->
</body>
</html>