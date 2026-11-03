<?php 

	$filename="".$_REQUEST['msg'].".php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" lang="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JDS Public School</title>
<link href="css/reset.css" rel="stylesheet" />
<link href="slimbox/slimbox2.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/captcha.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="basic-jquery-slider.js"></script>
<script src="slimbox/slimbox2.js"></script>
<!--  Attach the plug-in to the slider parent element and adjust the settings as required -->
<script>
      $(document).ready(function() {
        
        $('#banner').bjqs({
          'animation' : 'slide',
          'width' : 980,
          'height' : 250
        });
        
      });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-52770125-3"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7959302429826108"
     crossorigin="anonymous"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-52770125-3');
</script>

</head>
<body>
<div class="wrapper">
<div class="main">
<?php include("header.php"); ?>
<?php include("menu.php"); ?>
<?php include("slider.php"); ?>


<div id="contener">
<div id="left">
    <?php include $filename;?>
    </div>
<?php include("sliderbar.php"); ?>
</div>

<?php include("footer.php"); ?>
</div>
</div>

</body>
</html>
