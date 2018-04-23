
<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
    console.log("Show user function");
    if (str == "") {
        console.log('String = nothing line 5');
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            console.log("If statement line 9");
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            console.log("line 12");
            //xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        
        xmlhttp.open("GET","/Playground/Poll2/getuser.php?q="+str,true);
                console.log('running xmlhttp.open');

        xmlhttp.send();
                console.log('running xmlhttp.send');
        xmlhttp.onreadystatechange = function() {
            console.log("On Ready State Change line 16");
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;//This takes whatever was printed out by the request(echo) and sets the text to be equal to it.
            }
        };        

    }
}

function addPoint(){
    // console.log("Show user function");
    if (str == "") {
        // console.log('String = nothing line 5');
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // console.log("If statement line 9");
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            // console.log("line 12");
            //xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            // console.log("On Ready State Change line 16");
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                for (var i = 0; i < this.responseText.length; i++) {
                    console.log(this.responseText[i]);
                }//This takes whatever was printed out by the request(echo) and sets the text to be equal to it.
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
                // console.log('running xmlhttp.open');

        xmlhttp.send();
                // console.log('running xmlhttp.send');

    }
}
</script>
</head>
<body>

<h1>Do you intend to make your own applications?</h1>
<button onclick="showUser('1')">Yes</button>
<button onclick="showUser('2')">No</button>
<button onclick="showUser('3')">Maybe</button>
<button onclick="showUser('4')">Show Table</button>
<button onclick="showUser('5')">Clear Table</button>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>