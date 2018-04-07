var increment = 2;
var likes = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var comments = [[],[]];
// var comment = 0;
var reported = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var comments = ["","","","","","","","","","","","","",""];
function show_image(src, width, height, alt) {
    var img = document.createElement("img");
    img.src = "./imgs/puppy"+increment + ".jpg";
    img.width = width;
    img.height = height;
    img.alt = alt;

    // This next line will just add it to the <body> tag
    document.body.appendChild(img);
    increment++;
    if(increment > 13){
        increment = 1;
    }
}

function change_image(){
    increment++;
    document.getElementById("comments").innerHTML= comments[increment];
    if(reported[increment] ==1){
            document.getElementById("feed").src = "./imgs/puppy0.jpg";

    }
    if(reported[increment] ==0){
            document.getElementById("feed").src = "./imgs/puppy"+increment + ".jpg";
    }
    if(increment > 12){
        increment = 1;
    }
    document.getElementById("likes").textContent=likes[increment]
}
function change_image_back(){
    increment--;
    document.getElementById("comments").innerHTML= comments[increment];
    if(reported[increment] ==1){
            document.getElementById("feed").src = "./imgs/puppy0.jpg";

    }
    if(reported[increment] ==0){
            document.getElementById("feed").src = "./imgs/puppy"+increment + ".jpg";
    }
    if(increment < 2){
        increment = 13;
    }
        document.getElementById("likes").textContent=likes[increment]

    
}
function like(){
    likes[increment]++;
    document.getElementById("likes").textContent=likes[increment];
}

function dislike(){
    likes[increment]--;
    document.getElementById("likes").textContent=likes[increment];
}
function report(){
    document.getElementById("feed").src = "./imgs/puppy0.jpg";
    reported[increment] = 1;
}

function comment(){
    console.log("Started the comment function");
    var text = document.getElementById("paragraph_text").value;
    comments[increment] = comments[increment]+ "</br>"+"<strong> User Posted: </strong></br>"+text+"</br>";
    document.getElementById("comments").innerHTML= comments[increment];
    // document.getElementById("comments").innerHTML="TESter";

}

// function comment(text){
//     comments[increment][comment]= text;
// }