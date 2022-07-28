<?php
include('header.php');
?>
<div class="wrapper">
<a href="index.php">Home</a>
<div class="container">
<h4> edit details of student</h4>
<form action="" method ="POST">
<input type="text" name="name" placeholder="name"><br>
<input type="text" name="reg" placeholder="registration number"><br>
<input type="date" name="dob" placeholder="date of birth"><br>
<input type="text" name="dep" placeholder="department"><br>
<input type="text" name="sem" placeholder="Semester"><br>
<input type="text" name="m1" placeholder="Subject 1"><br>
<input type="text" name="m2" placeholder="Subject 2"><br>
<input type="text" name="m3" placeholder="Subject 3"><br>
<input type="submit" name="sbtBtn" value="Update">
</form>
</div>
</div>
<?php
if(isset($_POST['sbtBtn'])) {
$name = $_POST['name'];
$reg = $_POST['reg'];
$dob = $_POST['dob'];
$dep = $_POST['dep'];
$sem = $_POST['sem'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$tot = $m1 + $m2 + $m3;
$avg = $tot/3;
$updDetailsQuery = mysqli_query($con, "UPDATE student SET
name='$name',dob='$dob',dep='$dep' WHERE reg='$reg'");
$updMarksQuery = mysqli_query($con, "UPDATE marksheet SET
sem='$sem',m1='$m1',m2='$m2',m3='$m3',tot='$tot',avg='$avg' WHERE
reg='$reg'");
if($updDetailsQuery && $updMarksQuery) {
echo "<div class='status'> Updated successfully </div>";
}
else {
echo "<div class='status'> Record not found. Please add record first. </div>";
}
}
?>
</body>
</html>