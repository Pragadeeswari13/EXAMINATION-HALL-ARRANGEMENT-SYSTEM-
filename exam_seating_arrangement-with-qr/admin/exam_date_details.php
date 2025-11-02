<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_POST);
$msg="";

$sid=$_REQUEST['sid'];

///////////////////////////////Hall and Seat Arrangemnts/////////////////////////////////////////////////////
if(isset($btnHall))
{
mysql_query("update exam_date set status=1 where sid=$sid");
mysql_query("update exam_date set status=0 where sid!=$sid");

$q1=mysql_query("select class_det,count(class_det) from students group by class_det");
	while($r1=mysql_fetch_array($q1))
	{	
	$cl[]=$r1['class_det'];	
	$cnt[]=$r1['count(class_det)'];
	}
$q11=mysql_query("select * from class_room order by id");	
	while($r11=mysql_fetch_array($q11))
	{
	$class_id[]=$r11['id'];
	}	
	//////////Male class//////////////
	$q22=mysql_query("select * from students where gender='Female' && (class_det='E21A' || class_det='E21B')");
	$n22=mysql_num_rows($q22);
		$fc1=ceil($n22/20);
		
	$q33=mysql_query("select * from students where gender='Female' && (class_det='E31A' || class_det='E31B')");
	$n33=mysql_num_rows($q33);
		$fc2=ceil($n33/20);
		
	$q44=mysql_query("select * from students where gender='Female' && (class_det='E41A' || class_det='E41B')");
	$n44=mysql_num_rows($q44);
		$fc3=ceil($n44/20);
			$qc1=mysql_query("select * from class_room where id>$fc1");	
			while($rc1=mysql_fetch_array($qc1))
			{
			$cid1[]=$rc1['id'];
			}
			//print_r($cid1);
			$qc2=mysql_query("select * from class_room where id>$fc2");	
			while($rc2=mysql_fetch_array($qc2))
			{
			$cid2[]=$rc2['id'];
			}
			$qc3=mysql_query("select * from class_room where id>$fc3");	
			while($rc3=mysql_fetch_array($qc3))
			{
			$cid3[]=$rc3['id'];
			}
	//////////////////////////////////////////		
	for($i=0;$i<count($cl);$i++)
	{
		if($i<=1)
		{
		$a=0;
		$r=0;
		$r1=20;
		$c=5;
		$col=1;
		
		$q2=mysql_query("select * from students where (class_det='".$cl[0]."' || class_det='".$cl[1]."') order by id");
			while($r2=mysql_fetch_array($q2))
			{
			$r++;
			
				if($r==$r1)
				{
				$a++;
				$r1+=20;
					
					$col=-2;	
						
				}
				if($r==$c)
				{
					
					$col+=3;
					
					
				$c+=5;
				}
			
		mysql_query("update students set class_id='".$class_id[$a]."',row_id='$col' where id=".$r2['id']."");					
			}
			
		}//if
		//////////////////////////////////////////
		if($i>=2 && $i<=3)
		{
		$a=0;
		$r=0;
		$r1=20;
		$c=5;
		$col=2;
		$q2=mysql_query("select * from students where (class_det='".$cl[2]."'|| class_det='".$cl[3]."') order by id");
			while($r2=mysql_fetch_array($q2))
			{
			$r++;
			
				if($r==$r1)
				{
				$a++;
				$r1+=20;
					
					$col=-1;	
						
				}
				if($r==$c)
				{
					
					$col+=3;
					
					
				$c+=5;
				}
			//echo "c".$a." ".$col."<br>";	
		mysql_query("update students set class_id='".$class_id[$a]."',row_id='$col' where id=".$r2['id']."");					
			}
			
		}//if
		////////////////////////////////////////////////////////////////////////
		if($i>=4 && $i<=5)
		{
		$a=0;
		$r=0;
		$r1=20;
		$c=5;
		$col=3;
		$q2=mysql_query("select * from students where (class_det='".$cl[4]."'|| class_det='".$cl[5]."') order by id");
			while($r2=mysql_fetch_array($q2))
			{
			$r++;
			
				if($r==$r1)
				{
				$a++;
				$r1+=20;
					
					$col=0;	
						
				}
				if($r==$c)
				{
					
					$col+=3;
					
					
				$c+=5;
				}
			//echo "c".$a." ".$col."<br>";	
		mysql_query("update students set class_id='".$class_id[$a]."',row_id='$col' where id=".$r2['id']."");					
			}
			
		}//if
		////////////////////////////////////////////////////////////////////////
		
		////////////////////////////////////////////////////////////////////////
		if($i<=1)
		{
		$a=0;
		$r=0;
		$r1=20;
		$c=5;
		$col=1;
		//$q22=mysql_query("select * from students where gender='Female' && class_det='".$cl[$i]."'");
		//$n22=mysql_num_rows($q22);
		
		$q2=mysql_query("select * from students where (class_det='".$cl[0]."'|| class_det='".$cl[1]."') order by id");
			while($r2=mysql_fetch_array($q2))
			{
			$r++;
			
				if($r==$r1)
				{
				$a++;
				$r1+=20;
					
					$col=-2;	
						
				}
				if($r==$c)
				{
					
					$col+=3;
					
					
				$c+=5;
				}
		//echo "update students set class_id='".$cid1[$a]."',row_id='$col' where id=".$r2['id']."<br>";		
		mysql_query("update students set class_id='".$cid1[$a]."',row_id='$col' where id=".$r2['id']."");					
			}
			
		}//if
		//////////////////////////////////////////
		if($i>=2 && $i<=3)
		{
		$a=0;
		$r=0;
		$r1=20;
		$c=5;
		$col=2;
		$q2=mysql_query("select * from students where (class_det='".$cl[2]."'|| class_det='".$cl[3]."') order by id");
			while($r2=mysql_fetch_array($q2))
			{
			$r++;
			
				if($r==$r1)
				{
				$a++;
				$r1+=20;
					
					$col=-1;	
						
				}
				if($r==$c)
				{
					
					$col+=3;
					
					
				$c+=5;
				}
			//echo "c".$a." ".$col."<br>";	
		mysql_query("update students set class_id='".$cid2[$a]."',row_id='$col' where id=".$r2['id']."");					
			}
			
		}//if
		////////////////////////////////////////////////////////////////////////
		if($i>=4 && $i<=5)
		{
		$a=0;
		$r=0;
		$r1=20;
		$c=5;
		$col=3;
		$q2=mysql_query("select * from students where (class_det='".$cl[4]."'|| class_det='".$cl[5]."') order by id");
			while($r2=mysql_fetch_array($q2))
			{
			$r++;
			
				if($r==$r1)
				{
				$a++;
				$r1+=20;
					
					$col=0;	
						
				}
				if($r==$c)
				{
					
					$col+=3;
					
					
				$c+=5;
				}
			//echo "c".$a." ".$col."<br>";	
		mysql_query("update students set class_id='".$cid3[$a]."',row_id='$col' where id=".$r2['id']."");					
			}
			
		}//if
		/////////////////////////////////////////////////////////////////////
		
		
	}//for
	?>
	<script language="javascript">
	alert("Exam Schedule Added");
	window.location.href="seat_order.php";
	</script>
	<?php
}//btn

/////////////////////////////////////////////////////////////////




$dqry=mysql_query("select * from exam_date group by sid");
if(isset($_POST['skip']))
{
$rm=$_POST['rm_date'];
	for($j=0;$j<count($rm);$j++)
	{
	mysql_query("delete from exam_date where id='".$rm[$j]."'");
	mysql_query("delete from tmp_date where id='".$rm[$j]."'");
	header("location:exam_date_details.php?sid=".$sid);
	}
}

?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Exam Date Schedule</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Exam Date Schedule</li>
				</ul>
			</div>	
            
            <div class="container">
                    <h4>Exam Date Schedule</h4>
            <form action="" method="post">
                <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th>Sno</th>
                    <th>Department</th>
                    <th>Type of Exam</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=0;
                    while($drow=mysql_fetch_array($dqry))
                    { $i++;
                    ?>
                    <tr>
                    <td><?php echo $i; ?></td>
                <td><?php $dpqry=mysql_query("select * from departments where id=".$drow['dept']."");
				$dprow=mysql_fetch_array($dpqry);
				echo '<a href="exam_date_details.php?sid='.$drow['sid'].'">'.$dprow['dept'].'</a>'; ?></td>
                <td><?php echo $drow['details']; ?></td>
                <td><?php echo $drow['from_date']; ?></td>
                <td><?php echo $drow['to_date']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                <div>
               
                </div>
            </div>
            <p><a href="view_date.php">View Exam Date</a></p></td>

            <div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Skip Date</h4>
                            <br>
                            <span style="color:red"><?php echo $dele;?></span>
						</div>
                        <?php if($_REQUEST['sid']) { ?>
						<div class="widget-inner">
							<div class="orders-list">
								<ul>
                                <?php
			  
			  $dqry2=mysql_query("select * from exam_date where sid=".$_REQUEST['sid']."");
		  while($drow2=mysql_fetch_array($dqry2))
		  {
		  ?>
                               
									<li>
										<span class="orders-title">
                                        <input type="checkbox" name="rm_date[]" value="<?php echo $drow2['id']; ?>">
											<span class="orders-info"><?php echo $drow2['date_schedule']; ?></span>
										</span>
										
									</li>
                                    <?php
		  }
		  ?>

								</ul>
							</div>
						</div>
                        <input type="submit" class="btn" name="skip" value="Skip Date">

                        <?php
                        
		}
		?>
					</div>
				</div>
                <input type="submit" class="btn" name="btnHall" value="Exam Schedule">

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