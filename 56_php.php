<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 


<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) 
  {
    $website = "";
  } 
  else 
  {
    $website = test_input($_POST["website"]);
	// check if URL address syntax is valid
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
	{
      $websiteErr = "Invalid URL"; 
    }    
	
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP FORM VALIDATION EXAMPLE</h2>
<p><span class="error">* required field</span></p>
<form method="post" action=" <?php htmlspecialchars($_SERVER[PHP_SELF]);?> ">
Name : <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
Email : <input type="text" name="email">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
Website: <input type="text" name="website">
<br><br>
Comment: <input type="text" name="comment">
<br><br>
Gender :
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>