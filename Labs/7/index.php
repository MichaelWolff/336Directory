<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image Gallery</title>
	<link rel="stylesheet" href="styles.css">
	

	
</head>
<body>
	<script src="https://sdk.scdn.co/spotify-player.js"></script>
				<ul class="topForm">
              		<li><a href="https://www.spotify.com/" style="padding:0;"><img class="icon" src="img/SpotifyLogo.png" alt="Spotify"></a>
              		<li><a href="index.php">Home</a></li>
              		<li><a href="news.asp">News</a></li>
              		<li><a href="contact.asp">Contact</a></li>
              		<li style="float:right">
              			<form style = "width:100%" action="">
              				<button>Search</button>
              				<input type="search" value="Artist">
              			</form>
              		</li>
            	</ul>
            	<div>
            		<!---This will be the playlist->-->
            		<script type="text/javascript">
            // 1. Get rid of file input button
            //$("form button:nth-of-type(1)").click(function() {
            $("#selectButton").click(function() {
                console.log("clicked")
                $("form input[type='file']").trigger("click")
            })

            // 2. Use ajax to submit files
            $("form input[type='file']").change(function(e) {
                $('#filesList').empty();
                $.map(this.files, function(val) {
                    $('#filesList')
                        .append($('<div>')
                            .html(val.name)
                        );
                });
            })

            // 3. Send files with ajax
            $('#uploadButton').click(function(e) {
                setProgress(0);
                var formData = new FormData($('form')[0]);
                $.ajax({
                        url: "uploadFile.php",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        mimeType: "multipart/form-data",
                        cache: false,
                        // This part gives up chunk progress of the file upload
                        xhr: function() {
                            //upload Progress
                            var xhr = $.ajaxSettings.xhr();
                            if (xhr.upload) {
                                xhr.upload.addEventListener('progress', function(event) {
                                    var percent = 0;
                                    var position = event.loaded || event.position;
                                    var total = event.total;
                                    if (event.lengthComputable) {
                                        percent = Math.ceil(position / total * 100);
                                    }
                                    //update progressbar
                                    setProgress(percent);
                                }, true);
                            }
                            return xhr;
                        }
                    })
                    .done(function(data, status, xhr) {
                        console.log('upload done');
                        //window.location.href = "<?php echo BASE_PATH?>/assets/<?php echo $controller->group ?>";
                        console.log(xhr);
                        $("#results").html(xhr.responseText)
                    })
                    .fail(function(xhr) {
                        console.log('upload failed');
                        console.log(xhr);
                    })
                    .always(function() {
                        //console.log('done processing upload');
                    });
            });

            function setProgress(percent) {
                $(".progress-bar").css("width", +percent + "%");
                $(".progress-bar").text(percent + "%");
            }
        </script>
            	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="script.js"></script>
	
</body>
</html>