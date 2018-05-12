<?php 
	include('api/connection.php');
	session_start();
?>
<!DOCTYPE html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<html>
<head>
	<title>Kahoot</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<body>
<div class="container">
    <form action="uploadFile.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="titleHeading">Title</label>
      </div>
      <div class="col-25">
        <input type="text" id="title" name="title" placeholder="Your title..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="descrition">Description</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="description" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <input type="submit" value="Submit">
  <img id="quizImage" class= "uploadImage" src="img/QuizImage.png" alt="Smileyface">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <!--<input type="submit" value="Upload Image" name="submit">-->
    </form>
    <p>PLeasee use .jpg, .jpeg, and .png files that they are smaller than 1MB</p>
    <!--Gallery of Images-->.
        <div class="imageContainer">
      </div>
</div>
  			
	        <!--This above line should be put onto the create quiz page as well as the necessary function-->
</body>


<?php
$_SESSION["title"] = $_POST['title'];
$_SESSION["quizImage"] = $_POST['quizImage'];
echo $_SESSION["quizImage"];
echo $_SESSION["title"];
?>
<script type = "text/javascript">
function CreateQuiz(str) {
    console.log("Show user function");
    if (str == "") {
        console.log('String = nothing line 5');
        //document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            console.log("If statement line 9");
            var xmlhttp = new XMLHttpRequest();
        } else {
            console.log("line 12");
        }
        
        xmlhttp.open("POST","/Projects/Kahoot/api/Quizzes/GetQuiz.php?pin="+str,true);//This method needs to be changed to post
                console.log('running xmlhttp.open');

        xmlhttp.send();
                console.log('running xmlhttp.send');
        xmlhttp.onreadystatechange = function() {
            console.log("On Ready State Change line 16");
            if (this.readyState == 4 && this.status == 200) {
            	//console.log(JSON.parse(this.responseText));
            	//console.log(JSON.parse(this.responseText).data.Image);
            	//reponse = JSON.parse(this.responseText);
				var myImage = new Image(200, 200);//Instead of creating a new image this should just replace a placeholder image source
				//myImage.src = reponse.data.Image;
				document.body.appendChild(myImage);
                //document.getElementById("txtHint").innerHTML = this.responseText;//This takes whatever was printed out by the request(echo) and sets the text to be equal to it.
            }
        };        

}
}
</script>
</html>