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
			<h3 class="agile-title"><u>Collaborate with Us</u></h3>
			<h4>&#9977&#9977
						Do you own a business that sells products made of Dhaka fabric, clothing items such as handmade scarves and shawls, and creative items such as velvet shoes?
Or are you someone that makes the raw materials for all or any of these?
 </h4><br>
 <h4>
 If you identify as someone in any of these categories, we welcome your collaboration and support in doing business together, and help shape the lives of these women by empowering them economically. 

 </h4><hr>
 <div class="col-md-9 col-sm-9 contact-right" align="center">
 <h4><b><em>Please fill up the following form so that we could get in touch with you.</em></b> </h4><br><br>

			
				<form action="#" method="post">
				<input type="text" class="form-control" name="username" id="username" autofocus="autofocus" required="required"  
				placeholder="FULL NAME" >
	
				<input type="email"  class="form-control" name="parentEmail" id="parentEmail" autofocus="autofocus" 
				placeholder="EMAIL ADDRESS" required="">
				<input type="text" class="form-control" name="parentAddress" id="parentAddress" autofocus="autofocus" 
				placeholder="CONTACT NUMBER" required="">
				<input type="text" class="form-control" name="parentPhoneno" id="parentPhoneno" autofocus="autofocus" 
                placeholder="NAME OF THE BUSINESS" required="">
                <input type="email"  class="form-control" name="parentEmail" id="parentEmail" autofocus="autofocus" 
                placeholder="BUSINESS WEBSITE" required="">
                <input type="email"  class="form-control" name="parentEmail" id="parentEmail" autofocus="autofocus" 
				placeholder="BUSINESS TYPE" required="">
				
							   <input type="textarea" cols="60" rows="10" style="width:460px; height:150px;"  
							   class="form-control" name="comments" id="comments" autofocus="autofocus" 
							   placeholder="COMMENTS" required="">
                               <input type="submit" value="PROCEED">     			  
			</form>
			</div>
			
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
    
    

<?php
include "include/footer.php";
?>
</body>
</html>