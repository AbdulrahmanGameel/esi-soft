<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>


  <div class="w3-dropdown-click">
    <button onclick="dropDown()" class="w3-button w3-black">Click me</button>
    <div id="our_products" class="w3-dropdown-content w3-bar-block w3-card-4 w3-animate-opacity">
      <a href="#" class="w3-bar-item w3-button">Link 1</a>
      <a href="#" class="w3-bar-item w3-button">Link 2</a>
      <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>
  </div>

<script>
function dropDown() {
  var x = document.getElementById("our_products");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>