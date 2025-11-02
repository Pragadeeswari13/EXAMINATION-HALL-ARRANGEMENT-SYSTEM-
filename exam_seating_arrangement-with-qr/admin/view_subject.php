<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_POST);
$msg="";
if(isset($btnSubmit))
{
$view_qry1=mysql_query("select * from subject where deptid='$deptid' && sem='$sem'");
}
else
{
$view_qry1=mysql_query("select * from subject");
}
$view_qry2=mysql_query("select * from students");

if($_REQUEST['act']=="del")
{
$c=$_REQUEST['id'];
	mysql_query("delete from subject where id=".$c."");	
header("location:view_subject.php");	
}
?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Subject</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Subject</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Subject</h4>
                            <br>
                            <span style="color:green"><?php echo $msg;?></span>
						</div>
                      	<div class="widget-inner">
							<form action="" method="post" class="edit-profile m-b30">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Subject Info</h3>
										</div>
									</div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Department</label>
                                        <div>
                                            <select name="deptid" id="" class="form-control" style="color: black;">
                                            <option value="">-Select-</option>
                                            <?php
                                            $ddqry=mysql_query("select * from departments");
                                            while($ddrow=mysql_fetch_array($ddqry))
                                            {
                                            ?>
                                            <option value="<?php echo $ddrow['id']; ?>" <?php if($deptid==$ddrow['id']) echo "selected"; ?>><?php echo $ddrow['dept']; ?></option>
                                            <?php
                                            }
                                            ?>
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
        <div class="container">
                    <h4>Subjects</h4>
            <form action="" method="post">
                <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th>Sno</th>
                    <th>Dept ID</th>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0;
                while($row1=mysql_fetch_array($view_qry1))
                { $i++;
                ?>
                    <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row1['deptid']; ?></td>
                    <td><?php echo $row1['subid']; ?></td>
                    <td><?php echo $row1['subject']; ?></td>
                    <td><a href="view_subject.php?act=del&id=<?php echo $row1['id']; ?>" class="btn button-sm red">Delete</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                <div>
               
                </div>
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