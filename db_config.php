 <?php
$host = "phpfargate.c52iunt9a16e.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "admin1234";
$dbname = "Student";

// Create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed : " . mysqli_connect_error());
}
echo "Connected successfully";

$ID = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$tel = $_POST['tel'];
$gender = $_POST['gender'];
$yr = $_POST['yr'];
$degree = $_POST['degree'];

$sql = "INSERT INTO StudentInfo (ID,FirstName,LastName,DOB,PhoneNumber,Gender,Year,Degree) VALUES ('$ID','$fname','$lname','$dob','$tel','$gender','$yr','$degree')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?> 
