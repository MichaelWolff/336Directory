<?php
include 'inc/functions.php';
?>
<!DOCTYPE html>
<script src="imagefeed.js"></script>
<html>
    
    <head>
        <title> Lab 4 </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <h1>LOOK AT THESE DOGS!!!!!!!</h1>
        <div style="text-align:center;">
            <button class="button-next"onclick="change_image_back();">Last Puppy</button>
            <img src="./imgs/puppy1.jpg" alt="Mountain View" width = "512" height = "512" id="feed">
             <button class="button-next"onclick="change_image();">Next Puppy</button>
            </div>
            <div style="text-align:center;overflow:auto;"> 
                    <button onclick="like();">Like</button>
                    <text id="likes">0</text>
                    <button onclick="dislike();">Dislike</button>
                    <button onclick="report();">Report as Spam</button>
                    <p id="comments" >
                    testing the paragragh text box
                    </p>
            </div style="text-align:center;"> 
        
            
            <div style="text-align: center;">
                <!--<form>-->
                <textarea id="paragraph_text" cols="100" rows="10"></textarea>
                <button onclick="comment();" >Comment</button>
                <!--<input type="submit" value="Submit">-->
                <!--</form>-->
            </div>
        </div>
    </body>
</html>