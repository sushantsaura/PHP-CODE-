<?php
include('header.php');
?>
<div class="wrapper">
<a href="index.php">Home</a>
<div class="container">
<h4> Add Marks of student</h4>
<form action="" method ="POST">
<input type="text" name="reg" placeholder="Registration Number"><br>
<input type="text" name="sem" placeholder="Semester"><br>
<input type="text" name="m1" placeholder="Subject 1"><br>
<input type="text" name="m2" placeholder="Subject 2"><br>
<input type="text" name="m3" placeholder="Subject 3"><br>
<input type="submit" name="sbtBtn" placeholder="name">
</form>
</div>
</div>
<?php
if(isset($_POST['sbtBtn'])) {
$reg = $_POST['reg'];
$sem = $_POST['sem'];
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$tot = $m1 + $m2 + $m3;
$avg = $tot/3;
$insQuery = mysqli_query($con, "INSERT INTO marksheet
VALUES('','$reg','$sem','$m1','$m2','$m3','$tot','$avg')");
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