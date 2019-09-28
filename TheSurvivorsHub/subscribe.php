<?php
require "include/head.php";
require "classes/bookcontroller.php";
$bookcon= new bookcontroller(); 
if(isset($_POST['subscriberName']))
{
$bookcon -> setSubscriberName($_POST['subscriberName']);
$bookcon-> setSubscriberEmail($_POST['subscriberEmail']);

if($bookcon->addSubscriber())
{

?>
<?php
header("Location:index.php?msg=subscribed sucessfully!!");
}
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-5"></div>
        <div class="col-lg-2">
            <br>
            <br>
            
            
        </div>
        <div class="col-lg-5"></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Sign Up To Our Newsletter</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" enctype="multipart/form-data" action="">
                        <fieldset>
                        <div class="form-group">
                                Subscriber-Name :   <input type="text" class="form-control" 
                                name="subscriberName" id="subscriberName" autofocus="autofocus" required="required"  
                                placeholder="subscriberName" >
                            </div>
                      
                               Subscriber-Email:
                            <div class="form-group">
                                <input type="email"  class="form-control" name="subscriberEmail" id="subscriberEmail" 
                                autofocus="autofocus" placeholder="subscriberEmail" required="">
                            </div>
                            
                                <input type="checkbox" name="accept" id="accept" required=""> 
                                --I agree to the Terms of service and Privacy policy
                           
                               
                            <br/>
                            <button class="btn btn-success btn-block" name="send" onclick="JavaScript:alert(
                                'Thank you for subcribing our newsletter; you will be updated soon.!!')">SUBSCRIBE</button>
                           
                        </fieldset>
                        <hr>            
                    </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
