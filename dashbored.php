<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cvadel";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// insert experiences data in table
if (isset($_POST['addexp'])) {
  $nameexc = $_POST['nameexc'];
  $year = $_POST['year'];
  $details = $_POST['details'];

  $insert_query = "INSERT INTO experiences (name_ex , year_ex , detal_ex) VALUES ('$nameexc','$year','$details')";

  $send = mysqli_query($conn, $insert_query);
  if (!$send) {
    echo "Something wrong";
  } else {
    echo "<script>alert('تم الاضافة بنجاح')</script>";
  }
}


if (isset($_POST['addskill'])) {
  $nameeskill = $_POST['nameeskill'];


  $insert_query = "INSERT INTO skills (name_sk) VALUES ('$nameeskill')";

  $send = mysqli_query($conn, $insert_query);
  if (!$send) {
    echo "Something wrong";
  } else {
    echo "<script>alert('تم الاضافة بنجاح')</script>";
  }
}

if (isset($_POST['addmaj'])) {
  $namemaj = $_POST['namemaj'];


  $insert_query = "INSERT INTO majors (name_maj) VALUES ('$namemaj')";

  $send = mysqli_query($conn, $insert_query);
  if (!$send) {
    echo "Something wrong";
  } else {
    echo "<script>alert('تم الاضافة بنجاح')</script>";
  }
}

?>

<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styleTable.css">
  <title></title>
</head>

<body>
  <h1>ادخال البيانات</h1>


  <div class="forms">
    <a style="" href="index.php">الرئيسية</a>
    <h2>اضف خبرة</h2>
    <form method="POST" action="dashbored.php">
      <h3>المسمى</h3>
      <input type="text" name="nameexc" placeholder="المسمى" required>
      <h3>السنة</h3>
      <input type="text" name="year" placeholder="السنة" required>
      <h3>تفاصيل</h3>
      <textarea placeholder="تفاصيل" name="details">

    </textarea>
      <input type="submit" value="اضف" name="addexp">
    </form>


  </div>
  <div class="forms">
    <h2>اضف مهارة</h2>
    <form method="POST" action="dashbored.php">
      <h3>المسمى</h3>
      <input type="text" name="nameeskill" placeholder="المسمى" required>

      <input type="submit" value="اضف" name="addskill">
    </form>

  </div>

  <div class="forms">
    <h2>اضف تخصص جديد</h2>
    <form method="POST" action="dashbored.php">
      <h3>المسمى</h3>
      <input type="text" name="namemaj" placeholder="المسمى" required>

      <input type="submit" value="اضف" name="addmaj">
    </form>

  </div>
</body>

</html>