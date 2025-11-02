<?php
include("include/protect.php");
include("include/dbconnect.php");
extract($_POST);
$msg="";
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title><?php include("include/title.php"); ?></title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	<style>
            .container-fluid {
            padding-top: 20px;
        }
        .wc-title {
            margin-bottom: 20px;
        }
        .btn-primary {
            margin-top: 10px;
        }
        .table thead th {
            text-align: center;
            background-color: #007bff;
            color: #fff;
        }
        .table td, .table th {
            vertical-align: middle;
            text-align: center;
            background-color: #fff;
        }
        .widget-inner {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .bor {
    border: 1px solid #99CCFF;
    padding: 10px;
    background-color: #f0f8ff;
    font-size: 14px;
    font-weight: bold;
    color: #333;
    border-radius: 5px; /* Add rounded corners */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
    transition: all 0.3s ease; /* Add smooth transition effect */
}

.bor.active {
    transform: scale(1.05); /* Scale up for emphasis */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Darken shadow for depth */
}

.bor th, .bor td {
    padding: 8px; /* Adjust padding for content */
    text-align: center; /* Center-align text */
}


    </style>
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <header class="header rs-nav">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between">
					<div class="topbar-left">
						<ul>
							<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
						</ul>
					</div>
					<div class="topbar-right">
						<ul>
							
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
					<!-- Header Logo ==== -->
					<div class="menu-logo">
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
						<div class="menu-logo">
						</div>
                        <ul class="nav navbar-nav">	
                        <li style="padding-left: 0px;">
								<a href="#">
									<h6 style="color: Black; font-size: 20px; margin: 0; font-weight:bold;">Exam Seating Arrangement</h6>
								</a>
							</li>
							<li class="active"><a href="javascript:;">Home</a>
								
							</li>
							
						</ul>
						<div class="nav-social-link">
							<a href="javascript:;"><i class="fa fa-facebook"></i></a>
							<a href="javascript:;"><i class="fa fa-google-plus"></i></a>
							<a href="javascript:;"><i class="fa fa-linkedin"></i></a>
						</div>
                    </div>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- header END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Exam Schedule</h1>
				 </div>
            </div>
        </div>
		<!-- Breadcrumb row -->
		<div class="breadcrumb-row">
			<div class="container">
				<ul class="list-inline">
					<li><a href="#">Home</a></li>
					<li>My Exam Schedule</li>
				</ul>
			</div>
		</div>
		<!-- Breadcrumb row END -->
        <main class="ttr-wrapper">
		<div class="container-fluid">
			

			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
                            <br>
                            <span style="color:green"><?php echo $msg;?></span>
						</div>
                      	<div class="widget-inner">
                          <form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                          <table width="794" height="62" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" align="center"><strong>Seat Arrangement</strong></td>
          </tr>
          <tr>
            <td width="116">Date </td>
            <td width="425"><!-- <select name="class_id">
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
              </select> -->
             
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
            <input type="submit" class="btn" name="btnSubmit" value="Show" /></td>
          </tr>
        </table>
        <p>&nbsp;</p>
		<?php
		if(isset($btnSubmit))
		{
		$q1=mysql_query("select * from students where enrollno='$uname'");
        $row1=mysql_fetch_array($q1);
        $class_id=$row1['class_id'];
       

        $qe=mysql_query("select * from students where class_id='$class_id' order by id");
			while($r1=mysql_fetch_array($qe))
			{
			$enr=$r1['enrollno'];	
			$r=$r1['row_id'];	
			$row[$r][]=$enr;
				
			}
		?>
        
        <table width="725" height="293" border="0" cellpadding="5" cellspacing="3">
          <tr>
          <?php
    // Define initial seat number
    $seatNumber = 0;
$s=0;
    // Loop through each row and output seat numbers
    for ($i = 0; $i <=0; $i++) {
        $seatNumber++;
    }
        ?>
            <th class="bor" scope="row"><span style="color:green"><?php echo $row[1][0]; ?></span> <br><p>seat <?php echo $seatNumber++;?></p></th>
            <td class="bor"><!-- <span style="color:green"> --><?php echo $row[2][0]; ?></span> <br><p>seat <?php echo $seatNumber++;?></p></td>
            <td class="bor"><!-- <span style="color:green"> --><?php echo $row[3][0]; ?></span> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><!-- <span style="color:green"> --><?php echo $row[4][0]; ?></span> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><!-- <span style="color:green"> --><?php echo $row[5][0]; ?></span> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><!-- <span style="color:green"> --><?php echo $row[6][0]; ?></span> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><!-- <span style="color:green"> --><?php echo $row[7][0]; ?></span> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><!-- <span style="color:green"> --><?php echo $row[8][0]; ?> </span><br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[9][0]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][0]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[11][0]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[12][0]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
          </tr>
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][1]; ?> <br><p>seat <?php echo $seatNumber++;?></th>
            <td class="bor"><?php echo $row[2][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[3][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[5][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[6][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[8][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[9][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[11][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[12][1]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
          </tr>
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][2]; ?> <br><p>seat <?php echo $seatNumber++;?></th>
            <td class="bor"><?php echo $row[2][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[3][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[5][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[6][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[8][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[9][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[11][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[12][2]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
          </tr>
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][3]; ?> <br><p>seat <?php echo $seatNumber++;?></th>
            <td class="bor"><?php echo $row[2][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[3][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[5][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[6][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[8][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[9][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[11][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[12][3]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
          </tr>
          <tr>
            <th class="bor" scope="row"><?php echo $row[1][4]; ?> <br><p>seat <?php echo $seatNumber++;?></th>
            <td class="bor"><?php echo $row[2][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[3][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[4][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[5][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[6][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[7][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[8][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[9][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td>&nbsp;</td>
            <td class="bor"><?php echo $row[10][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[11][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
            <td class="bor"><?php echo $row[12][4]; ?> <br><p>seat <?php echo $seatNumber++;?></td>
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

			
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="index.html"><img src="assets/images/logo-white.png" alt=""/></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="#" class="btn ">Join Now</a>
						</div>
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sign Up For A Newsletter</h5>
							<p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
									<div class="ajax-message"></div>
									<div class="input-group">
										<input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
										</span> 
									</div>
								</form>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Company</h5>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="about-1.html">About</a></li>
										<li><a href="faq-1.html">FAQs</a></li>
										<li><a href="contact-1.html">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>
										<li><a href="blog-classic-grid.html">Blog</a></li>
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="event.html">Event</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Courses</h5>
									<ul>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="courses-details.html">Details</a></li>
										<li><a href="membership.html">Membership</a></li>
										<li><a href="profile.html">Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
								<li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>
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
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>
