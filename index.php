<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
include('db.php');


if(isset($_GET['Logout']))
{
$_SESSION['userid']= "";
$_SESSION['username']= "";
unset($_SESSION['userid']);
unset($_SESSION['username']);
}


?>

<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="data/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="data/bootstrap-select.css">
	<link href="data/css.css" rel="stylesheet" type="text/css">
	<link href="data/css_002.css" rel="stylesheet" type="text/css">
	<link href="data/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="data/camera.css">
    <link rel="stylesheet" type="text/css" href="data/style.css">
	  <link rel="stylesheet" type="text/css" href="data/flexslider.css">
    <!--script type="text/javascript" src="data/firebug-lite-debug.js"></script-->	
	<title>Online Banking</title>
<script type="text/javascript" src="data/jquery.min.js"></script>



<style>
#myproduct
{
border: 1px solid #CCCCCC;
border-radius:10px;
}		

#myproduct:hover
{
border: 1px solid #FFCC66;
border-radius:10px;

}		

#myliks
{

 font-size:14px;
 color:#fff;
}

#myliks:hover
{

 font-size:14px;
 color:#FFCC66;
}
</style>	

</head>
<body>
		<div class="row" >
		    <div class="col-md-12" style="background: #000;">
			    <div class="breadcrumbs">
				    <ul class="breadcrumb" style="background: #9900FF;"><br>

                    </ul>
				</div>
			</div>
			
		</div>

<div class="page-container">
<?php
include("header.php");
?>
<div class="row" style="margin-right: auto;margin-left: auto;">
<div class="col-md-12" >

<?php
if(!isset($_GET["page"]) || $_GET["page"]==1 || $_GET["page"]==0)
{
include("home.php");
}
elseif($_GET["page"]==2)
{
include("About.php");
}
elseif($_GET["page"]==3)
{
include("Contact.php");	
}
elseif($_GET["page"]==4)
{
include("Booksdetail.php");
}
elseif($_GET["page"]==5)
{
	include("Logreg.php");
}
?>
</div>		
		
    

<?php
	include("footer.php");
?>

	
</div></div>

<div id="alertWindow">
</div>
<div id="alertWindow1">
    <div id="abc1"></div>
    <br />
    <input type="button" id="btnCancel" class="btnokk" value="Ok" />
</div>

<script type="text/javascript">


$(function() {
    $("#redirect").click(function(){
      $('#alertWindow').show();
	   $('#alertWindow1').show();
      return false;
    });
    $('#btnCancel').click(function() {
        $('#alertWindow').hide();
		$('#alertWindow1').hide();
    });

});
</script>

<style>

#alertWindow {
  display: inline-block;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
   height: 100%;
margin: auto;
display: none;
text-align: center;
opacity: 0.2;
background-color: #000;
z-index:500;
}

#alertWindow1 {

    display: inline-block;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 300px;
    height: 100px;
    margin: auto;
    background-color: #f3f3f3;
	border: 1px solid #333;
	display: none;
	text-align: center;
   border-radius: 5px;
   padding: 10px;
   z-index:501;
}
#btnOk, #btnCancel { width: 70px; }
</style>


<!-- script type="text/javascript" src="data/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='js/jquery-1.10.2.min.js'><\/script>")</script -->
<script type="text/javascript" src="data/bootstrap.js"></script>
<script type="text/javascript" src="data/bootstrap-select.js"></script>
<script type="text/javascript" src="data/jquery.js"></script>
<script type="text/javascript" src="data/cloud-zoom.js"></script>
<script type="text/javascript" src="data/sapphire.js"></script>

<script>
$(document).ready( function(){	
	
		$('.slideshow > div').flexslider({
			animation:"slide",
			easing:"",
			direction:"horizontal",
			startAt:0,
			initDelay:0,
			slideshowSpeed:7000,
			animationSpeed:600,
			prevText:"Previous",
			nextText:"Next",
			pauseText:"Pause",
			playText:"Play",
			pausePlay:false,
			controlNav:true,
			slideshow:true,
			animationLoop:true,
			randomize:false,
			smoothHeight:false,
			useCSS:true,
			pauseOnHover:true,
			pauseOnAction:true,
			touch:true,
			video:false,
			mousewheel:false,
			keyboard:false
	});
});	
</script>

<script>
$.fn.CloudZoom.defaults = {
	zoomWidth:"auto",
	zoomHeight:"auto",
	position:"inside",
	adjustX:0,
	adjustY:0,
	adjustY:"",
	tintOpacity:0.5,
	lensOpacity:0.5,
	titleOpacity:0.5,
	smoothMove:3,
	showTitle:false};
		
jQuery(document).ready(function() 
{
    $('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
    })
});
</script>




</body></html>