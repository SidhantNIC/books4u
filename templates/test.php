<?php
session_start();
include("includes/db.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Website by 30NOTICE</title>
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/style.css" media="all"/>
<link rel="stylesheet" href="css/w3.css" media="all"/>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>
<!-----------<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>--------------->
</head>

<body>
<!--------------------HEADER-------------->
<div class="container-fluid top_bar">
<div class="container">
<div class="row">

<div class="col-sm-3" style=";color:white">
<p>Connect with us</p>
<a href="http://facebook.com" class="social_icons"><i class="fa fa-facebook" style="font-size:20px;color:white;"></i></a>
<a href="http://twitter.com" class="social_icons"><i class="fa fa-twitter" style="font-size:20px;color:white;"></i></a>
<a href="http://youtube.com" class="social_icons"><i class="fa fa-youtube-play" style="font-size:20px;color:white;"></i></a>
<a href="http://instagram.com" class="social_icons"><i class="fa fa-instagram" style="font-size:20px;color:white;"></i></a><br/>
<span class="glyphicon glyphicon-envelope" style="color:white;font:20px;padding-right:5px;"></span>sidhantpradhan8@gmail.com<br/>
<span class="glyphicon glyphicon-earphone" style="color:white;font:20px;padding-left:5px;padding-right:5px;"></span>+91 9647792232

</div>

<div class="col-sm-9 email text-right">
<?php
		if(!isset($_SESSION['t_email']))
		{										
		echo "<br/><h4 style='color:orange;'>WELCOME GUEST!</h4>";
										
		}
		else{
		$customer_session = $_SESSION['t_email'];
		$get_customer_pic = "select * from teachers where t_email='$customer_session'";
		$run_customer = mysqli_query($con, $get_customer_pic);
		$row_customer = mysqli_fetch_array($run_customer);
		$customer_pic = $row_customer['t_photo'];
		echo "<a href='profile.php'><img src='profiles/$customer_pic' style='border-radius:100px;width:70px;height:70px;border:white 3px solid'/></a>";	 						
		echo"<br/><h3 style='color:orange'>WELCOME!</h3>" . $_SESSION['t_email'];
						
										
		}
	?>

</div>

</div><!-----END OF ROW--->
</div><!----END OF container-------->
</div><!----END OF flid------>

<!-----------NAVIGATION START------------->
<div class="container">
<div class="row">

<div class="col-sm-5">
<img src="images/design.png" class="img-responsive" style="height:70px;"/>
</div><!---END OF COL5---->
<br/>
<div class="col-sm-7 my_menu">
<ul class="w3-navbar w3-card-8 w3-light-teal w3-hover-teal">
<li><a href="index.php"><i class="fa fa-home"></i>&nbsp;HOME</a></li>

<?php
if(isset($_SESSION['t_email'])){
echo "<li><a href='tpannel.php'><i class='fa fa-laptop' aria-hidden='true'></i>&nbsp;TEACHER PANNEL</a></li>";
}
else if(isset($_SESSION['s_email'])){
echo "<li><a href='spannel.php'><i class='fa fa-graduation-cap' aria-hidden='true'></i>&nbsp;STUDENT PANNEL</a></li>";
}
?>
<li><a href="gallery.php"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;GALLERY</a></li>

  <li class="w3-dropdown-hover w3-hover-green">
    <a class="w3-hover-green" href="#">MORE<i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-white w3-card-4">
          <a href="adminlogin.php"><i class="fa fa-key" aria-hidden="true"></i>&nbsp;ADMIN</a>
      <a href="#"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;OUR MEMBERS</a>
    </div>
  </li>
  
  <?php
if(isset($_SESSION['t_email'])){
	echo "<li><a href='logout.php' style='color:red;'><b><i class='fa fa-sign-out' aria-hidden='true'></i>&nbsp;LOGOUT</b></a></li>";
}
else if (isset($_SESSION['s_email'])){
	echo "<li><a href='logout.php' style='color:red;'><b><i class='fa fa-user-circle' aria-hidden='true'></i>&nbsp;LOGOUT</b></a></li>";
}
else{
		echo "<li><a href='pagelogin.php' style='color:red;'><b><i class='fa fa-user-circle' aria-hidden='true'></i>&nbsp;LOGIN</b></a></li>";									
	}
?>

</ul>


</div><!----END OF COL7-->

</div><!----END OF ROWS---->
</div><!---END OF CONTAINER-->
<!---------------NAVIGATION END------------->
<!------END OF HEADER----->

<div class="container-fluid">
<div class="row">

</div>
</div><!-----END OF CONTAINER FLUID---->
<br/>
<br/>
<!-----------------CONTENT AREA-------------->
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1 style="font-size:10px;text-align:right;font-family:Arial, Helvetica, sans-serif">Ph: 0354-2344434</h1>
<h1 style="font-size:10px;text-align:right;font-family:Arial, Helvetica, sans-serif">FAX: 0354-2344434</h1>
<h1 style="font-size:10px;text-align:right;font-family:Arial, Helvetica, sans-serif">E-MAIL: darpoly2000@yahoo.co.in</h1>
<center>
<img src="images/1200px-Emblem_of_India.svg.png" class="img-responsive" style="height:50px;width:40px;"/>
</center>

</div><!---END OF COL5---->
<div class="col-sm-12">
</div>
</div>
</div>
<div class="container">
<div class="options3">
<form action="cstnotice.php" method="post" enctype="multipart/form-data">

<h1 style="font-size:24px;text-align:center;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;line-height:10px;">GOVT. OF WEST BENGAL</h1>
<h2 style="font-size:20px;text-align:center;font-family:Arial, Helvetica, sans-serif;line-height:10px;">OFFICE OF THE PRINCIPAL</h2>
<h3 style="font-size:14px;text-align:center;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;line-height:10px;">DARJEELING POLYTECHNIC, KURSEONG</h3>
<h1 style="font-size:16px;text-align:center;font-family:'Courier New', Courier, monospace;text-decoration:underline;line-height:10px;">Darjeeling - 734203</h1>
<center>
<textarea name="t_notice" style="width:100%;height:400px;border-radius:10px;" placeholder="Type or paste a Notice here....." required></textarea>


<h3 style="color:#FF0000;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size:14px;"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;POST FILES example(PDF,IMAGES,ROUTINE etc)(OPTIONAL)</h3>
<input type="file" name="notice_file" class="form-control" style="background-color:#FFFF99;width:50%;"/>
<br/>
<select name="year" class="form-control text" style="width:50%;border-radius:10px;background-color:#FFFF99" required>
                                <option value="">SELECT YEAR</option>
										<option>1st Year</option>
										<option>2nd Year</option>
										<option>3rd Year</option>
	
</select>
<br/>

 <select name="notice_from" class="form-control text" style="width:50%;border-radius:10px;background-color:#FFFF99" required>
 <option value="">SELECT YOUR NAME</option>
<?php										
$conn = mysqli_connect("localhost","root","","30notice");
$customer_session = $_SESSION['t_email'];
$show = "select t_name from teachers where t_email='$customer_session'";
$result = $conn-> query($show);
if($result-> num_rows >0){
while ($row = $result -> fetch_assoc()){
echo "<option>". $row["t_name"] ."</option>";
}
echo "</table>";
}
else {
echo "YOU HAVE NOT POSTED ANY NOTICE";
}
$conn-> close();
?>
									
</select><br/><br/>

<button type="submit" name="cstnotice" class="btn btn-success btn-block" style="width:50%;">POST</button>

</center>
</form>
</div>
</div>
<br/>
<br/>
<br/>
<br/>

<!----------------CONTENT ENDS-------------------->
<!-----------FOOTER AREA------------>
<!-- Footer -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Our Location-</h5>
					<ul class="list-unstyled quick-links">
<div class="map-responsive">						
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.7015985515204!2d88.27270031430255!3d26.88122016791803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e43132af725089%3A0xcb39a8e6889580ed!2sDarjeeling+Polytechnic+Institute!5e0!3m2!1sen!2sin!4v1533545814991" width="300" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();">HOME</a></li>
						<li><a href="javascript:void();">ABOUT</a></li>
						<li><a href="javascript:void();">GALLERY</a></li>
						<li><a href="javascript:void();">OUR MEMBERS</a></li>
						<li><a href="javascript:void();">REGISTER</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
					<p style="color:white">We the student of Darjeeling polytechnic institute
					  of ( Department of  Electrical engineering)  We design our project (Clap switch 
					  with Emergency Light), which is a  mini electronics project, made with the help 
					  of the basic components. Clap circuit has the ability to switch ON/OFF any elect-
					  rical device or circuit by the clap sound.</p>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr/>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p style="color:white">&copy;&nbsp;2018 Copyright content following this page was proudly uploaded by Sidhant Pradhan</p>
				</div>
				<hr/>
			</div>	
		</div>
	</section>
	<!-- ./Footer --><!--------------FOOTER AREA ENDS-------------->

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php
if(isset($_POST['cstnotice'])){
	$t_notice = $_POST['t_notice'];
	$notice_from = $_POST['notice_from'];
	$notice_file = $_FILES['notice_file']['name'];
	$image_tmp = $_FILES['notice_file']['tmp_name'];
	$fileError = $_FILES['notice_file']['error'];
	$year = $_POST['year'];


	$insert_notice = "insert into notice (notice_date,cst,notice_from,notice_file,year)
	values (NOW(),'$t_notice','$notice_from','$notice_file','$year')";
	
	$run_notice = mysqli_query($con,$insert_notice);
	move_uploaded_file($image_tmp, "notice_files/$notice_file");
	
if($run_notice){
echo "<script>('YOUR NOTICE HAS BEEN SUCCESSFULLY POSTED!')</script>";
echo "<script>window.open('noticesuccess.php','_self')</script>";
}
else{
echo "<script>window.open('cstnotice.php','_self')</script>";
}
}

?>

<?php
		if(!isset($_SESSION['t_email']))
	{										
		echo "<script>window.open('spam.php','_self')</script>";
		exit();
										
	}
?>
