<?php 
	include('api/connection.php');
?>
<!DOCTYPE html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<html>
<head>
	<title>Kahoot</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="CreateQuiz.php">Create Quiz</a></li>
                <li style="float:right"><a class="active" href="Login.php">Login</a></li>
            </ul>
            <!--There should be a list of quizzes to join here-->
  			</br>Title:<br>
  			<input type="text" name="title" value="Tester Quiz">
  			<br>
  			Description:<br>
  			<input type="text" name="description" value="Tester Description">
  			<br><br>
  			<button type="button" onclick="CreateQuiz('1234')">Create Quiz</button>
	        <!--This above line should be put onto the create quiz page as well as the necessary function-->
</body>

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
        
        xmlhttp.open("GET","/Projects/Kahoot/api/Quizzes/GetQuiz.php?pin="+str,true);
                console.log('running xmlhttp.open');

        xmlhttp.send();
                console.log('running xmlhttp.send');
        xmlhttp.onreadystatechange = function() {
            console.log("On Ready State Change line 16");
            if (this.readyState == 4 && this.status == 200) {
            	console.log(JSON.parse(this.responseText));
            	console.log(JSON.parse(this.responseText).data.Image);
            	reponse = JSON.parse(this.responseText);
				var myImage = new Image(200, 200);//Instead of creating a new image this should just replace a placeholder image source
				myImage.src = reponse.data.Image;
				document.body.appendChild(myImage);
                //document.getElementById("txtHint").innerHTML = this.responseText;//This takes whatever was printed out by the request(echo) and sets the text to be equal to it.
            }
        };        

}
}
</script>
</html>