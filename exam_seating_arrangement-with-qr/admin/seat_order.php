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
		if(isset($btnSubmit))
		{
		$q1=mysql_query("select * from students where class_id='$class_id' order by id");
			while($r1=mysql_fetch_array($q1))
			{
			$enr=$r1['enrollno'];	
			$r=$r1['row_id'];	
			$row[$r][]=$enr;
				
			}
		?>
        <table width="725" height="293" border="0" cellpadding="5" cellspacing="3">
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][0]; ?></th>
            <td class="bor"><?php echo $row[2][0]; ?></td>
            <td class="bor"><?php echo $row[3][0]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][0]; ?></td>
            <td class="bor"><?php echo $row[5][0]; ?></td>
            <td class="bor"><?php echo $row[6][0]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][0]; ?></td>
            <td class="bor"><?php echo $row[8][0]; ?></td>
            <td class="bor"><?php echo $row[9][0]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][0]; ?></td>
            <td class="bor"><?php echo $row[11][0]; ?></td>
            <td class="bor"><?php echo $row[12][0]; ?></td>
          </tr>
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][1]; ?></th>
            <td class="bor"><?php echo $row[2][1]; ?></td>
            <td class="bor"><?php echo $row[3][1]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][1]; ?></td>
            <td class="bor"><?php echo $row[5][1]; ?></td>
            <td class="bor"><?php echo $row[6][1]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][1]; ?></td>
            <td class="bor"><?php echo $row[8][1]; ?></td>
            <td class="bor"><?php echo $row[9][1]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][1]; ?></td>
            <td class="bor"><?php echo $row[11][1]; ?></td>
            <td class="bor"><?php echo $row[12][1]; ?></td>
          </tr>
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][2]; ?></th>
            <td class="bor"><?php echo $row[2][2]; ?></td>
            <td class="bor"><?php echo $row[3][2]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][2]; ?></td>
            <td class="bor"><?php echo $row[5][2]; ?></td>
            <td class="bor"><?php echo $row[6][2]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][2]; ?></td>
            <td class="bor"><?php echo $row[8][2]; ?></td>
            <td class="bor"><?php echo $row[9][2]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][2]; ?></td>
            <td class="bor"><?php echo $row[11][2]; ?></td>
            <td class="bor"><?php echo $row[12][2]; ?></td>
          </tr>
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][3]; ?></th>
            <td class="bor"><?php echo $row[2][3]; ?></td>
            <td class="bor"><?php echo $row[3][3]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][3]; ?></td>
            <td class="bor"><?php echo $row[5][3]; ?></td>
            <td class="bor"><?php echo $row[6][3]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][3]; ?></td>
            <td class="bor"><?php echo $row[8][3]; ?></td>
            <td class="bor"><?php echo $row[9][3]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][3]; ?></td>
            <td class="bor"><?php echo $row[11][3]; ?></td>
            <td class="bor"><?php echo $row[12][3]; ?></td>
          </tr>
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][4]; ?></th>
            <td class="bor"><?php echo $row[2][4]; ?></td>
            <td class="bor"><?php echo $row[3][4]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][4]; ?></td>
            <td class="bor"><?php echo $row[5][4]; ?></td>
            <td class="bor"><?php echo $row[6][4]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][4]; ?></td>
            <td class="bor"><?php echo $row[8][4]; ?></td>
            <td class="bor"><?php echo $row[9][4]; ?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][4]; ?></td>
            <td class="bor"><?php echo $row[11][4]; ?></td>
            <td class="bor"><?php echo $row[12][4]; ?></td>
          </tr>
        </table>
		
        <p>&nbsp;</p>
		<p>&nbsp;</p>
		<?php
		//if(isset($class_id))
		//{
		$ii=0;
			$q6=mysql_query("select * from exam_date where status=1 order by id ");
			while($r6=mysql_fetch_array($q6))
			{
				if($r6['date_schedule']==$edate)
				{
				break;
				}
			$ii++;
			}
		
		/////////////////////////////////////////////////
		$qs=mysql_query("select * from staff where status=0");
while($st_row=mysql_fetch_array($qs))
{
$stf[]=$st_row['id'];

}
			  $rs=mysql_query("select distinct(class_id) from students where class_id='$class_id'");
			  $num=mysql_num_rows($rs);
			  $i=0;
			  $j=$ii;
			  $n=$ii-1;
			  while($rw=mysql_fetch_array($rs))
			  {
			$i++;
			  ?>
              <?php if($stf[$j]!="")
				{
				//echo $stf[$j];
				}
				else
				{
				//echo $stf[$n];
				}  
				if($stf[$j]!="")
				{
					if($section=="1")
					{
				$q1=mysql_query("select * from staff where id=".$stf[$j]."");
				$q2=mysql_fetch_array($q1);
				echo "Staff: ".$q2['name']."<br>";
					}
					else
					{
					$q1=mysql_query("select * from staff where id=".$stf[$j+1]."");
					$q2=mysql_fetch_array($q1);
					echo "Staff: ".$q2['name']."<br>";
					}
				}
				else
				{
					if($section=="1")
					{
					
				$q1=mysql_query("select * from staff where id=".$stf[$n]."");
				$q2=mysql_fetch_array($q1);
				echo "Staff: ".$q2['name']."<br>";
					}
					else
					{
				$q1=mysql_query("select * from staff where id=".$stf[$n-1]."");
				$q2=mysql_fetch_array($q1);
				echo "Staff: ".$q2['name']."<br>";	
					}
				}
				 ?>
			
              
              <?php
			  $j++;
			  $n--;
			  }
			 
		
		//////////////////////////////////////////////
		?>
		 <table width="488" border="1">
          <tr>
            <th width="95" scope="row">Class</th>
            <th width="173">No. of Students </th>
            <th width="93">Gender</th>
            <th width="99">Subject</th>
            <th width="99">Question Paper Count</th>
          </tr>
		<?php
		$q4=mysql_query("select class_det,count(class_det),gender,sem,deptid from students where class_id=$class_id group by class_det");
		while($r4=mysql_fetch_array($q4))
		{
			$asem=$r4['sem'];
			$dept=$r4['deptid'];
			
			$q5=mysql_query("select * from subject where deptid='$dept' && sem='$asem' limit $ii,1");
			$r5=mysql_fetch_array($q5);
			$sub=$r5['subject'];
		//echo "Class: ".$r4['class_det']." , No. of Students: ".$r4['count(class_det)'].", Gender: ".$r4['gender'].", Subject: ".$sub." <br>";
		?>
		<tr>
            <th scope="row"><?php echo $r4['class_det']; ?></th>
            <td><?php echo $r4['count(class_det)']; ?></td>
            <td><?php echo $r4['gender']; ?></td>
            <td><?php echo $sub; ?></td>
            <td><?php echo $r4['count(class_det)']; ?></td>
          </tr>
        
		<?php
		}
		//}
		?>
		</table>
		<?php
		}//btn
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