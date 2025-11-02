<?php
$class_id=$_SESSION['class_id'];
include("../include/dbconnect.php");

		
		$q1=mysql_query("select * from students where class_id='$class_id' order by id");
			while($r1=mysql_fetch_array($q1))
			{
			$enr=$r1['enrollno'];	
			$r=$r1['row_id'];	
			$row[$r][]=$enr;
				
			}
		?>


        <table width='725' height='293' border='0' cellpadding='5' cellspacing='3'>
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
		
       
          
        <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td align="center" class="subhead">&nbsp;</td>
    </tr>
  </table>
  <?php
  unset($_SESSION['class_id']);  // Unset session variable after storing it
  ?>