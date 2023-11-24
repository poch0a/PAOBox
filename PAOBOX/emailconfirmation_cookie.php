

<html>
  <body>
<?php


$name = "";
//$WAY=""; 
$email = "";
$Phone_Number =""; 
$Message = "";
//$WAY = "";
//$Verification = "";
$SendTo = "pedroaochoa2@gmail.com";
$Subject = "New Data From Form";
$email_data = $name;



if (isset($_POST['submit'])) {
  $name = $_POST["visitor_name"];
  //$WAY = $_POST["way"];
  $email = $_POST["visitor_email"];
  $Phone_Number = $_POST["phonenumber"]; 
  $Message = $_POST["visitor_message"];


  $cookieData = array("visitor_name"=> $name,"visitor_email"=> $email, "phonenumber"=> $Phone_Number,"visitor_message"=> $Message );

  $cookie_name = "cookie_form";
  $cookie_value = "cookieData";
  $expireTime = time()*0; // 30 days6
  setcookie("cookie_form", json_encode($cookieData), $expireTime, "/");

?>
<?php
if (isset($_POST['submit'])){
  mail($SendTo,$Subject,$email_data);
}
?>

<h1>
  <?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
  //redirect to form
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "<br />We appreciate taking the time to fill out the form," . $name. "Have a good day!<br>";
}

} ?>
</h1>



</body>
</html>