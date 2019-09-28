<?php 
$connection = new mysqli("localhost","root","");
if(!mysqli_select_db($connection,'prerana_lcdc'))
{
 echo "<script>window.location.assign('setup.php')</script>";
 
}
?>
<!DOCTYPE html>
<!-- Cookie used using ajax-->
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#aa0000",
      "text": "#ffdddd"
    },
    "button": {
      "background": "#ff0000"
    }
  }
})});
</script> 
<!-- Cookie ended-->

<?php
  include "include/conn.php";
  include "include/head.php";
  
  require_once 'Classes/connection.php';
$sql = "UPDATE counter SET counter = counter + 1";
$result = $connect->db_query($sql);
$count = "select counter from counter";
$result = $connect->db_query($count);?>

<body>
<div class="slider">
        <div class="callbacks_container">
     <div class="w31-main" id="home">
       <div class="container">
       <div class="header">
       <!- sticky navigation -->
 <div class="nav-links">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
        <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
						<span class='sr-only'>Toggle Navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
				</div>

        <div class='collapse navbar-collapse'>
          <ul>
		  <li>  <a href="index.php">
               <img  src="pics/logo.png" alt="" style="width:45%;"/> 
               </a></li>
			   <li> <a class="" href="">Home</a> </li>
            <li> <a href="#about" class="scroll">About Us</a></li>
            <li> <a href="#aboutlcdc">Community</a></li>
            <li> <a href="#blog">Stories</a></li>
            <li><a href="#services">Products</a></li>
            <li><a href="collaborate.php">Collaborate</a></li>
            <li><a href="where.php">Contact Us</a></li>
            
            </ul>
          </div>
        </div>
        </nav>
      </div>
      <!-- Sticky navigation ends -->

         <!-- header starts -->
         
           <!-- <div class="logo">
             <h1>
               <a href="index.php">
               <img class="logo-img center-block" src="pics/logo.png" alt="" style="width:15%;"/> The Survivors' Hub
               </a>
             </h1>
            </div> -->
          <div class="clearfix"></div>
          </div>
          <!--header ends-->
          </div>        
        <!-- slider begins -->
      
        <ul class="rslides" id="slider">

         <li>
        <div class="slider-img-w3layouts one">
           <div class="w31-overlay">
            <div class="container">
             <div class="banner-text-info">
             <h3>JOIN
               <span>to grow together</span> &
               <span>thrive</span></h3>
         
          </div>
        </div>
        </div>
        </div>
        </li>

        <li>
          <div class="slider-img-w3layouts two">
            <div class="w31-overlay">
              <div class="container">
                <div class="banner-text-info">
                  <h3>REVIVE
                  <span>here's to a </span> new
                  <span>chapter</span></h3>
                 
                 </div>
              </div>
             </div>
           </div>
         </li>

         <li>
         <div class="slider-img-w3layouts three">
           <div class="w31-overlay">
            <div class="container">
             <div class="banner-text-info">
             <h3>PERSEVERE
               <span>because</span> you
               <span>survived</span></h3>

          </div>
        </div>
        </div>
        </div>
        </li>

         <li>
          <div class="slider-img-w3layouts four">
            <div class="w31-overlay">
              <div class="container">
                <div class="banner-text-info">
                  <h3>LIVE
                  <span>because there's</span> more to
                  <span>life</span></h3>
                 
                 </div>
              </div>
             </div>
           </div>
         </li>

         </ul>
         </div>
        <div class="clearfix"></div>
        </div>
        <!-- slider ends-->
      </div>
      <!--banner ends>

 


      <!-- Welcome page begins (section) -->

         <div class="about" id="about">
         <div class="container">
             <h3 class="agile-title"><u>About Us</u></h3>
             <!--<h2><b><u>Events Section::</h2></u><b><br>-->
             <h4><em>We are a group of people trying to help create a virtual community hub for people who have been survivors of harassment & violence, and been rescued by organizations such as Maiti Nepal and Women’s Foundation of Nepal. These survivors have been given a home, and trained with skills to sustain their living, but the products they have built have just been piling up the homes rather than actually reaching the market and providing themselves with monetary benefits.</h4>
           </em>  <br>
           <!-- 2nd paragraph-->
           <h4><em>We are trying to close the gap between them, their skills, and the market, by giving them an online presence where they and their products get visible, and that we can start conversations on these topics with the help of this platform in the outside media. This hub is their space. Solely theirs. Here, they can share their stories, get inspired from the others’, and support one another emotionally without the fear of being judged or misunderstood. Here, they know and understand each other without even knowing each other in real life, because they know what it is like to be a survivor.</h4>
           </em>  
          
          <!-- 4th paragraph-->
           
           <h4><em>Besides opening discussions and selling products, we want them to feel at home here, by providing them with educational materials on enhancing their soft skills, connect with investors and vendors to expand businesses, and get in touch with mentors to participate in in-person mentorships later on. </h4>
           </em>  <br>

           <!-- 5th paragraph-->
           
           <h4><em>If you are someone who owns businesses that sell products as listed in our site, you can be a partner, and collaborate with us here.</h4>
           </em>  <br>
           
           <!-- 6th paragraph-->
           
           <h4><em>If you would like to support our cause, you can donate<insert link> some funds to help provide them with more opportunities, and create a better life for these survivors. </h4>
           </em>  <br>

           <!-- 7th paragraph-->
           
           <h4><em>Or, you can help us start a trend by buying our products and sharing pictures with them to start trends on social media. 
      <br>
Live. Love. Give. 
</h4>
           </em>  <br>
<br>
<br>
             <div class="about-wel">
             <h5><span><u>TAKE STAND AGAINST DOMESTIC VIOLENCE</u></span></h5></div>
             <br><hr>

             <!--middle slider begins -->
  <div class="w3agile-spldishes">
  <div class="container">
    <div class="spldishes-grids">

    <!--Owl Carousel begins -->
    <div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
					<a class="item g1">
						<img class="lazyOwl" src="pics/1.jpg" title="LCDC Events" alt="" />
					</a>
					<a class="item g1">
						<img class="lazyOwl" src="pics/2.jpg" title="LCDC Events" alt="" />
						<h3>Awareness campaign aginst violence</h3>
					</a>
					<a class="item g1">
						<img class="lazyOwl" src="pics/3.jpg" title="LCDC Events" alt="" />
						<h2>Speak up loud</h2>
					</a>
					<a class="item g1">
						<img class="lazyOwl" src="pics/4.jpg" title="LCDC Events" alt="" />
            
					</a>
					<a class="item g1">
						<img class="lazyOwl" src="pics/5.jpg" title="LCDC Events" alt="" />
            <!--<h2><em>Join Us and get fulfilled your dreams!!!!!..</em></h2>-->
					</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- middle slider ends -->

  <!-- More About Us section -->
  <div class= "aboutlcdc" id="aboutlcdc">
      <div class="aboutUs" id="aboutUs">
        <div class="container">
      
      <h2> <b><u>OUR MAIN MOTIVE</u></b></h2><hr>
      <u></u>
             <div class="about-top w31s-agile">
               <div class="col-md-6 red">
                  <img class="img-responsive" src="pics/ab.jpg" alt="" style="width:800px;height:500px;">
                </div>
              
              <div class="col-md-6 come">
                <div class="about-wel">
                  <h5><em><span>Survive</span> And <span>Thrive</span></em></h5><br>

                  <p><b>
                  VISION</b><br>Survive to strive and thrive.
                </p>
                  <p><b>MISSION</b><br>
We are here to support the community of harassment and abuse survivors to continue with their lives by making them economically empowered, connected and united.  
</p>
<p>
  <p><b>
VALUES</b><br>
<ul>
							<li>
								<i class="glyphicon glyphicon-ok"></i>RESPECT is to value each person, their stories, tastes, and personal choices as what they are, and NOT imposing what we want those things to be.
</li>
							<li>
								<i class="glyphicon glyphicon-ok"></i>RESPONSIBILITY is to feel accountable for how we behave and how our words and actions might impact others.  
</li>
							<li>
							
						</ul>
</p>
<br><br>
</div>
            </div>
<p>
<b>
  <br>
<h4><em>
*The template for this page has been adopted from this website, and some points that align with our goals may have been copied as is.<br> 
https://calgarywomensshelter.com/index.php/about/vision-history-and-goals
 
</em>

</h4>
                  
                 
            <div class="button-styles"><center>
              <a href="#blog" >StoriesLists &#9970</a>
              <a href="where.php">Contact Us &#9742</a></center>
              
            
            </div>

<!-- <hr> -->


		
  </div>
</div>
</div>
	<!-- welcome ends -->

  <!--classes begins -->
  <div class="services" id="services">
    <div class="container">
     <h3 class="agile-title"><u>Our Products</u></h3>
    
     <div class="w3_agile_services_grids">
				<div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/velvetshoes.jpg" title = "With their soft sheen, rich color and elegant flair, velvet shoes add a luxurious touch to any woman's wardrobe." alt=" " class="img-responsive" />
						</div>
					</div>
					<fieldset>
						<legend><u>Slippers</u></legend>
            Description: Velvet slippers 
            Price: Rs. 850
            <div class="button-styles">
              <a href="">BUY NOW</a>
             
            </div>
            <div class="buttonstyles">
              <a href="">Add to Cart</a>
            </div>
					</fieldset>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/scarf.jpg" title="This soft velvet scarf is made from 90% polyester and 10% spandex. S06204. Scarf measures 8.25 inches wide. Measures 62 inches long, from end to end." alt=" " class="img-responsive" />
						</div>
					</div>
					<fieldset>
						<legend><u>Scarf</u></legend>
            Description: Short velvet Scarfs
            Price: Rs. 550
            <div class="button-styles">
              <a href="">BUY NOW</a>
             
            </div>
            <div class="buttonstyles">
              <a href="">Add to Cart</a>
            </div>
					</fieldset>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/DhakaScarf.jpg" title="Velvet Scarf/Shawl with Roses Pattern in black and Red. ... I burnt-out my own pattern of rose-buds-with-thorny- branches into white velvet. This process is called devorè. The backing is sheer silk dyed a black tone." alt=" " class="img-responsive" />
						</div>
					</div>
					<fieldset>
						<legend><u>Velvet Shawls</u></legend>
          Description: Weaved shawls
          Price: Rs. 2500
		  <div class="button-styles">
              <a href="">BUY NOW</a>
             
            </div>
            <div class="buttonstyles">
              <a href="">Add to Cart</a>
            </div>
          </fieldset>
          <br>
        </div>


        <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/DhakaPurse.jpg" alt=" " title="This beautiful Versace purse is called Vanitas Athena Velvet Handbag. The soft velvet is paired with a baroque print." class="img-responsive" />
						</div>
					</div>
					<fieldset>
						<legend><u>Dhaka Purses</u></legend>
          Description: Velvet N-Purses
          Price: Rs. 1500
		  <div class="button-styles">
              <a href="">BUY NOW</a>
             
            </div>
            <div class="buttonstyles">
              <a href="">Add to Cart</a>
            </div>
					</fieldset>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/DhakaTie.jpeg" alt=" " title="There are foolproof ties that by dint of fabric, lining or a combination of both, easily produce near-perfect knots that look good throughout the day. So-called woven silks are thicker and easier to tie than thinner, printed silk ties (in fact, all silks are woven)." class="img-responsive" />
						</div>
					</div>
					<fieldset>
						<legend><u>Dhaka Weaved Tie</u></legend>
          Description: Dhaka Weaved ties
          Price: Rs. 250
		  <div class="button-styles">
              <a href="">BUY NOW</a>
             
            </div>
            <div class="buttonstyles">
              <a href="">Add to Cart</a>
            </div>
					</fieldset>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/DhakaHandkerchief.jpg" alt=" " title="Batiste is a balanced plain weave, a fine cloth made from cotton or linen such as cambric. Batiste was often used as a lining fabric for high-quality garments. Batiste is also used for handkerchiefs." class="img-responsive" />
						</div>
					</div>
					<fieldset>
						<legend><u> Handkerchief</u></legend>
          Description: Handkerchiefs
          Price: Rs. 2500
          <div class="button-styles">
              <a href="">BUY NOW</a>
             
            </div>
            <div class="buttonstyles">
              <a href="">Add to Cart</a>
            </div>
					</fieldset>
        </div>
       
				<div class="clearfix"> 
       
        </div>
      </div>
</div>


	</div>
	<!-- classes section ends -->

  <!-- blog starts -->
  <div class="blog" id="blog">
    <div class="container">
    <h3 class="agile-title"><u>Our Stories</u></h3>
			<div class="col-md-5 col-xs-6 blog-grids">
				<div class="blog-full-wthree">
					<div class="blog-left-agileits">
						<p>Sep</p>
						<span>27</span>
					</div>
					<div class="blog-right-agileits-w3layouts">
						<h4>
							<a href="#" data-toggle="modal" data-target="#myModal2">Sexually abused by school teacher</a>
						</h4>
						<p>
							<a href="#" data-toggle="modal" data-target="#myModal2">Read story<<</a>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-full-wthree">
					<div class="blog-left-agileits">
						<p>Oct</p>
						<span>23</span>
					</div>
					<div class="blog-right-agileits-w3layouts">
						<h4>
							<a href="#" data-toggle="modal" data-target="#myModal2">Arrange Marriage at the age of 15 years old</a>
						</h4>
						<p>
							<a href="#" data-toggle="modal" data-target="#myModal2">Read story<<</a>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-full-wthree">
					<div class="blog-left-agileits">
						<p>Jan</p>
						<span>12</span>
					</div>
					<div class="blog-right-agileits-w3layouts">
						<h4>
							<a href="#" data-toggle="modal" data-target="#myModal2">Child marriage</a>
						</h4>
						<p>
							<a href="#" data-toggle="modal" data-target="#myModal2">Read story<<</a>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-5 col-xs-6 blog-grids">
				<div class="blog-full-wthree">
					<div class="blog-left-agileits">
						<p>Jan</p>
						<span>25</span>
					</div>
					<div class="blog-right-agileits-w3layouts">
						<h4>
							<a href="#" data-toggle="modal" data-target="#myModal2">Raped and married at the age of 14 years old</a>
						</h4>
						<p>
							<a href="#" data-toggle="modal" data-target="#myModal2">Read story<<</a>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-full-wthree">
					<div class="blog-left-agileits">
						<p>Feb</p>
						<span>06</span>
					</div>
					<div class="blog-right-agileits-w3layouts">
						<h4>
							<a href="#" data-toggle="modal" data-target="#myModal2">Acid Attack Victims</a>
						</h4>
						<p>
							<a href="#" data-toggle="modal" data-target="#myModal2">Read story<<</a>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="blog-full-wthree">
					<div class="blog-left-agileits">
						<p>Feb</p>
						<span>18</span>
					</div>
					<div class="blog-right-agileits-w3layouts">
						<h4>
							<a href="#" data-toggle="modal" data-target="#myModal2">Mental torture due to dowry
						<p>
							<a href="#" data-toggle="modal" data-target="#myModal2">Read story<<</a>
						</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	
	</div>
	<!-- Modal5 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-info">
						<h4>Domestic Violence Stories</h4>
						<img src="images/abuse.jpg" alt=" " class="img-responsive" />
						<h5>Sexually abused by school teacher
</h5>
						<p class="para-agileits-w3layouts">I am from a small village in the Eastern part of Nepal. I went to school every day and was very thankful for that. I really enjoyed studying. When I was 16 years old, my schoolteacher sexually abused me after school. After this happened to me, I told it to my family and friends in the village but nobody supported me. They said, it was my fault and the harassment would not stop. I felt so unwelcomed, so wounded. I decided to leave this difficult situation and save myself. I heard about The Women’s Foundation Nepal and when I ran away from home my only wish was to reach their office. When I finally arrived at the WFN district office in Jhapa, they helped me and sent me to Kathmandu. Today I live at their shelter in Kathmandu. I am still processing the emotional trauma of my past. But I feel safe today and part of a big family, which understands my needs and supports me every day.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal5 -->
	<!-- //blog -->

  <!-- Videos linked to each classes begins -->
 <br>
    <div id="gallery" class="gallery">
      <div class="container">
        <h3 class="agile-title"><u>Educational Materials</u></h3>
</div>
<div class="agileinfo-gallery-row">
<div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
<h4><em><u><b>--------Victim To Survivors'-----------</b></u></em></h4>
<video controls>
    <Source src="videos/v1.mp4" type="video/mp4"/></video> 
</div>
<div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
<h4><em><u><b>--------No More Victims-----------</b></u> </em></h4>
<video controls>
    <Source src="videos/v2.3gpp" type="video/mp4"/></video> 
</div>
<div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
<h4><em><u><b>------Finding Courgae To Talk-----</b></u> </em></h4>
<video controls>
    <Source src="videos/v3.mp4" type="video/mp4"/></video> 
</div>
<div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
<h4><em><u><b>--------STOP EXCUSES-----------</b></u> </em></h4>
<video controls>
    <Source src="videos/v4.mp4" type="video/mp4"/></video> 
</div>
<div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
<h4><em><u><b>-----Respect Now Always-------</b></u> </em></h4>
<video controls>
    <Source src="videos/v5.mp4" type="video/mp4"/></video> 
</div>
<div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
<h4><em><u><b>-------Service-Support----------</b> </u> </em></h4>
<video controls>
    <Source src="videos/v6.mp4" type="video/mp4"/></video> 
</div>
<div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
<h4><em><u><b>------Society Silence---------</b></u> </em></h4>
<video controls>
    <Source src="videos/v7.mp4" type="video/mp4"/></video> 
</div>
<div class="col-md-3 col-sm-3 col-xs-4 w3gallery-grids">
<h4><em><u><b>-----Teen Vogue Partner Voices------</b></u> </em></h4>
<video controls>
    <Source src="videos/v8.mp4" type="video/mp4"/></video> 
</div>

<div class="clearfix"> </div><hr>
    </div>
</div>
  </div>

  <!-- //Gallery of videos ended -->




  <!-- team-->
<div class="team" id="team">
		<div class="container">
		<h3 class="agile-title"><u>Our Partners</u></h3>
   
			<div class="team-agileinfo agileits-w3layouts">
				<div class="col-md-6 team-grid w3-agileits">
					<div class="teamimage">
						<img src="images/p1.jpg" alt=" " class="img-responsive" style="width:200px;height:200px;border-radius:30px;"/>
</div><br>
					<div class="team-grid-left">
						<h4>Amplify Change</h4>
						<p>AmplifyChange is a multi-donor challenge fund to support civil society advocacy for sexual and reproductive health and rights. We are a fund which aims to empower to realise their sexual and reproductive rights.
</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-grid w3-agileits">
					
						<img src="images/p2.png" alt=" " class="img-responsive" style="width:200px;height:200px;border-radius:30px;"/>
						<br>
					<div class="team-grid-left non">
            <div class="teamh4">
						<h4>Girls Not Brides</h4>
						<p>Girls Not Brides is a global partnership of more than 1300 civil society organisations committed to ending child marriage and enabling girls to fulfil their potential.</p>
					</div></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="team-agileinfo">
				<div class="col-md-6 team-grid w3-agileits">
        <div class="teamimage">
						<img src="images/p3.png" alt=" " class="img-responsive" style="width:200px;height:200px;border-radius:30px;"/>
</div><br>
					<div class="team-grid-left">
						<h4>Anti Slavery</h4>
						<p>Founded in 1839, we are the oldest international human rights organisation in the world.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 team-grid w3-agileits">
					
						<img src="images/p4.jpg" alt=" " class="img-responsive" style="width:200px;height:200px;border-radius:30px;"/>
				<br>
					<div class="team-grid-left non">
						<h4>Accounting for International Development</h4>
						<p>It supports a broad range of non-profit
organisations globally through the provision of volunteer accountants. </p>
					</div>

					
				</div>
			
			</div>
		</div>
	</div>
</div>
</div>
	<!-- //team -->
 


            <!-- <div class="clearfix"></div>
            <br><hr>
        </div>
        </div>
  </div>
  <div class="clearfix"> </div> -->

<!-- Reviews completed -->

<?php
include "include/footer.php";
?>

<script>
		// Start of Tawk.to Script
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5c19022182491369ba9e9baf/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();
		// End of Tawk.to Script
	</script>

 <!-- Cookie javascript-->
<div class="container-fluid cookies-agree" id="cookie-agree">
	<p>Do you want to allow cookie???<a href="#" class="btn btn-allow" id="cookie-allow">Allow Cookies</a></p>
</div>

<script>
$(function(){
	if (typeof(Storage) !== "undefined") {
		if(localStorage.getItem("NeedCookie") == null){
			$('#cookie-agree').fadeIn(200);
			$('#cookie-allow').click(function(){
				localStorage.setItem("NeedCookie", "Yes");
				$('#cookie-agree').fadeOut(200);
			});
		}
	}
});

</script> 

        <!-- js starts -->
        <script src="js/jquery-2.2.3.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!-- Necessary-Javascript-File-For-Bootstrap -->
        <!-- js ends -->

        <!-- Banner Slider -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function (){
              $("#slider").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 1000,
                namespace: "callbacks",
                before: function(){
                  $('.events').append("<li>before event fired.</li>");
                },
                after: function(){
                  $('.events').append("<li>after event fired.</li>");
                }

              });

            });
            </script>
            <!--Banner Slider ends -->

            <!-- Sticky Navigation Script -->
	<script>
		$(window).scroll(function () {
			if ($(window).scrollTop() >= 795) {
				$('nav').addClass('fixed-header');
			} else {
				$('nav').removeClass('fixed-header');
			}
		});

		/* scrollTop() >= 795
		   Should be equal the the height of the header
		 */
	</script>
	<!-- //Sticky Navigation Script -->

	<!-- simple-lightbox -->
	<script src="js/simple-lightbox.min.js"></script>
	<script>
		$(function () {
			var gallery = $('.agileinfo-gallery-row a').simpleLightbox({
				navText: ['&lsaquo;', '&rsaquo;']
			});
		});
	</script>
	<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<!-- Light-box css -->
	<!-- //simple-lightbox -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 3,
				lazyLoad: true,
				autoPlay: true,
				pagination: true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->

   <!-- SEO - Google Analytics Tracking Code Start -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61429982-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- SEO - Google Analytics Tracking Code End -->

  
</body>
</html>
<?php mysqli_close($conn); ob_end_flush(); ?>
<?php
     // Flush the output from the buffer
?>
