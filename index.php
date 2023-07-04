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
?>

<?php
if (isset($_GET['delet_maj'])) {
  $id = $_GET['delet_maj'];
  $query_delete = "DELETE FROM majors WHERE id_ma = $id";
  if (mysqli_query($conn, $query_delete)) {
    echo "<script>alert('تم الحذف بنجاح')</script>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
?>

<?php
if (isset($_GET['delet_skill'])) {
  $id = $_GET['delet_skill'];
  $query_delete = "DELETE FROM skills WHERE id_sk = $id";
  if (mysqli_query($conn, $query_delete)) {
    echo "<script>alert('تم الحذف بنجاح')</script>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
?>

<?php
if (isset($_GET['delet_exp'])) {
  $id = $_GET['delet_exp'];
  $query_delete = "DELETE FROM experiences WHERE id_ex = $id";
  if (mysqli_query($conn, $query_delete)) {
    echo "<script>alert('تم الحذف بنجاح')</script>";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}
?>

<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>CV</title>
</head>

<body>
  <div class="content">
    <div class="left">
      <div class="img">
        <img src="images/صورة واتساب بتاريخ 1444-03-29 في 13.23.06.jpg">
      </div>
      <div class="infor_education">
        <h2>التعليم</h2>
        <span class="btn_add"><a href="dashbored.php">إضافة</a></span>
        <?php
        $query = "SELECT * FROM majors ";
        $select_all = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($select_all)) {
          $id_ma = $row['id_ma'];
          $name_maj = $row['name_maj'];

        ?>
          <p>- <?php echo $name_maj ?> <a style="color:red" href="index.php?delet_maj=<?php echo $id_ma ?>">حذف</a></p>
        <?php } ?>
      </div>
      <div class="infor_education">
        <h2>المهارات</h2>
        <span class="btn_add"><a href="dashbored.php">إضافة</a></span>
        <?php
        $query = "SELECT * FROM skills ";
        $select_all = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($select_all)) {
          $id_sk = $row['id_sk'];
          $name_sk = $row['name_sk'];

        ?>
          <p><?php echo $name_sk ?> <a style="color:red" href="index.php?delet_skill=<?php echo $id_sk ?>">حذف</a></p>
        <?php } ?>
      </div>

      <div class="infor_education">
        <h2>التواصل</h2>
        <p>هاتف</p>
        <p> 0597619461</p>
        <p>ايميل</p>
        <p>myemail@gmail.com</p>
        <p>اعمال سابقة</p>
        <p>myportofolio@portio.com</p>
      </div>
    </div>

    <div class="right">
      <div class="main">
        <h1> أمجد مصباح شكري خضر</h1>
        <h5>مطور ويب</h5>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد</p>
      </div>

      <div class="experience">
        <h3>الخبرات</h3>
        <span class="btn_add"><a href="dashbored.php">إضافة</a></span>
        <?php
        $query = "SELECT * FROM experiences ";
        $select_all = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($select_all)) {
          $id_ex = $row['id_ex'];
          $name_ex = $row['name_ex'];
          $year_ex = $row['year_ex'];
          $detal_ex = $row['detal_ex'];

        ?>
          <p class="postion">- <?php echo $name_ex ?> <a style="color:red" href="index.php?delet_exp=<?php echo $id_ex ?>">حذف</a></p>
          <p><?php echo $year_ex ?> </p>
          <p><?php echo $detal_ex ?></p>
        <?php } ?>

      </div>





    </div>
  </div>
</body>

</html>