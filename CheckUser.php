<!DOCTYPE html>
<!-- author, date, prject description-->
<html>

<?php include 'head.php'; ?>

<body>
    <header>
        <h1>UHI Tunes</h1>
    </header>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="ContactUs.html">Contact Us</a></li>
            <li><a class="active" href="Login.php">Login</a></li>
        </ul>
    </nav>
    <?php
  include("DbConnect.php");              // Add in the database connection details
  
  // Now get the information from the Form
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];

  //echo $Email;
//echo $Password;
  


  $Query = "SELECT UserNo,Email,passwd FROM UsersAuto
  WHERE  Email = '$Email'
  AND passwd='$Password'";

  //   Now run the query - i.e. Query the data in the table
  
  $Result = mysqli_query($DB, $Query);	 // $Result gives us a numeric value to check if the query found a match ok. 
  

  $NumResults = mysqli_num_rows($Result);

  // echo $NumResults;
  
  if ($NumResults == 1) {
    echo '<h2>' . 'Found user with matching password' . '</h2>';
    //	Now find the associated User no
    $row = mysqli_fetch_assoc($Result);
    //	$UserNo=$row[0]; // done with mysqli_fetch_row($Result) OR
    $UserNo = $row['UserNo']; // mysqli_fetch_assoc($Result);
  
    //	it's the first element - element 0 - from the row array if using line 35
  
    echo '<br/>Associated User no is  ' . $UserNo . '  <FORM METHOD="LINK" ACTION="AddCD.php"><INPUT TYPE="submit" VALUE="Enter site"></FORM>'; // or 'UserNo' if line 36
//	echo '<h3>Associated User no is  '.$UserNo.'</h3>'; // or 'UserNo' if line 36
  
  } else
    echo '<h2>' . 'User not found OR wrong password OR both OR multiple matches found' . '</h2';


  ?>



</body>
<footer>

</footer>

</html>