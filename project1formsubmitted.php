<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>First Form</title>
    <link rel="stylesheet" href="project1css.css">
 
</head>
	
<body>
    <div id="header">
<h1 id="title">File Created Successfully!</h1>
    </div>
    <?php 
    
    //start a session to transfer the data from the original page to the session to ultimatly transfer it to the last php page.
    // I learned to do this through w3schools. cite below
    // PHP 5 Sessions. (n.d.). Retrieved September 18, 2018, from https://www.w3schools.com/php/php_sessions.asp
session_start();
    
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];

?>
        <form method="post" action="project1php.php">
  
        <p>
        <input id="button" type="submit" value="Download CSV"></p>
    </form>
    
    
    </body>
</html>