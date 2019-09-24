<html>
<body>
<?php
  $name=$_POST["Name"];
  $email=$_POST["email"];
  $contact=$_POST["contact"];
  $select=$_POST["select"];
  $comment=$_POST["Comments"];

  $conn = new mysqli("localhost","root","","website");

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO form1 (Name, Email, type,contact,comment)
    VALUES ('$name', '$email','$select','$contact','$comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

 <br>
Thank you <?php echo $_POST["Name"];?> for you resopnse, our team will get back to you shortly.
<br><br>

Your Details:<br><br>
Name : <?php echo $_POST["Name"]; ?><br>
Email : <?php echo $_POST["email"]; ?><br>
Contact Number : <?php echo $_POST["contact"]; ?><br>

</body>
</html>
