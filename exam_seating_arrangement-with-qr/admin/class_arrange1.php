<?php include("headlink1.php");?>
<?php include("sidebar1.php");?>
<?php
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);

    if (isset($deptid)) {
        $qry = mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' order by class_id ");
        $num = mysql_num_rows($qry);
    }

    if (isset($btnSubmit2)) {
        $q3 = mysql_query("select * from class_room where id='$class_id'");
        $r3 = mysql_fetch_array($q3);
        $seat = $r3['seats'];

        $q4 = mysql_query("select * from students where class_id='$class_id'");
        $n4 = mysql_num_rows($q4);

        $av = $seat - $n4;

        $q11 = mysql_query("select * from students where (id between $dno1 and $dno2)");
        $n11 = mysql_num_rows($q11);

        if ($n11 <= $av) {
            $q1 = mysql_query("select * from students where (id between $dno1 and $dno2)");
            while ($r1 = mysql_fetch_array($q1)) {
                mysql_query("update students set class_id='$class_id' where id=" . $r1['id']);
            }
            $msg = "Hall arranged successfully";
        } else {
            $msg = "$av seats only available!!";
        }
    }
}
?>

<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Seat Chart</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                <li>Generate Seat Chart</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4>Generate Seat Chart</h4>
                        <br>
                        <span style="color:green"><?php echo $msg; ?></span>
                    </div>
                    <div class="widget-inner">
                        <form action="" method="post" class="edit-profile m-b30">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3></h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Department</label>
                                    <div>
                                        <select name="deptid" id="" class="form-control" style="color: black;">
                                            <option value="">-Select-</option>
                                            <?php
                                            $ddqry = mysql_query("select * from departments");
                                            while ($ddrow = mysql_fetch_array($ddqry)) {
                                                ?>
                                                <option value="<?php echo $ddrow['id']; ?>" <?php if ($deptid == $ddrow['id']) echo "selected"; ?>><?php echo $ddrow['dept']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Level</label>
                                    <div>
                                        <select name="level" id="" class="form-control" style="color: black;">
                                            <option value="">-Level-</option>
                                            <option <?php if ($level == "UG") echo "selected"; ?>>UG</option>
                                            <option <?php if ($level == "PG") echo "selected"; ?>>PG</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Semester</label>
                                    <div>
                                        <select name="sem" id="" class="form-control" style="color: black;">
                                            <option value="0">-Select-</option>
                                            <option value="1" <?php if ($_POST['sem'] == "1") echo "selected"; ?>>Semester1</option>
                                            <option value="2"<?php if ($_POST['sem'] == "2") echo "selected"; ?>>Semester2</option>
                                            <option value="3"<?php if ($_POST['sem'] == "3") echo "selected"; ?>>Semester3</option>
                                            <option value="4"<?php if ($_POST['sem'] == "4") echo "selected"; ?>>Semester4</option>
                                            <option value="5"<?php if ($_POST['sem'] == "5") echo "selected"; ?>>Semester5</option>
                                            <option value="6"<?php if ($_POST['sem'] == "6") echo "selected"; ?>>Semester6</option>
                                            <option value="7"<?php if ($_POST['sem'] == "7") echo "selected"; ?>>Semester7</option>
                                            <option value="8"<?php if ($_POST['sem'] == "8") echo "selected"; ?>>Semester8</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="btnSubmit" class="btn">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="widget-inner">
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3></h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Start</label>
                                    <div>
                                        <select name="dno1" id="" class="form-control" style="color: black;">
                                            <?php
                                            $dnqry = mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' order by id");
                                            while ($dnrow = mysql_fetch_array($dnqry)) {
                                                ?>
                                                <option value="<?php echo $dnrow['id']; ?>" <?php if ($dno1 == $dnrow['id']) echo "selected"; ?>><?php echo $dnrow['enrollno']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">End</label>
                                    <div>
                                    <select name="dno2" id="" class="form-control" style="color: black;">

                                        <?php
                                        $dnqry2 = mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' order by id");
                                        while ($dnrow2 = mysql_fetch_array($dnqry2)) {
                                            ?>
                                            <option value="<?php echo $dnrow2['id']; ?>" <?php if ($dno2 == $dnrow2['id']) echo "selected"; ?>><?php echo $dnrow2['enrollno']; ?></option>
                                        <?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">class_id</label>
                                    <div>
                                        <select name="class_id" id="" class="form-control" style="color: black;">
                                            <option value="">-Select-</option>
                                            <?php
                                            $cq = mysql_query("select * from class_room");
                                            while ($cr = mysql_fetch_array($cq)) {
                                                $clqry = mysql_query("select * from class_room where id=" . $cr['id'] . "");
                                                $clrow = mysql_fetch_array($clqry);
                                                ?>
                                                <option value=<?php echo $cr['id']; ?> <?php if ($_REQUEST['class_id'] == $cr['id']) echo "selected"; ?>><?php echo $clrow['rooms']; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="btnSubmit2" class="btn">Generate</button>
                                    <button type="submit" name="btn3" class="btn">View</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($dno1)) {
            $qry = mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' && class_id='$class_id' ");
            if ($num != 0) {
        ?>
                <div class="container">
                    <h4>Hall Rooms</h4>
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>Class</th>
                                <th>Enrollno</th>
                                <th>Name </th>
                                <th>Hall</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $j = 0;
                            while ($row = mysql_fetch_array($qry)) {
                                $j++;

                            ?>
                                <tr>
                                    <td><?php echo $row['class_det'];  ?></td>
                                    <td><?php echo $row['enrollno']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php

                                        $clqry2 = mysql_query("select * from class_room where id=" . $row['class_id'] . "");
                                        $clrow2 = mysql_fetch_array($clqry2);
                                        echo $clrow2['rooms']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div>

                        <input type="submit" class="btn btn-primary" name="btn3" value="Send Mail">
                    </div>
                <?php
            }
        }
                ?>
        <?php

        if (isset($btn3)) {

            $qry2 = mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' && class_id='$class_id' ");
            while ($row2 = mysql_fetch_array($qry2)) {
                if ($row2['email'] != "") {
                    $q4 = mysql_query("select * from class_room where id='" . $row2['class_id'] . "'");
                    $r4 = mysql_fetch_array($q4);
                    $hall = $r4['rooms'];
                    $email = $row2['email'];
                    $mess = "Dear " . $row2['name'] . ", Enroll No.:" . $row2['enrollno'] . ", Exam Hall: " . $hall;
                    echo '<iframe src="http://iotcloud.co.in/testmail/testmail1.php?message=' . $mess . '&email=' . $email . '&subject=Exam Hall Information" frameborder="0" style="display:none"></iframe>';
                    echo '<iframe src="http://iotcloud.co.in/testsms/sms.php?sms=emr&name=student&mess=' . $mess . '&mobile=9894918800" width="10" height="10" ></iframe>';
                }
            }
            $mg = "Examination hall seat chart generated!.."

        ?>
            <script language="javascript">
                setTimeout(function() {
                    window.location.href = '';
                }, 5000);
                window.location.href = "";
            </script>
        <?php

        }
        ?>
        </div>
        </div>
        </form>

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