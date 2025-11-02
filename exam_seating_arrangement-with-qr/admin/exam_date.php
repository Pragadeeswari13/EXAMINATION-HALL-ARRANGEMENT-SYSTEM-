<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_POST);
$msg="";

?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Exam Schedule</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Add Exam Schedule</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Add Exam Schedule</h4>
                            <br>
                            <span style="color:green"><?php echo $msg;?></span>
						</div>
                      	<div class="widget-inner">
							<form action="" method="post" class="edit-profile m-b30">
								<div class="row">
									<div class="col-12">
										<div class="ml-auto">
											<h3>Exam Schedule</h3>
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
										<label class="col-form-label">Type of Exam</label>
										<div>
											<input class="form-control" name="details" type="text" value="<?php echo $_POST['details']; ?>">
										</div>
									</div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Start Date </label>
                                        <div>
                                            <select name="day" id="" class="form-control" style="color: black;">
                                            <option value="0">-days-</option>
                                            <?php for($i=1;$i<=31;$i++)
                                                { 
                                                    if($i<=9) 
                                                    { 
                                                    $ii = '0'.$i; 
                                                    } 
                                                    else 
                                                    { 
                                                    $ii = $i; 
                                                    }
                                                ?>
                                                        <option <?php if($day==$ii) echo "selected"; ?>><?php echo $ii; ?></option>
                                                        <?php
                                                } 
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Month</label>
                                        <div>
                                            <select name="month" id="" class="form-control" style="color: black;">
                                            <option value="0">-month-</option>
                                            <option value="01" <?php if($month=="01") echo "selected"?>>january</option>
                                            <option value="02"<?php if($month=="02") echo "selected"?>>february</option>
                                            <option value="03"<?php if($month=="03") echo "selected"?>>march</option>
                                            <option value="04"<?php if($month=="04") echo "selected"?>>april</option>
                                            <option value="05"<?php if($month=="05") echo "selected"?>>may</option>
                                            <option value="06"<?php if($month=="06") echo "selected"?>>june</option>
                                            <option value="07"<?php if($month=="07") echo "selected"?>>july</option>
                                            <option value="08"<?php if($month=="08") echo "selected"?>>august</option>
                                            <option value="09"<?php if($month=="09") echo "selected"?>>september</option>
                                            <option value="10"<?php if($month=="10") echo "selected"?>>october</option>
                                            <option value="11"<?php if($month=="11") echo "selected"?>>november</option>
                                            <option value="12"<?php if($month=="12") echo "selected"?>>december</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Year</label>
                                        <div>
                                            <select name="year" id="" class="form-control" style="color: black;">
                                            <option value="0">-year-</option>
                                                        <?php
                                                    $y = date('Y');
                                                    for($k=$y;$k<=$y+1;$k++)
                                                    {
                                                ?>
                                                        <option <?php if($year==$k) echo "selected"; ?>><?php echo $k; ?></option>
                                                        <?php
                                            } ?>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">End Date</label>
                                        <div>
                                            <select name="day2" id="" class="form-control" style="color: black;">
                                            <option value="0">-days-</option>
                                                    <?php for($i=1;$i<=31;$i++)
                                            { 
                                                if($i<=9) 
                                                { 
                                                $ii = '0'.$i; 
                                                } 
                                                else 
                                                { 
                                                $ii = $i; 
                                                }
                                            ?>
                                                    <option <?php if($day2==$ii) echo "selected"; ?>><?php echo $ii; ?></option>
                                                    <?php
                                            } 
                                            ?>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Month</label>
                                        <div>
                                            <select name="month2" id="" class="form-control" style="color: black;">
                                            <option value="0">-month-</option>
                                            <option value="01" <?php if($month2=="01") echo "selected"?>>january</option>
                                            <option value="02"<?php if($month2=="02") echo "selected"?>>february</option>
                                            <option value="03"<?php if($month2=="03") echo "selected"?>>march</option>
                                            <option value="04"<?php if($month2=="04") echo "selected"?>>april</option>
                                            <option value="05"<?php if($month2=="05") echo "selected"?>>may</option>
                                            <option value="06"<?php if($month2=="06") echo "selected"?>>june</option>
                                            <option value="07"<?php if($month2=="07") echo "selected"?>>july</option>
                                            <option value="08"<?php if($month2=="08") echo "selected"?>>august</option>
                                            <option value="09"<?php if($month2=="09") echo "selected"?>>september</option>
                                            <option value="10"<?php if($month2=="10") echo "selected"?>>october</option>
                                            <option value="11"<?php if($month2=="11") echo "selected"?>>november</option>
                                            <option value="12"<?php if($month2=="12") echo "selected"?>>december</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Year</label>
                                        <div>
                                            <select name="year2" id="" class="form-control" style="color: black;">
                                            <option value="0">-year-</option>
                                                        <?php
                                                    $y = date('Y');
                                                    for($k=$y;$k<=$y+1;$k++)
                                                    {
                                                ?>
                                                        <option <?php if($year2==$k) echo "selected"; ?>><?php echo $k; ?></option>
                                                        <?php
                                            } ?>
                                            
                                            </select>
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
	</main>

	<div class="ttr-overlay"></div>
        <?php
	  if(isset($_POST['s1']))
	  {
		  
		  $date1=$day."-".$month."-".$year;
		  $date2=$day2."-".$month2."-".$year2;
		  $get_date2="00-00-0000";

		if($deptid!=0 && $day!=0 && $month!=0 && $year!=0 && $day2!=0 && $month2!=0 && $year2!=0)	
		{
		$i=0;
		
		 $smax_qry = mysql_query("select max(sid) maxid from exam_date");
		  $smax_row = mysql_fetch_array($smax_qry);
		 $sid=$smax_row['maxid']+1;
		  		 
		  while($get_date2!=$date2)
		  {
		  $get_date1=mktime(0,0,0,$month,$day+$i,$year);
		  
		  $get_date2=date("d-m-Y",$get_date1);
		  
		  //echo $get_date2."<br>";
		  
		  $max_qry = mysql_query("select max(id) maxid from exam_date");
		  $max_row = mysql_fetch_array($max_qry);
		  $id=$max_row['maxid']+1;
		  	  
		  //echo "insert into exam_date(id,sid,dept,details,date_schedule,from_date,to_date) values($id,$sid,'$deptid','$details','$get_date2','$date1','$date2')";
		  $ins=mysql_query("insert into exam_date(id,sid,dept,details,date_schedule,from_date,to_date) values($id,$sid,'$deptid','$details','$get_date2','$date1','$date2')");
		   
		   
		   $ins2=mysql_query("insert into tmp_date(id,sid,deptid,date_schedule) values($id,$sid,'$deptid','$get_date2')");
		  
		  $sid2=$sid-1;
		  $del=mysql_query("delete from tmp_date where sid<=$sid2 && deptid='$deptid'");
		  
		  $i++;
		  }//while
		  //header("location:exam_date_details.php?sid=".$sid);
		  ?>
		  <script language="javascript">
		  window.location.href="exam_date_details.php?sid=<?php echo $sid; ?>";
		  </script>
		  <?php
		}
	
}//btn
	  ?>

           

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