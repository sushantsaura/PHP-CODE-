<?php
include('header.php');
?>
<div class="wrapper">
<a href="index.php">Home</a>
<div class="container">
<h4> Delete student</h4>
<form action="" method ="POST">
<input type="text" name="reg" placeholder="registration number"><br>
<input type="submit" name="sbtBtn" value="Delete">
</form>
</div>
</div>
<?php
if(isset($_POST['sbtBtn'])) {
$reg = $_POST['reg'];
$delDetailsQuery = mysqli_query($con, "DELETE FROM student
WHERE reg='$reg'");
$delMarksQuery = mysqli_query($con, "DELETE FROM marksheet
WHERE reg='$reg'");
if($delDetailsQuery && $delMarksQuery) {
echo "<div class='status'> Deleted successfully </div>";
}
else {
echo "<div class='status'> Record not found. Please add record
first. </div>";
}
}
?>
</body>
</html>