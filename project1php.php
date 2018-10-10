
<?php

//Continue the session from last page
session_start();
//let http know you are making a csv file
    header('Content-Type: text/csv');
//it will be called userinfo.csv
   header('Content-Disposition: attachment; filename="userinfo.csv"');
    
  //give the document a variable name
$open = fopen('php://output', 'a');   

//create variables for the incoming data
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];

//create an array of the data
$array = array($firstname, $lastname, $username, $email);

//put the data in the file
    fputcsv($open, $array);

//close the document
    fclose($open);
    


?>


