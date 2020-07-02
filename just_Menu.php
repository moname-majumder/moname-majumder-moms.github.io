<!DOCTYPE html>
<html lang="en">

	<?php
include_once 'just_header.php';
?>

		
<body>			
	
		

  
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">Our menu is practical and well designed as well.
            <br>Mostly given care to our customers choices. </p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
            <li><a class="filter" data-filter=".breakfast">Breakfast</a></li>
            <li><a class="filter" data-filter=".lunch">Lunch</a></li>
            <li><a class="filter" data-filter=".dinner">Dinner</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">
		<?php
		require 'db.php';

	$sql = $sql = "SELECT * FROM menu where category='breakfast'";
	$act = $db->query($sql);

	foreach ($act as $key) {
		
	}
	?>
	
		<?php foreach ($act as $key): ?>
          <div class="breakfast menu-restaurant">
            <span class="clearfix">
			  <span style="color:#9699a6;font-size:16px"><?php  echo $key['id']; ?></span>.
              <span style="color:#FFB03B;font-family:Montserrat,arial;letter-spacing:1px" data-meal-img="assets/img/restaurant/rib.jpg"><?php  echo $key['title']; ?></span>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php  echo $key['price']; ?></span>
            </span>
            <span class="menu-subtitle"><?php  echo $key['subtitle']; ?></span>
          </div>

          

          
		  
		  
		  <?php endforeach ?>
		  
		  <?php
		require 'db.php';

	$sql = $sql = "SELECT * FROM menu where category='lunch'";
	$act = $db->query($sql);

	foreach ($act as $key) {
		
	}
	?>
	
		<?php foreach ($act as $key): ?>
		  
          <div class="lunch menu-restaurant">
            <span class="clearfix">
			<span style="color:#9699a6;font-size:16px"><?php  echo $key['id']; ?></span>.
              <span style="color:#FFB03B;font-family:Montserrat,arial;letter-spacing:1px" data-meal-img="assets/img/restaurant/rib.jpg"><?php  echo $key['title']; ?></span>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php  echo $key['price']; ?></span>
            </span>
            <span class="menu-subtitle"><?php  echo $key['subtitle']; ?></span>
          </div>

          <?php endforeach ?>
			
			 <?php
		require 'db.php';

	$sql = $sql = "SELECT * FROM menu where category='dinner'";
	$act = $db->query($sql);

	foreach ($act as $key) {
		
	}
	?>
	
		<?php foreach ($act as $key): ?>
          <div class="dinner menu-restaurant">
            <span class="clearfix">
			<span style="color:#9699a6;font-size:16px"><?php  echo $key['id']; ?></span>.
              <span style="color:#FFB03B;font-family:Montserrat,arial;letter-spacing:1px" data-meal-img="assets/img/restaurant/rib.jpg"><?php  echo $key['title']; ?></span>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price"><?php  echo $key['price']; ?></span>
            </span>
            <span class="menu-subtitle"><?php  echo $key['subtitle']; ?></span>
          </div>

         <?php endforeach ?>
		  
        </div>
		

      </div>
    </div>
  </section>
  <!--/ menu -->

<?php
include_once 'footer.php';
?>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  
  <?php 
		if(isset($_SESSION['error'])){
			echo '<li>'. $_SESSION['error'] . '</li>';
		}
 	?>

</body>

</html>
