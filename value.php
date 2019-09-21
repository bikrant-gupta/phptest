<h4><?php echo 'hi ';?></h4>
<?php

$server="localhost";
$aduser="root";
$adpassword="123456";
$dbname="employee";

$conn=new mysqli($server,$aduser,$adpassword,$dbname);
$email=$_COOKIE['email'];
$sql="SELECT * FROM users WHERE email='$email'";
$result=$conn->query($sql);
echo $result->num_rows;
while($row=$result->fetch_assoc()){
	echo 'email='.$row['email'].' password='.$row['password'].' time_joined='.$row['time_joined'].'<br>';
}
?>
