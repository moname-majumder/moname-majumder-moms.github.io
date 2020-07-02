<!DOCTYPE html>
<html>

			
	<?php
include_once 'just_header.php';
?>
<body>

	
	

	
			
			
    

 <!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
<h1 class="header-h w3-center">Photo Gallery</h1>
  
  <p class="w3-center">A selection of images showcasing everything we have to offer at our restaurant.

</p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center ">
    <div class="w3-col m3">
	 <?php

$dir_path = "upload/";
$extensions_array = array('jpg','png','jpeg');

if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            // get file name
            //echo "$files[$i]";
            
            // get file extension
            $file = pathinfo($files[$i]);
            $extension = $file['extension'];
           // echo "File Extension-> $extension<br>";
            
           // check file extension
            if(in_array($extension, $extensions_array))
            {
            // show image
			
           echo "<img src='$dir_path$files[$i]' style='width:400%;' onclick='onClick(this)' class='w3-hover-opacity w3-section' alt='$files[$i]'>";
			
            }
        }
    }
}
?>
     
    </div>
  </div>

	<div class="w3-row-padding w3-center w3-section">
	
    <br><br>
			
	
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-white" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>


<?php
include_once 'footer.php';
?>


 <script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  

</body>

</html>

