<!DOCTYPE html>
<html>

			
			
	<?php
include_once 'just_header.php';
?>
			
	<body>		
			
    
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Cuisine's Story</h1>
          <p class="header-p">People wants to fulfill their desires instant and they don't want to waste time. Our story begins from this motivation. We serve foods online, reserve orders and make customers happy as they want to be. Cuisine's journey started in 2010 and still it is fulfilling its customers wish.</p>
		  <p> Just be with Cuisine's & spread much love! </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Specialities of Cuisine</h2>
              <p>Cuisine's take special care of stomach and prepare foods in fresh environment.</p>
			  <p>Cuisine's first concern is customers happiness. "No complain and no disppointments" for Cuisine is our only target!</p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>Our menu is practical</li>
                  <li><i class="fa fa-check"></i>Less oil used in each items</li>
                  <li><i class="fa fa-check"></i>Bengali items prepared in special care</li>
                  <li><i class="fa fa-check"></i>Indian & chinese items are also famous here</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/res01.jpg" alt="" class="img-responsive">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Up Coming events</h1>
            <p class="header-p">A complete decoraion can make you happier</p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/res02.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2> A Joyful party</h2>
                  <p>Next week, a beautiful birthday party will be arranged by Cuisine. <span id="dots">...</span><span id="more">All decorations, arrangements 
				  and foods will be prepared by us.
				  Special chef items will also be available in this evening.
				  Childrens play corner will also be opened and we always try to take special care of our little customers.</p> 
				  
                 
				 
				  <address>
                              <strong>Place: </strong>
                              Cuisine Restaurant, Bijay Sharani, Dhaka-1202
                              <br>
                              <strong>Time: </strong>
                              07:30pm
                            </address>
                 <button class="btn btn-imfo btn-read-more" onclick="myFunction()" id="myBtn">Read more</button>
               </span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event<span id="dots">...</span><span id="more"> <button class="btn btn-imfo btn-read-more" onclick="myFunction()" id="myBtn">Read more</button>-->
 

<?php
include_once 'footer.php';
?>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
	
	
	
	
	<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
</body>
</html>