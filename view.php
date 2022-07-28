<?php
include('header.php');
?>
<div class="wrapper">
<a href="index.php">Home</a>
<div class="container">
<h4> Search...</h4>
<form action="" method ="POST">
<input type="text" name="reg" placeholder="Registration number"><br>
<input type="submit" name="sbtBtn" value="Search">
</form>
</div>
</div>
<?php
if(isset($_POST['sbtBtn'])) {
$reg = $_POST['reg'];
$getDetailsQuery = mysqli_query($con, "SELECT * FROM student
WHERE reg='$reg'");
if(mysqli_num_rows($getDetailsQuery) == 0) {
echo "<div class='result'>Student not found</div>";
}
else {
$getDetails = mysqli_fetch_array($getDetailsQuery);
$name = $getDetails['name'];
$reg = $getDetails['reg'];
$dob = $getDetails['dob'];
$dep = $getDetails['dep'];
echo "<div class='result'>
<div class='ind'>Name:" . $name . "</div>
<div class='ind'>Registration Number:" . $reg . "</div>
<div class='ind'>Date of birth:" . $dob . "</div>
<div class='ind'>Department:" . $dep . "</div>
 </div>";
$getMarksQuery = mysqli_query($con, "SELECT * FROM
marksheet WHERE reg='$reg'");
if(mysqli_num_rows($getMarksQuery) == 0) {
echo "<div class='marks'> Marks not available</div>";
}
else {
$getMarks = mysqli_fetch_array($getMarksQuery);
$m1 = $getMarks['m1'];
$m2 = $getMarks['m2'];
$m3 = $getMarks['m3'];
$tot = $getMarks['tot'];
$avg = $getMarks['avg'];
$sem = $getMarks['sem'];
echo "<div class='marks'>
<div class='ind'>Semester:" . $sem . "</div>
<div class='ind'>Subject 1:" . $m1 . "</div>
<div class='ind'>Subject 2:" . $m2 . "</div>
<div class='ind'>Subject 3:" . $m3 . "</div>
<div class='ind'>Total:" . $tot . "</div>
<div class='ind'>Percentage:" . $avg . "</div>
 </div>";
}
}
}
?>
</body>
</html>