<!DOCTYPE html>
<!-- author, date, prject description-->
<html>
<head>
	<title>UHI Tunes successful login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<header>
    <h1>UHI Tunes</h1>
</header>
<?php
  include("DbConnect.php");              // Add in the database connection details

  // Now get the information from the Form
  $Email	 = $_POST['Email'];
  $Password 	 = $_POST['Password'];
  
//echo $Email;
//echo $Password;
  

  
  $Query = "SELECT UserNo,Email,passwd FROM UsersAuto
  WHERE  Email = '$Email'
  AND passwd='$Password'";
  
//   Now run the query - i.e. Query the data in the table
  
  $Result = mysqli_query($DB,$Query);	 // $Result gives us a numeric value to check if the query found a match ok. 
				 	 
									   
  $NumResults = mysqli_num_rows($Result);	
  							   
// echo $NumResults;

  if ($NumResults==1)
	{ 
	echo '<h2>'.'Found user with matching password'.'</h2>';
//	Now find the associated User no
	$row=mysqli_fetch_assoc($Result);
//	$UserNo=$row[0]; // done with mysqli_fetch_row($Result) OR
	$UserNo=$row['UserNo']; // mysqli_fetch_assoc($Result);

//	it's the first element - element 0 - from the row array if using line 35

	echo '<br/>Associated User no is  '.$UserNo; // or 'UserNo' if line 36
//	echo '<h3>Associated User no is  '.$UserNo.'</h3>'; // or 'UserNo' if line 36

	}  
  else echo '<h2>'.'User not found OR wrong password OR both OR multiple matches found'.'</h2';


?>

<FORM METHOD="LINK" ACTION="AddCD.php">


<INPUT TYPE="submit" VALUE="Enter site">
</FORM>
    
</body>
<footer>
<a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="https://unsplash.com/@iammrcup?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Mr Cup / Fabien Barral"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Mr Cup / Fabien Barral</span></a>    
</footer>
</html>


