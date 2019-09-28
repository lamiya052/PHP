<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$name= $email =$gender = $comment = " ";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=test_input($_post["name"]);
	$email=test_input($post["email"]);
	$website=test_input($_post["website"]);
	$comment=test_input($_post["comment"]);
	$gender=test_input($_post["gender"]);
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>PHP form validation example</h2>

<form method="post" action = " <?php echo htmlspecialchars($SERVER["PHP_SELF"];?>">
Name : <input type="text" name="name">
<br><br>
Email : <input type="text" name="email">
<br><br>
Website : <input type="text" name="website">
<br><br>
Comment : <input type="text" name="comment">
<br><br>
Gender :
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="other">other
<br><br>
<input type="submit" name="submit" value="submit">;
</form>

<?

echo "<h2>Your Input:</h2>";
echo $name;
<br>;
echo $email;
<br>;
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>



</body>
<html>