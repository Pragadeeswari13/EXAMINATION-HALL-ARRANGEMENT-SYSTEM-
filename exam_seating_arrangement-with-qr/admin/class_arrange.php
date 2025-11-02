<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_POST);
$msg="";
if(isset($deptid))
{
$qry = mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' order by class_id ");
$num = mysql_num_rows($qry);

}
if(isset($btnSubmit2))
{
$q3=mysql_query("select * from class_room where id='$class_id'");
$r3=mysql_fetch_array($q3);
$seat=$r3['seats'];		

$q4=mysql_query("select * from students where id='$class_id'");
$n4=mysql_num_rows($q4);
$r4=mysql_fetch_array($q4);
		
		$q44=mysql_query("select * from students where id='$class_id' group by class_id");
		$n44=mysql_num_rows($q44);
		if($n44>0)
		{
			
		}

$av=$seat-$n4;

$q11=mysql_query("select * from students where (id between $dno1 and $dno2)");
$n11=mysql_num_rows($q11);



	if($n11<=$av)
	{


$q1=mysql_query("select * from students where (id between $dno1 and $dno2)");
	while($r1=mysql_fetch_array($q1))
	{
		
	//echo "<br>update students set class_id='$class_id' where dno=$i";
	mysql_query("update students set class_id='$class_id' where id=".$r1['id']."");
					
	}
	
	?>	
	<script language="javascript">
	alert("Hall arranged successfully");
	</script>
	<?php
	
	}
	else
	{
	?>	
	<script language="javascript">
	alert("<?php echo $av; ?> seats only available!!");
	</script>
	<?php
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
                    <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
    <tr>
     
    </tr>
    <tr>
	
    </tr>
    <tr>
      <td align="center"><p><?php echo $mg;?>&nbsp;</p>
        <p><strong>Generate Seat Chart </strong></p>
        <p>
          <select name="deptid">
            <option value="">-Department-</option>
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
&nbsp;&nbsp;
<select name="level">
  <option value="">-Level-</option>
  <option <?php if($level=="UG") echo "selected"; ?>>UG</option>
  <option <?php if($level=="PG") echo "selected"; ?>>PG</option>
</select>
&nbsp;&nbsp;
<select name="sem">
  <option value="1" <?php if($sem=="1") echo "selected"; ?>>Sem1</option>
  <option value="2" <?php if($sem=="2") echo "selected"; ?>>Sem2</option>
  <option value="3" <?php if($sem=="3") echo "selected"; ?>>Sem3</option>
  <option value="4" <?php if($sem=="4") echo "selected"; ?>>Sem4</option>
  <option value="5" <?php if($sem=="5") echo "selected"; ?>>Sem5</option>
  <option value="6" <?php if($sem=="6") echo "selected"; ?>>Sem6</option>
  <option value="7" <?php if($sem=="7") echo "selected"; ?>>Sem7</option>
  <option value="8" <?php if($sem=="8") echo "selected"; ?>>Sem8</option>
</select>

&nbsp;
<br>
<input type="Submit" name="btnSubmit" class="btn" value="Submit">
</p>
        <p>&nbsp;</p>
        <p>Start
	
          <select name="dno1">
		  <?php
		  $dnqry=mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' order by id");
		  while($dnrow=mysql_fetch_array($dnqry))
		  {
		  ?>
		  <option value="<?php echo $dnrow['id']; ?>" <?php if($dno1==$dnrow['id']) echo "selected"; ?>><?php echo $dnrow['enrollno']; ?></option>
		  <?php
		  }
		  ?>
          </select> End
          <select name="dno2">
		   <?php
		  $dnqry2=mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' order by id");
		  while($dnrow2=mysql_fetch_array($dnqry2))
		  {
		  ?>
		  <option value="<?php echo $dnrow2['id']; ?>" <?php if($dno2==$dnrow2['id']) echo "selected"; ?>><?php echo $dnrow2['enrollno']; ?></option>
		  <?php
		  }
		  ?>
          </select>
          <p>Hall</p>
          <select name="class_id">
            <option value="">-Select-</option>
            <?php
			  $cq=mysql_query("select * from class_room");
			  while($cr=mysql_fetch_array($cq))
			  {
			  $clqry=mysql_query("select * from class_room where id=".$cr['id']."");
			  $clrow=mysql_fetch_array($clqry);
			  ?>
            <option value=<?php echo $cr['id']; ?> <?php if($_REQUEST['class_id']==$cr['id']) echo "selected"; ?>><?php echo $clrow['rooms']; ?></option>
            <?php
			  }
			  ?>
          </select>
          <br>
          <br>
          <input type="submit" name="btnSubmit2" class="btn" value="Generate">
          <input type="submit" name="btn3" class="btn" value="View">
        </p>
        <?php
		if(isset($dno1))
		{
		$qry = mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' && class_id='$class_id' ");
		if($num!=0)
		{
		?><table width="606" height="49" border="1">
          <tr>
            <th width="104">Class</th>
			<th width="123">Enrollno</th>
			<th width="204">Name</th>
            <th width="147">Hall </th>
          </tr>
          <?php $j=0;
		  while($row=mysql_fetch_array($qry))
		  { $j++;
		  
		  ?>
          <tr>
            <td height="22"><?php echo $row['class_det'];  ?></td>
            <td><?php echo $row['enrollno']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php 
			
			 $clqry2=mysql_query("select * from class_room where id=".$row['class_id']."");
			  $clrow2=mysql_fetch_array($clqry2);
			echo $clrow2['rooms']; ?></td>
          </tr>
          <?php
		  }//while
		  ?>
        </table>
        <br>
        <input type="submit" name="btn3" class="btn" value="Send Mail">
        <br><br>
		<?php
		}
		}
		?>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
		<?php
		
		if(isset($btn3))
		{
		
			$qry2 = mysql_query("select * from students where deptid='$deptid' && level='$level' && sem='$sem' && class_id='$class_id' ");
			while($row2=mysql_fetch_array($qry2))
			{
				if($row2['email']!="")
				{
				$q4=mysql_query("select * from class_room where id='".$row2['class_id']."'");
				$r4=mysql_fetch_array($q4);
				$hall=$r4['rooms'];
				$email=$row2['email'];
				$mess="Dear ".$row2['name'].", Enroll No.:".$row2['enrollno'].", Exam Hall: ".$hall;
				echo '<iframe src="http://iotcloud.co.in/testmail/testmail1.php?message='.$mess.'&email='.$email.'&subject=Exam Hall Information" frameborder="0" style="display:none"></iframe>';
				echo '<iframe src="http://iotcloud.co.in/testsms/sms.php?sms=emr&name=student&mess='.$mess.'&mobile=9894918800" width="10" height="10" ></iframe>'; 

				
				}
			}
			$mg="Examination hall seat chart generated!.."
			
			
			?>
			<script language="javascript">
				setTimeout(function () {
      window.location.href='';
      }, 5000);
			window.location.href="";
			</script>
			<?php
			
		}
		?>
        <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td align="center" class="subhead">&nbsp;</td>
    </tr>
  </table>
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