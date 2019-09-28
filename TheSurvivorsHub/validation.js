/**Validation on Onine Booking */
function onlineBookingValidation()                                    
{ 
    var username = document.forms["OnlineBooking"]["username"];               
    var parentName = document.forms["OnlineBooking"]["parentName"];    
    var childName = document.forms["OnlineBooking"]["childName"];  
    var childDob =  document.forms["OnlineBooking"]["childDob"];  
    var parentEmail = document.forms["OnlineBooking"]["parentEmail"];  
    var parentAddress = document.forms["OnlineBooking"]["parentAddress"];
    var parentPhoneno = document.forms["OnlineBooking"]["parentPhoneno"];
    var classes = document.forms["OnlineBooking"]["classes"];
    var comments = document.forms["OnlineBooking"]["comments"];
       
    if (username.value == "")                                  
    { 
        window.alert("Please enter your username."); 
        username.focus(); 
        return false; 
    } 

    if (parentName.value == "")                                  
    { 
        window.alert("Please enter parent name."); 
        parentName.focus(); 
        return false; 
    } 
   
    if (childName.value == "")                                  
    { 
        window.alert("Please enter your child name."); 
        childName.focus(); 
        return false; 
    } 

    if (childDob.value == "")                                  
    { 
        window.alert("Please enter your child date of birth."); 
        childDob.focus(); 
        return false; 
    } 

    if (parentAddress.value == "")                               
    { 
        window.alert("Please enter your address."); 
        parentAddress.focus(); 
        return false; 
    } 
       
    if (parentEmail.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        parentEmail.focus(); 
        return false; 
    } 
   
    if (parentEmail.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        parentEmail.focus(); 
        return false; 
    } 
   
    if (parentEmail.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        parentEmail.focus(); 
        return false; 
    } 
   
    if (parentPhoneno.value == "")                           
    { 
        window.alert("Please enter your telephone number."); 
        parentPhoneno.focus(); 
        return false; 
    } 
   
     
    if (classes.selectedIndex < 1)                  
    { 
        alert("Please enter your course."); 
        classes.focus(); 
        return false; 
    }
    
    if (comments.value == "")                        
    { 
        window.alert("Please write your suggestions."); 
        comments.focus(); 
        return flase; 
    } 
   
    return true; 
}

/**Validation for event form */

function EventValidation()                                    
{ 
    var event = document.forms["AddEvent"]["event"];               
    var date = document.forms["AddEvent"]["date"];    
    var time = document.forms["AddEvent"]["time"];  
    var title =  document.forms["AddEvent"]["title"];  
    var image = document.forms["AddEvent"]["image"];  
  
    if (event.value == "")                                  
    { 
        window.alert("Please enter event name."); 
        event.focus(); 
        return false; 
    } 

    if (date.value == "")                                  
    { 
        window.alert("Please enter date."); 
        date.focus(); 
        return false; 
    } 
   
    if (time.value == "")                                  
    { 
        window.alert("Please enter time."); 
        time.focus(); 
        return false; 
    } 

    if (title.value == "")                                  
    { 
        window.alert("Please enter title."); 
        title.focus(); 
        return false; 
    } 


    if (image.value == "")                               
    { 
        window.alert("Please select image."); 
        image.focus(); 
        return false; 
    } 
    
    return true; 
}


/**Validation for posts form */

function PostValidation()                                    
{ 
    var subject = document.forms["AddPost"]["subject"];               
    var context = document.forms["AddPost"]["context"];    
    var datetime = document.forms["AddPost"]["datetime"];  
    var image = document.forms["AddPost"]["image"];  
  
    if (subject.value == "")                                  
    { 
        window.alert("Please enter subject name."); 
        subject.focus(); 
        return false; 
    } 

    if (context.value == "")                                  
    { 
        window.alert("Please enter context."); 
        context.focus(); 
        return false; 
    } 
   
    if (datetime.value == "")                                  
    { 
        window.alert("Please enter date and time."); 
        datetime.focus(); 
        return false; 
    } 

    if (image.value == "")                               
    { 
        window.alert("Please select image."); 
        image.focus(); 
        return false; 
    } 
    
    return true; 
}

/**Validation for LogIn form */

function LogInValidation()                                    
{ 
    var username = document.forms["Login"]["username"];               
    var password = document.forms["Login"]["password"];    
   
    if (username.value == "")                                  
    { 
        window.alert("Please enter appropriate username."); 
        username.focus(); 
        return false; 
    } 

    if (password.value == "")                                  
    { 
        window.alert("Please enter correct password."); 
        password.focus(); 
        return false; 
    } 
    
    return true; 
}


/**Validation on Registration Form */
function RegisterValidation()                                    
{ 
    var fname = document.forms["Register"]["fname"];               
    var lname = document.forms["Register"]["lname"];    
    var email = document.forms["Register"]["email"];  
    var postadd =  document.forms["Register"]["postadd"];  
    var postcode = document.forms["Register"]["postcode"];  
    var gender = document.forms["Register"]["gender"];
    var datetime = document.forms["Register"]["datetime"];
    var uname = document.forms["Register"]["uname"];
    var pwd = document.forms["Register"]["pwd"];
        
    if (fname.value == "")                                  
    { 
        window.alert("Please enter your first name."); 
        fname.focus(); 
        return false; 
    } 

    if (lname.value == "")                                  
    { 
        window.alert("Please enter your last name."); 
        lname.focus(); 
        return false; 
    } 
   
    if (postadd.value == "")                                  
    { 
        window.alert("Please enter your postal address."); 
        postadd.focus(); 
        return false; 
    } 

    if (postcode.value == "")                                  
    { 
        window.alert("Please enter your postal code."); 
        postcode.focus(); 
        return false; 
    } 
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
    if (datetime.value == "")                           
    { 
        window.alert("Please enter datetime."); 
        datetime.focus(); 
        return false; 
    } 
   
     
    if (gender.selectedIndex < 1)                  
    { 
        alert("Please select your gender."); 
        gender.focus(); 
        return false; 
    }
    
    if (uname.value == "")                        
    { 
        window.alert("Please write your user name."); 
        uname.focus(); 
        return flase; 
    } 

    if (pwd.value == "")                        
    { 
        window.alert("Please write your password."); 
        pwd.focus(); 
        return flase; 
    } 
   
    return true; 
}
