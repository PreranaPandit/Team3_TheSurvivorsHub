<!DOCTYPE html>

<?php
  include "include/conn.php";
  include "include/head.php";
  require "classes/bookcontroller.php";
  require_once 'Classes/connection.php';
$sql = "UPDATE counter SET counter = counter + 1";
$result = $connect->db_query($sql);
$count = "select counter from counter";
$result = $connect->db_query($count);
$bookcon= new bookcontroller();
   
if(isset($_POST['parentName']))
{
$bookcon -> setParentName($_POST['parentName']);
$bookcon-> setChildName($_POST['childName']);
$bookcon-> setChildDob($_POST['childDob']);
$bookcon-> setParentEmail($_POST['parentEmail']);
$bookcon-> setParentAddress($_POST['parentAddress']);
$bookcon-> setParentPhoneno($_POST['parentPhoneno']);
$bookcon-> setClasses($_POST['classes']);
$bookcon-> setComments($_POST['comments']);
$bookcon-> setUserName($_POST['username']);

if($bookcon->addbooking())
{

?>
<?php
header("Location:registerlist.php?msg=bookingssaddedsucessfully");
}
}
?>


<body>
<!-- contact starts -->

<div class="contact" id="contact">
		<div class="container">
			<h3 class="agile-title"><u>Contact Us</u></h3>
			<!-- <h4>
						<b><u><em>ONLINE BOOKING IS HERE </em>&#9977&#9977</b></u></h4><hr>
			<div class="col-md-9 col-sm-9 contact-right">
				<form action="#" method="post">
				<input type="text" class="form-control" name="username" id="username" autofocus="autofocus" required="required"  
				placeholder="username" >
				<input type="text" class="form-control" name="parentName" id="parentName"  autofocus="autofocus" required 
				pattern="^[A-Za-z]+"placeholder="ParentName" required="">					
				<input type="text" class="form-control" name="childName" id="childName" autofocus="autofocus" 
				placeholder="childName" required="">
				<input type="date" style="width:260px; height:30px;" class="form-control" name="childDob" id="childDob" 
				autofocus="autofocus" placeholder="childDob" required="">
				<input type="email"  class="form-control" name="parentEmail" id="parentEmail" autofocus="autofocus" 
				placeholder="parentEmail" required="">
				<input type="text" class="form-control" name="parentAddress" id="parentAddress" autofocus="autofocus" 
				placeholder="parentAddress" required="">
				<input type="text" class="form-control" name="parentPhoneno" id="parentPhoneno" autofocus="autofocus" 
				placeholder="parentPhoneno" required="">
				<select name="classes" id="classes" style="width:260px; height:30px;">
                                   <option value="Acting">Acting</option>
                                   <option value="Singing">Singing</option>
                                   <option value="Dancing">Dancing</option>
							   </select>
							   <input type="textarea" cols="60" rows="10" style="width:460px; height:150px;"  
							   class="form-control" name="comments" id="comments" autofocus="autofocus" 
							   placeholder="comments" required="">
                               <input type="submit" value="Book Me-Now">     			  
			</form>
			</div> -->
			<div class="col-md-3 col-sm-3 contact-left">
				<div class="address">
					<h4>
						<i class="fa fa-map-marker" aria-hidden="true"></i>OUR OFFICE</h4>
					<p>BOUDHA, KATHMANDU</p>
					<p>Jadibuti, NY 11101</p>
				</div>
				<div class="phone">
					<h4>
						<i class="fa fa-phone" aria-hidden="true"></i>CONTACT US</h4>
					<p>01865 766266</p>
					<p>01-4233770 /01-4255499</p>
				</div>
				
			</div>
		
	
	<!--	
		 <div id="map"></div>
    <script>
      function initMap() {
        var myLatLng = {lat: 43.255220, lng: -73.099210};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 4
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnCQY91EteZ9yzhzYbPunWB_hrF7nIrWM&callback=initMap"
        async defer></script> -->
		
		
    <!-- //contact ends-->
    
    <!-- map -->
	
	<div class="email">
					<h4>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>E-MAIL</h4>
					<p>
						<a href="mailto:info@example.com">thesurvivorshub880@gmail.com</a>
					</p>
					<p>
						<a href="mailto:info@example.com">TheSurvivorsHUB@gmail.com</a>
					</p>

					
				</div>

				
	<div class="map-w3ls">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!
			3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!
			2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075"
		    allowfullscreen></iframe>
	</div>
	<!-- //map -->
	</div>
	</div>

<?php
include "include/footer.php";
?>
</body>
</html>