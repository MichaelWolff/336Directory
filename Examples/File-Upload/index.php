<!DOCTYPE html>
<html>

<head>
    <title> </title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <form action="uploadFile.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form>
    <!--Gallery of Images-->.
        <div class="imageContainer">
   <?php
    $files = glob("gallery/*.*");
    for ($i=0; $i<count($files); $i++)
     {
       $image = $files[$i];
       $supported_file = array(
               'jpg',
               'jpeg',
               'png'
        );
 
        $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        if (in_array($ext, $supported_file)) {
           echo basename($image)."<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
            echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
           } else {
               continue;
           }
         }
      ?>
      </div>
</body>

</html>
