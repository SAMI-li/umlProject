<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    
        html {
  height: 100%;
  min-height:800px;
}
body {
  background-size:cover;
  background-repeat:no-repeat;
  text-align: center;
 font-family: 'Noto Sans', sans-serif;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

h1{
  font-weight:400;
  padding-top:0;
  margin-top:0;
  font-family: 'Roboto Slab', serif;
}

#svg_form_time {
  height: 15px;
  max-width: 80%;
  margin: 40px auto 20px;
  display: block;
}

#svg_form_time circle,
#svg_form_time rect {
  fill: white;
}

.button {
  background: rgb(237, 40, 70);
  border-radius: 5px;
  padding: 15px 25px;
  display: inline-block;
  margin: 10px;
  font-weight: bold;
  color: white;
  cursor: pointer;
  box-shadow:0px 2px 5px rgb(0,0,0,0.5);
}

.disabled {
  display:none;
}

section {
  padding: 50px ;
  max-width: 900px;
  margin: 30px auto;
  background:white;
  background:rgba(255,255,255,0.9);
  backdrop-filter:blur(10px);
  box-shadow:0px 2px 10px rgba(0,0,0,0.3);
  border-radius:5px;
  transition:transform 0.2s ease-in-out;
}


input {
  width: 100%;
  margin: 7px 0px;
  display: inline-block;
  padding: 12px 25px;
  box-sizing: border-box;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 1em;
  font-family:inherit;
  background:white;
}

p{
  text-align:justify;
margin-top:0;
}
    </style>
</head>
<body>


<form method="post">
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Database name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" name="button" class="btn btn-primary" data-bs-dismiss="modal" >database</button>
      </div>
    </div>
  </div>
</div>
</form>


<?php
if (isset($_POST['button'])){
$servername = "";
$username = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$t ="CREATE DATABASE";
$t .= " tpuml";
$sql = $t ;
if ($conn->query($sql) === TRUE) {
  echo "Database created";
} else {
  echo "Error : " . $conn->error;
}

$conn->close();
}
?>



<div id="svg_wrap"></div>

<section>
<h1>header and footer details</h1>
 <p>header</p>
 <br>
 <input type="text" placeholder="website name" />
 <br>
 <select class="form-select form-select-lg mb-3" aria-label="Default select example">
  <option value="1">horizontal</option>
  <option value="2">vertical</option>
</select>
 <input type="text" placeholder="link1 name" />
 <input type="text" placeholder="link2 name" />
 <input type="text" placeholder="link3 name" />
 <input type="text" placeholder="link4 name" />
</section>

<section>
<h1>header and footer details</h1>
 <p>footer</p>
 <p></p>
 <input type="text" placeholder="text" />
</section>

<section>
<h1>body</h1>
 <p>image</p>
 <select class="form-select form-select-lg mb-3" aria-label="Default select example">
  <option selected>slides only</option>
  <option value="1">with controls</option>
  <option value="2">with indicators</option>
</select>
<label for="formFileMultiple" class="form-label">file input </label>
  <input class="form-control" type="file" id="formFile">
  <input class="form-control" type="file" id="formFile">
  <input class="form-control" type="file" id="formFile">
<p>About</p>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</section>
<section>
<h1>body</h1>
 <p>features</p>
 <input type="text" placeholder="feature1" />
 <input type="text" placeholder="feature2" />
 <input type="text" placeholder="feature3" />
 <input type="text" placeholder="feature4" />
</section>

<section>
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</section>

 <div class="button" id="prev">&larr; Previous</div>
<div class="button" id="next">Next &rarr;</div>
<div class="button" id="submit">website</div>
<script>



var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {})
myModal.toggle()
  $( document ).ready(function() {
var base_color = "rgb(230,230,230)";
var active_color = "rgb(237, 40, 70)";



var child = 1;
var length = $("section").length - 1;
$("#prev").addClass("disabled");
$("#submit").addClass("disabled");

$("section").not("section:nth-of-type(1)").hide();
$("section").not("section:nth-of-type(1)").css('transform','translateX(100px)');

var svgWidth = length * 200 + 24;
$("#svg_wrap").html(
  '<svg version="1.1" id="svg_form_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 ' +
    svgWidth +
    ' 24" xml:space="preserve"></svg>'
);

function makeSVG(tag, attrs) {
  var el = document.createElementNS("http://www.w3.org/2000/svg", tag);
  for (var k in attrs) el.setAttribute(k, attrs[k]);
  return el;
}

for (i = 0; i < length; i++) {
  var positionX = 12 + i * 200;
  var rect = makeSVG("rect", { x: positionX, y: 9, width: 200, height: 6 });
  document.getElementById("svg_form_time").appendChild(rect);
  // <g><rect x="12" y="9" width="200" height="6"></rect></g>'
  var circle = makeSVG("circle", {
    cx: positionX,
    cy: 12,
    r: 12,
    width: positionX,
    height: 6
  });
  document.getElementById("svg_form_time").appendChild(circle);
}

var circle = makeSVG("circle", {
  cx: positionX + 200,
  cy: 12,
  r: 12,
  width: positionX,
  height: 6
});
document.getElementById("svg_form_time").appendChild(circle);

$('#svg_form_time rect').css('fill',base_color);
$('#svg_form_time circle').css('fill',base_color);
$("circle:nth-of-type(1)").css("fill", active_color);

 
$(".button").click(function () {
  $("#svg_form_time rect").css("fill", active_color);
  $("#svg_form_time circle").css("fill", active_color);
  var id = $(this).attr("id");
  if (id == "next") {
    $("#prev").removeClass("disabled");
    if (child >= length) {
      $(this).addClass("disabled");
      $('#submit').removeClass("disabled");
    }
    if (child <= length) {
      child++;
    }
  } else if (id == "prev") {
    $("#next").removeClass("disabled");
    $('#submit').addClass("disabled");
    if (child <= 2) {
      $(this).addClass("disabled");
    }
    if (child > 1) {
      child--;
    }
  }
  var circle_child = child + 1;
  $("#svg_form_time rect:nth-of-type(n + " + child + ")").css(
    "fill",
    base_color
  );
  $("#svg_form_time circle:nth-of-type(n + " + circle_child + ")").css(
    "fill",
    base_color
  );
  var currentSection = $("section:nth-of-type(" + child + ")");
  currentSection.fadeIn();
  currentSection.css('transform','translateX(0)');
 currentSection.prevAll('section').css('transform','translateX(-100px)');
  currentSection.nextAll('section').css('transform','translateX(100px)');
  $('section').not(currentSection).hide();
});

});
</script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>



</body>
</html>