<?php

function getEvents() {
      $db = new mysqli("localhost","root","","1621ict"); // create database connection
      if(!$db){ // if database does not exist
         echo '<script type="text/javascript">alert("'.$db->error.'");</script>'; // print error
      } else {
         echo "Opened database successfully\n";
      }
  
  
      $sql ='SELECT * from EVENTS;'; // create query
      $ret = $db->query($sql); // execute query
      if(!$ret){ // if query did not execute
        echo $db->error; // print error
        return [];
      } else {
          while($row = $ret->fetch_assoc() ){ // while there is data from the query
            $array[] = $row; // copy data into variable array
         }
         $db->close(); // close database connection
         return $array; // return the array
      }
   }

?>