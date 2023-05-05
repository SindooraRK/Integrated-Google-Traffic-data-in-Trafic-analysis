<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ped-W</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/led.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>`
<?php include('includes/header.php');?>
<div class="banner">
<div class="container">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Ped-W</h1>
	</div>
</div>
<script>
var x = document.getElementsByTagName("DIV");
  
  if (ledRed==1) { 
    x.led-red
  }
  else {
  x.led-white
  }
</script>
<br><br><br>
<div class="container">
 <div class="box">
   <div class="led-box">
    <div id="demo" class="led-red" ></div>
   </div>
   <div class="led-box" >
    <div id="demo" class="led-white" ></div>
   </div>
   
   <br><br>
   <div class="led-box">
    <div class="led-yellow"></div>  
   </div><br><br>
   <div class="led-box">
    <div class="led-green"></div>  
   </div>
 </div>
</div>
 <div class="container">
  <div class="boxled">
   <div class="led-box">
    <div class="led-red"></div> 
   </div>
   <div class="container">
    <div class="led-box">
     <div class="led-green"></div>
    </div>
   </div>
 </div>
</div>
<div class="container">
 <div class="boxledd">
  <div class="led-box">
    <div class="led-red"></div>
  </div>
 </div>
 <div class="boxledddd">
  <div class="led-box">
    <div class="led-green"></div>
  </div>
 </div>
 <div class="boxleddd">
  <div class="led-box">
    <div class="led-yelloww"></div>
  </div>
 </div>
</div>
</div>




 

 
  
 
  

  

<!--- rupes ---->

<!--- /rupes ---->




<!---holiday---->

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 4";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			

<?php }} ?>




<!--- routes ---->


<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>