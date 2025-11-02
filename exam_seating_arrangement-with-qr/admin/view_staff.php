<?php include("headlink.php");?>
<?php include("sidebar.php");?>
<?php
extract($_POST);
$msg="";
if(isset($_POST['s1']))
{
}
?>
<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Staff</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Staff Arrangements</li>
				</ul>
			</div>	
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Staff Arrangements</h4>
                            <br>
                            <span style="color:green"><?php echo $msg;?></span>
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
                                        <label class="col-form-label">Exam Date</label>
                                        <div>
                                            <select name="ex_date" id="" class="form-control" style="color: black;">
                                            <option value="">-Select-</option>
			  <?php $m=0;
			  $cq=mysql_query("select distinct(date_schedule) from exam_date where status=1");
			  while($cr=mysql_fetch_array($cq))
			  {
			  ?>
			  <option value=<?php echo $m; ?> <?php if($_REQUEST['ex_date']==$m) echo "selected"; ?>><?php echo $cr['date_schedule']; ?></option>
			  <?php
			  $m++;
			  }
			  ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="col-form-label">Session</label>
                                        <div>
                                            <select name="section" id="" class="form-control" style="color: black;">
                                            <option value="">-Select-</option>
                <option value="1" <?php if($section=="1") echo "selected"; ?>>Forenoon</option>
                <option value="2" <?php if($section=="2") echo "selected"; ?>>Afternoon</option>
                                            </select>
                                        </div>
                                    </div>

                                    
									<div class="col-12">
										<button type="submit" name="s1" class="btn">Show</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
        <?php
		  if(isset($_POST['s1']))
		  {
		  ?>
                    <div class="container">
                    <h4>Staff Arrangement</h4>
            <form action="" method="post">
                <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th>Staff ID </th>
                    <th>Staff Name</th>
                    <th>Class Room</th>
                   
                    </tr>
                </thead>
                <tbody>
                <?php
$qs=mysql_query("select * from staff where status=0");
while($st_row=mysql_fetch_array($qs))
{
$stf[]=$st_row['id'];

}
			  $rs=mysql_query("select distinct(class_id) from students");
			  $num=mysql_num_rows($rs);
			  $i=0;
			  $j=$ex_date;
			  $n=$ex_date-1;
			  while($rw=mysql_fetch_array($rs))
			  {
			$i++;
			  ?>
              <tr>
                <td><?php if($stf[$j]!="")
				{
				echo $stf[$j];
				}
				else
				{
				echo $stf[$n];
				} ?></td>
                <td><?php 
				if($stf[$j]!="")
				{
					if($section=="1")
					{
				$q1=mysql_query("select * from staff where id=".$stf[$j]."");
				$q2=mysql_fetch_array($q1);
				echo $q2['name'];
					}
					else
					{
					$q1=mysql_query("select * from staff where id=".$stf[$j+1]."");
					$q2=mysql_fetch_array($q1);
					echo $q2['name'];
					}
				}
				else
				{
					if($section=="1")
					{
				$q1=mysql_query("select * from staff where id=".$stf[$n]."");
				$q2=mysql_fetch_array($q1);
				echo $q2['name'];
					}
					else
					{
				$q1=mysql_query("select * from staff where id=".$stf[$n-1]."");
				$q2=mysql_fetch_array($q1);
				echo $q2['name'];	
					}
				}
				 ?></td>
                <td><?php 
				$q5=mysql_query("select * from class_room where id=$rw[class_id]");
				$r5=mysql_fetch_array($q5);
				echo $r5['rooms']; ?></td>
              </tr>
              <?php
			  $j++;
			  $n--;
			  }
			  ?>
                    
                </tbody>
                <?php
		  }
		  ?>
                </table>
                <div>
               
                </div>
                </form>
            </div>
	</main>

	<div class="ttr-overlay"></div>