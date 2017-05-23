<?php // php page

// variables
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$address = $_POST['address']; 
$phone = $_POST['phone'];
$email = $_POST['email'];


$db = new mysqli("localhost","root","","1621ict"); // create new mysqli
      if(!$db){ // if the database was not created
         echo '<script type="text/javascript">alert("'.$db->error.'");</script>'; // print the error
      } else {
         echo "Opened database successfully.\n";
      }

      // create sql squery
      $sql ='INSERT INTO CUSTOMERS (FIRSTNAME, LASTNAME, ADDRESS, PHONE, EMAIL) VALUES ("'.$fName.'", "'.$lName.'", "'.$address.'", "'.$phone.'", "'.$email.'");';

      // execute query
      $db->query($sql);
      
      // print the users name and that they were successfully added to the list
      echo $fName . " " . $lName . " was succesffully added to the mailing list."; 
      
      // redirect
      header("Location: http://web-lreynolds188926539.codeanyapp.com/SyntaxJunkies/signupComplete.html");
      exit();

?>
