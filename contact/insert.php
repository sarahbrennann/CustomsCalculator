<!DOCTYPE html>
<html>
  
<head>
    <title>contact form</title>
</head>
  
<body>
    <center>
        <?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => 
        $conn = mysqli_connect("localhost", "root", "", "customs4you");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        // Taking 6 values from the user
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $Gender =  $_REQUEST['Gender'];
        $Country = $_REQUEST['Country'];
        $email = $_REQUEST['email'];
		$comment =  $_REQUEST['comment'];
          
        // insert query execution
        // contact table
        $sql = "INSERT INTO contact  VALUES ('$first_name', 
            '$last_name','$Gender','$Country', '$email','$comment')";
       
        if(mysqli_query($conn, $sql)){
            echo "<h3><br/><br/><br/><br/><br/><br/><br/><br/>Your message has been submitted to the forum!" 
                . " Thank you" 
                . "!</h3>"; 
  
            echo nl2br("\n$first_name\n $last_name\n "
                . "$Gender\n $Country\n $email\n $comment"); 
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
	<br/><br/><br/><br/><br/><br/>
	<center><a href="contact.php">Back to Contact form!</a></center>
</body>
  
</html>