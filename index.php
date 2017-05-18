

<!DOCTYPE html>
<html>
<title>Amber is the world's greatest mother!</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<div class="mommy">

<h1>AMBER IS THE WORLD'S GREATEST MOMMY!</h1>

</div>



<div class="love">

<p>My dear wife. I want you to know this mother's day that I am so lucky to have you as a partner and the mother of our son. Bobby truly is blessed to have a mommy that gives him so much love. That is his best friend! You two make my heart happy when I watch you together.</p><br>
<p>Love, Doug</p><br><br>

</div>

</div>

<h2 class="w3-center">Bobby loves Mommy</h2>

<div class="w3-content w3-display-container">
  <div class="pics">
  <img class="mySlides" src="B1.jpg" style="width:100%">
  <img class="mySlides" src="B_Amb1.jpg" style="width:100%">
  <img class="mySlides" src="B_D_A.jpg" style="width:100%">
  <img class="mySlides" src="BobbyAnimals.jpg" style="width:100%">
  <img class="mySlides" src="B_Glasses.jpg" style="width:100%">
  <img class="mySlides" src="AB_Bed.jpg" style="width:100%">
  <img class="mySlides" src="AB_Kiss.jpg" style="width:100%">
  <img class="mySlides" src="B_Floor.jpg" style="width:100%">
  <img class="mySlides" src="Beautiful.jpg" style="width:100%">
  <img class="mySlides" src="Helmet.jpg" style="width:100%">


  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  </div><br><br><br><br><br>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}


</script>



<h2 id="demo" class="love">I love you because...</h2><br><br>

<div class="love_2">
<button type="button"
onclick="love()">CLICK ME!</button>

<script>

 function love() {
    document.getElementById('demo').innerHTML = "You're stinky!" 
}

</script>

<br><br><br>
</div>
</body>
</html>