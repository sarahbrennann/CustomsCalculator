<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="contact.css">
	<title>
	Contact Form
	</title>


<script> 
 
function validateform(){  
<!--first name validation-->	
var first_name=document.myform.first_name.value;  

  
if (first_name==null || first_name==""){  
  alert("First Name can't be blank");  
  return false;  
}

<!--Last name validation-->	
var last_name=document.myform.last_name.value;  

  
if (last_name==null || last_name==""){  
  alert("Last Name can't be blank");  
  return false;  
}

<!--Gender validation-->	
var Gender=document.myform.Gender.value;  

  
if (Gender==null || Gender==""){  
  alert("Gender can't be blank");  
  return false;  
}

<!--validation for email address -->
<!-- must have @ sign and dot in the correct place, the @ cannot be the first value-->
 var emailID = document.myform.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) {
            alert("Please enter correct email ID")
            document.myform.email.focus() ;
            return false;
         
         return( true );
}		 
<!--validation for country select menu-->
         if( document.myform.Country.value == "-1" ) {
            alert( "Please provide your country!" );
            return false;
         
         return( true );
}
<!--Commment validation-->	
var comment=document.myform.comment.value;  

  
if (comment==null || comment==""){  
  alert("Commment cant ");  
  return false;  
}
}
  
</script>  	


</head>

    <body>
		<!--All information on the page inside the main-body div-->
	<div id="main-body">
	
		<!--Heading for homepage-->
		<div id="heading-section">
			<h1>  </h1>
		</div>
		<br/>
		
		
		<!--Navigation bar with signup and login buttons-->
		<div class="topnav">
			<a class="home" href="../html/Homepage.html">Home</a>
			<a href="../login/signup.php">Sign up</a>
			<a href="../login/login.php">Login</a>
			<a href="../calculator.html">Calculator</a>
			<a href="contact.php">Contact</a>
		</div>
		

		
    <center>
        <h1> </h1>
		<br/><br/><br/><br/><br/><br/>
  
  <!--action="insert.php"
   put this in form tag to insert into database   "-->
        <form  name="myform" method="post"  action="insert.php" action="abc.jsp" onsubmit="return validateform()">
              
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
  
                
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
  
                
            <p>
                <label for="Gender">Gender:</label>
                <input type="text" name="Gender" id="gender">
            </p>
  
                            
            <p>
                <label for="country">Country:</label>
				   <select name = "Country">
                     <option value = "-1" selected>[choose yours]</option>
                     <option value = "1">USA</option>
                     <option value = "2">UK</option>
                     <option value = "3">Ireland</option>
                  </select>
            </p>
  
                           
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailID">
            </p>
			
			<p>
                <label for="comment">Comment:</label>
                <input type="text" name="comment" id="comment">
            </p>
                
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>