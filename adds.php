<?php
include('header.php');
?>
<div class="wrapper">
<a href="index.php">Home</a>
<div class="container">
<h4> Add details of student</h4>
<form action="" method ="POST">
<input type="text" name="name" placeholder="name"><br>
<input type="text" name="reg" placeholder="registration number"><br>
<input type="date" name="dob" placeholder="date of birth"><br>
<input type="text" name="dep" placeholder="department"><br>
<input type="submit" name="sbtBtn" placeholder="name">
</form>
</div>
</div>
<?php
if(isset($_POST['sbtBtn'])) {
$name = $_POST['name'];
$reg = $_POST['reg'];
$dob = $_POST['dob'];
$dep = $_POST['dep'];
$insQuery = mysqli_query($con, "INSERT INTO student
VALUES('','$name','$reg','$dob','$dep')");
if($insQuery) {
echo "<div class='status'> Submitted successfully </div>";
}
else {
echo "<div class='status'> Error. Please try again </div>";
}
}
?>
</body>
</html>