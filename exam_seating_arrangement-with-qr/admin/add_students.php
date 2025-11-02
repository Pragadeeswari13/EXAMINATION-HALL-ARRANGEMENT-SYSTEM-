<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_POST);
$msg="";


	if($deptid=="") { $msg1="Select the Department..."; }
	else if($level=="") { $msg1="Select the Level..."; }
	else
	{
		$rdate=date("d-m-Y");
		$mm=date("m");
		$yy=$year;
		$yy2=strlen($yy);
		if($yy2==1)
		{
		$yy3 = "0".$yy;
		}
		else
		{
		$yy3 = $yy;
		}
		$lev=substr($level,0,1);
		$deptqry=mysql_query("select * from departments where id='".$deptid."'");
		$dept_code=mysql_fetch_array($deptqry);
		//$dcode=	$dept_code['dept_code']; 
//		$iid=str_pad($id,4,0,STR_PAD_LEFT);
//		$enrollno=$yy3.$lev.$dcode;
		
		//$class_det = $cyear."-".$degree."(".$dcode.")"."-".$section;
	}

if(isset($store))
{
$student=$_POST['student'];
$dno=$_POST['dno'];

	for($x=0;$x<count($student);$x++)
	{
	$max_qry = mysql_query("select max(id) maxid from students");
		$max_row = mysql_fetch_array($max_qry);
		$id=$max_row['maxid']+1;
	

		$qry="insert into students(id,enrollno,class_det,name,gender,email,deptid,level,degree,sem,year,rdate) values('$id','$enrollno[$x]','$class_det','$student[$x]','$gender[$x]','$email[$x]','$deptid','$level','$degree','$sem','$cyear','$rdate')";
		
		$exe=mysql_query($qry);
	}
			if($exe)
			{
			$msg="Added Successfully...";
			}
			else
			{
			$msg="Could not be added!";
			}
	
}
?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Student</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Add Students</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add Students</h4>
                            <br>
                            <span style="color:green"><?php echo $msg;?></span>
						</div>
                      	<div class="widget-inner">
							<form action="" method="post" class="edit-profile m-b30">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Students Info</h3>
										</div>
									</div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Department</label>
                                        <div>
                                            <select name="deptid" id="" class="form-control" style="color: black;">
                                            <option value="">-Select-</option>
                                            <?php
                                            $dqry=mysql_query("select * from departments");
                                            while($drow=mysql_fetch_array($dqry))
                                            {
                                            ?>
                                            <option value="<?php echo $drow['id']; ?>" <?php if($drow['id']==$deptid) echo "selected"; ?>><?php echo $drow['dept']; ?></option>
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
                                            <option <?php if($level=="UG") echo "selected"; ?>>UG</option>
                                            <option <?php if($level=="PG") echo "selected"; ?>>PG</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Degree</label>
                                        <div>
                                            <select name="degree" id="" class="form-control" style="color: black;">
                                            <option value="">--Degree--</option>
                                            <option <?php if($degree=="BE") echo "selected"; ?>>BE</option>
                                            <option <?php if($degree=="B.Tech") echo "selected"; ?>>B.Tech</option>
                                            <option <?php if($degree=="ME") echo "selected"; ?>>ME</option>
                                            <option <?php if($degree=="M.Tech") echo "selected"; ?>>M.Tech</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Section</label>
                                        <div>
                                            <select name="section" id="" class="form-control" style="color: black;">
                                            <option value="">--Section--</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Semester</label>
                                        <div>
                                            <select name="sem" id="" class="form-control" style="color: black;">
                                            <option value="0">-Select-</option>
                                            <option value="1" <?php if($_POST['sem']=="1") echo "selected"; ?>>Semester1</option>
                                            <option value="2"<?php if($_POST['sem']=="2") echo "selected"; ?>>Semester2</option>
                                            <option value="3"<?php if($_POST['sem']=="3") echo "selected"; ?>>Semester3</option>
                                            <option value="4"<?php if($_POST['sem']=="4") echo "selected"; ?>>Semester4</option>
                                            <option value="5"<?php if($_POST['sem']=="5") echo "selected"; ?>>Semester5</option>
                                            <option value="6"<?php if($_POST['sem']=="6") echo "selected"; ?>>Semester6</option>
                                            <option value="7"<?php if($_POST['sem']=="7") echo "selected"; ?>>Semester7</option>
                                            <option value="8"<?php if($_POST['sem']=="8") echo "selected"; ?>>Semester8</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Year</label>
                                        <div>
                                            <select name="cyear" id="" class="form-control" style="color: black;">
                                            <option value="1" <?php if($cyear=="1") echo "selected"; ?>>Ist</option>
                                            <option value="2" <?php if($cyear=="2") echo "selected"; ?>>IInd</option>
                                            <option value="3" <?php if($cyear=="3") echo "selected"; ?>>IIIrd</option>			  
                                            <option value="4" <?php if($cyear=="4") echo "selected"; ?>>Final</option>		
                                                                            
                                            </select>
                                        </div>
                                    </div>
          
									<div class="form-group col-6">
										<label class="col-form-label">Class</label>
										<div>
											<input class="form-control" name="class_det" type="text" value="<?php echo $class_det; ?>">
										</div>
									</div>

                                    <div class="form-group col-6">
										<label class="col-form-label">How many students in the class</label>
										<div>
											<input class="form-control" name="nst" type="text" size="10" value="<?php echo $_REQUEST['nst']; ?>">
										</div>
									</div>

									<div class="col-12">
										<button type="submit" name="btnSubmit" class="btn">Submit</button>
									</div>
								</div>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
        <?php
        if(isset($_POST['btnSubmit'])) {
    if(empty($_POST['deptid'])) {
        $msg = "Select the Department...";
    } elseif(empty($_POST['level'])) {
        $msg = "Select the Level...";
    } else {
        $deptid = $_POST['deptid'];
        $level = $_POST['level'];
        $degree = $_POST['degree'];
        $cyear = $_POST['cyear'];
        $class_det = $_POST['class_det'];
        $nst = $_POST['nst'];
        echo '<div class="container">';
        echo '<h4>Student Information</h4>';
        echo '<form action="" method="post">';
        echo '<table class="table">';
        echo '<thead class="thead-light">';
        echo '<tr>';
        echo '<th>Sno</th>';
        echo '<th>Student Name</th>';
        echo '<th>Rollno</th>';
        echo '<th>Gender</th>';
        echo '<th>Email</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        for($n = 1; $n <= $nst; $n++) {
            echo '<tr>';
            echo '<td>' . $n . '</td>';
            echo '<td><input type="text" name="student[]"></td>';
            echo '<td><input name="enrollno[]" type="text" size="10"></td>';
            echo '<td>';
            echo '<select name="gender[]">';
            echo '<option value="Male">Male</option>';
            echo '<option value="Female">Female</option>';
            echo '</select>';
            echo '</td>';
            echo '<td><input name="email[]" type="text"></td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '<div>';
        echo '<input type="submit" class="btn btn-primary" name="store" value="Store">';
        echo '</div>';
        echo '</form>';
        echo '</div>';
    }
}
?>
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