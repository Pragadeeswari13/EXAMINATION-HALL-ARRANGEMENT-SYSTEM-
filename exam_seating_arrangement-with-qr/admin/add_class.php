<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_POST);
$msg="";
if(isset($_POST['s1']))
{
$max_qry = mysql_query("select max(id) maxid from class_room");
		$max_row = mysql_fetch_array($max_qry);
		$id=$max_row['maxid']+1;
$qry="insert into class_room(id,rooms,seats) values('$id','$rooms','$seats')";
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

if(isset($_POST['d1']))
{
$c=$_POST['c'];
	foreach($c as $cc)
	{
	mysql_query("update class_room set status=0 where id=".$cc."");	
	}
header("location:add_class.php");	
}
if(isset($_POST['d2']))
{
$c=$_POST['c'];
	foreach($c as $cc)
	{
	mysql_query("update class_room set status=1 where id=".$cc."");	
	}
}
?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Class Room</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Add Class Room</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add Class Room</h4>
                            <br>
                            <span style="color:green"><?php echo $msg;?></span>
						</div>
                      	<div class="widget-inner">
							<form action="" method="post" class="edit-profile m-b30">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Class Room info</h3>
										</div>
									</div>
          
									<div class="form-group col-6">
										<label class="col-form-label">Class Room</label>
										<div>
											<input class="form-control" name="rooms" type="text" value="">
										</div>
									</div>

                                    <div class="form-group col-6">
										<label class="col-form-label">No. of Seats Available</label>
										<div>
											<input class="form-control" name="seats" type="text" value="">
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
                    <div class="container">
                    <h4>Class Rooms</h4>
            <form action="" method="post">
                <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th>Select</th>
                    <th>Sno</th>
                    <th>Hall Name </th>
                    <th>No. of Seats </th>
                    <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $i=0;
                     $hqry=mysql_query("select * from class_room");
                     while($hrow=mysql_fetch_array($hqry))
                     { $i++;
                     ?>
                    <tr>
                    <td><input type="checkbox" name="c[]" value="<?php echo $hrow['id']; ?>"></td>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $hrow['rooms']; ?></td>
                    <td><?php echo $hrow['seats']; ?></td>
                    <td><?php echo ($hrow['status'] == 1) ? "Disable" : "Enable"; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                <div>
                <input type="submit" class="btn btn-primary" name="d1" value="Enable">
                <input type="submit" class="btn btn-danger" name="d2" value="Disable">
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