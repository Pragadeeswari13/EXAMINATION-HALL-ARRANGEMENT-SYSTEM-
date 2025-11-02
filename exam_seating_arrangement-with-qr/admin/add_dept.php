<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_REQUEST);
$msg="";
if(isset($_POST['s1']))
{
$max_qry = mysql_query("select max(id) maxid from departments");
		$max_row = mysql_fetch_array($max_qry);
		$id=$max_row['maxid']+1;
$qry="insert into departments(id,dept,dept_code) values('$id','$dept','$dept_code')";
$exe=mysql_query($qry);
	if($exe)
	{
	$msg="Added Successfully...";
	}
	else
	{
	$msg="Could not be added!";
	}
}

////////////
if($act=="del")
{
mysql_query("delete from departments where id=$did");
$dele="Department Removed";
?>
<script language="javascript">
window.location.href="add_dept.php";
</script>
<?php
}
?>

<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Department</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Add Department</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add Department</h4>
                            <br>
                            <span style="color:green"><?php echo $msg;?></span>
						</div>
						<div class="widget-inner">
							<form action="" method="post" class="edit-profile m-b30">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Department info</h3>
										</div>
									</div>
          
									<div class="form-group col-6">
										<label class="col-form-label">Department Code</label>
										<div>
											<input class="form-control" name="dept_code" type="text" value="">
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col-form-label">Department Name</label>
										<div>
											<input class="form-control" name="dept" type="text" value="">
										</div>
									</div>

									<div class="col-12">
										<button type="submit" name="s1" class="btn">Add</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
        <div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Departments</h4>
                            <br>
                            <span style="color:red"><?php echo $dele;?></span>
						</div>
                        <?php
		$qry1=mysql_query("select * from departments");
		$num1=mysql_num_rows($qry1);
		if($num1>0)
		{
		?>
						<div class="widget-inner">
							<div class="orders-list">
								<ul>
                                <?php 
		  while($row1=mysql_fetch_array($qry1))
		  { 
		  ?>
                               
									<li>
										<span class="orders-title">
											<a href="#" class="orders-title-name"><?php echo $row1['dept']; ?></a>
											<span class="orders-info">Dept Code -- <?php echo $row1['dept_code']; ?></span>
										</span>
										<span class="orders-btn">
											<a href="add_dept.php?act=del&did=<?php echo $row1['id']; ?>" class="btn button-sm red">Delete</a>
										</span>
									</li>
                                    <?php
		  }
		  ?>

								</ul>
							</div>
						</div>
                        <?php
		}
		?>
					</div>
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