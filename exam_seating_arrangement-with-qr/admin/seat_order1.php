<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_POST);
$msg="";





?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Seat Arrangement</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Seat Arrangement</li>
				</ul>
			</div>

			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Seat Arrangement</h4>
                            <br>
                            <span style="color:green"><?php echo $msg;?></span>
						</div>
                      	<div class="widget-inner">
                          <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
    </tr>
    <tr>
    </tr>
    <tr>
      <td align="center" valign="top"><p>&nbsp;</p>
        <p class="style1"><?php echo $msg; ?></p>
        <p class="style1">&nbsp;</p>
        <table width="794" height="62" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" align="center"><strong>Seat Arrangement</strong></td>
          </tr>
          <tr>
            <td width="116">Hall Rooms </td>
            <td width="425"><select name="class_id">
                <option value="">-Select-</option>
                <?php
			  $cq=mysql_query("select distinct(class_id) from students");
			  while($cr=mysql_fetch_array($cq))
			  {
			  $clqry=mysql_query("select * from class_room where id=".$cr['class_id']."");
			  $clrow=mysql_fetch_array($clqry);
			  ?>
                <option value=<?php echo $cr['class_id']; ?> <?php if($_REQUEST['class_id']==$cr['class_id']) echo "selected"; ?>><?php echo $clrow['rooms']; ?></option>
                <?php
			  }
			  ?>
              </select>
             
              <select name="edate">
			  <?php
			  $eq=mysql_query("select * from exam_date where status=1");
			  while($er=mysql_fetch_array($eq))
			  {
			  ?>
			  <option <?php if($er['date_schedule']==$edate) echo "selected"; ?>><?php echo $er['date_schedule']; ?></option>
			  <?php
			  }
			  ?>
              </select>
              <br><br>
            <input type="submit" name="btnSubmit" class="btn" value="Show" /></td>
          </tr>
        </table>
        <p>&nbsp;</p>
		<?php
include 'phpqrcode/qrlib.php';
session_start();
$connection = mysqli_connect("localhost", "root", "", "db_automation_new");

if (isset($_POST['btnSubmit'])) {
    $class_id = $_POST['class_id'];
    $_SESSION['class_id'] = $class_id;

    // Fetch exam schedule
    $examQuery = mysqli_query($connection, "SELECT * FROM exam_date WHERE status=1 ORDER BY id");
    $ii = 0;
    while ($examRow = mysqli_fetch_array($examQuery)) {
        if ($examRow['date_schedule'] == $edate) {
            break;
        }
        $ii++;
    }

    // Fetch available staff
    $staffQuery = mysqli_query($connection, "SELECT * FROM staff WHERE status=0");
    $staffList = array();
    while ($staffRow = mysqli_fetch_array($staffQuery)) {
        $staffList[] = $staffRow['id'];
    }

    // Fetch students and their seating details
    $studentQuery = mysqli_query($connection, "SELECT DISTINCT(class_id) FROM students WHERE class_id='$class_id'");
    $numStudents = mysqli_num_rows($studentQuery);
    $i = 0;
    $j = $ii;
    $n = $ii - 1;
    $staffDetails = "";

    while ($studentRow = mysqli_fetch_array($studentQuery)) {
        $i++;
        if (!empty($staffList[$j])) {
            $staffId = $staffList[$j];
        } else {
            $staffId = $staffList[$n];
        }
        $staffInfo = mysqli_fetch_array(mysqli_query($connection, "SELECT name FROM staff WHERE id='$staffId'"));
        $staffDetails .= "Staff: " . $staffInfo['name'] . "\n";
        $j++;
        $n--;
    }

    // Generate student details for QR
    $studentData = "Exam Seating Details for Class ID: $class_id\n";
    $studentData .= "------------------------------------\n";
    $studentData .= "$staffDetails\n";
    $studentData .= "------------------------------------\n";

    $studentTableQuery = mysqli_query($connection, "SELECT class_det, COUNT(class_det) as student_count, gender, sem, deptid FROM students WHERE class_id='$class_id' GROUP BY class_det");
    
    while ($studentTableRow = mysqli_fetch_array($studentTableQuery)) {
        $asem = $studentTableRow['sem'];
        $dept = $studentTableRow['deptid'];
        $subjectQuery = mysqli_query($connection, "SELECT subject FROM subject WHERE deptid='$dept' AND sem='$asem' LIMIT $ii,1");
        $subjectRow = mysqli_fetch_array($subjectQuery);
        $subjectName = $subjectRow['subject'];

        $studentData .= "Class: " . $studentTableRow['class_det'] . "\n";
        $studentData .= "No. of Students: " . $studentTableRow['student_count'] . "\n";
        $studentData .= "Gender: " . $studentTableRow['gender'] . "\n";
        $studentData .= "Subject: " . $subjectName . "\n";
        $studentData .= "Question Paper Count: " . $studentTableRow['student_count'] . "\n";
        $studentData .= "------------------------------------\n";
        
        // Fetch student roll numbers
        $studentRollQuery = mysqli_query($connection, "SELECT enrollno FROM students WHERE class_id='$class_id' AND class_det='" . $studentTableRow['class_det'] . "'");
        $studentData .= "Student Roll Numbers:\n";
        while ($rollRow = mysqli_fetch_array($studentRollQuery)) {
            $studentData .= "- " . $rollRow['enrollno'] . "\n";
        }
        $studentData .= "------------------------------------\n";
    }

    // Convert to UTF-8 encoding
    $studentData = mb_convert_encoding($studentData, 'UTF-8', 'auto');

    // Save QR Code
    $path = 'upload/';
    $filename = "QR_Class_$class_id.png";
    $file = $path . $filename;

    QRcode::png($studentData, $file, 'L', 10, 10);

    // Display QR Code
    echo "<h3>QR Code Generated Successfully</h3>";
    echo "<img src='$file' alt='QR Code'><br>";
    echo "<a href='$file' download>Download QR Code</a>";

    unset($_SESSION['class_id']); // Clear session after use
}
?>


          
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td align="center" class="subhead">&nbsp;</td>
    </tr>
  </table>
</form>
            </div>

	</main>

	<div class="ttr-overlay"></div>

			
           

<!-- External JavaScripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='assets/vendors/scroll/scrollbar.min.js'></script>
<script src="assets/js/functions.js"></script>
<script src="assets/vendors/chart/chart.min.js"></script>
<script src="assets/js/admin.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
<script>
// Pricing add
	function newMenuItem() {
		var newElem = $('tr.list-item').first().clone();
		newElem.find('input').val('');
		newElem.appendTo('table#item-add');
	}
	if ($("table#item-add").is('*')) {
		$('.add-item').on('click', function (e) {
			e.preventDefault();
			newMenuItem();
		});
		$(document).on("click", "#item-add .delete", function (e) {
			e.preventDefault();
			$(this).parent().parent().parent().parent().remove();
		});
	}
</script>
</body>

<!-- Mirrored from educhamp.themetrades.com/demo/admin/add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 13:09:05 GMT -->
</html>