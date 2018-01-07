<?php
SESSION_START();
include_once("product-function.php");
?>
<!doctype html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SamAtoZ</title>

  <?php include_once("references.php");?>
  
  <style>
/* Note: Try to remove the following lines to see the effect of CSS positioning */
  /*data offset: khoang cach ma navbar xuat hien*/
.affix {
	top: 0px;
//khoang cach tu navbar den body  width: 100%;
	-webkit-transition: all .5s ease-in-out;
	transition: all .5s ease-in-out;
}
.affix-top {
	position: static;
	top: -35px;
}
.affix + .bmp-spec {
	padding-top: 63px;
//khoang cach tu content den navbar
}
</style>

  </head>

  <body>
<!-- BODY -->
<div class="container-fluid" style="padding:0"> 
    
    <?php include_once("menu-bar.php");?>
    
    <!-- CAROUSEL -->
    <div class="row centers-block bmp-carousel-fluid">
    <div id="myCarousel" class="col-lg-12 carousel slide" data-ride="carousel" data-interval="8000" data-pause="false"> 
        <!-- Indicators -->
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
        <div class="item active"><a href="product-info-view.php?glx_id=4">
          <video class="center-block" loop muted autoplay>
            <source src="images/video/tabpros-1366x600.mp4" type="video/mp4">
            Your browser does not support the video tag. </video>
          </a></div>
        <div class="item"><a href="product-info-view.php?glx_id=1">
          <video class="center-block" loop muted autoplay>
            <source src="images/video/s7-1366x600.mp4" type="video/mp4">
            Your browser does not support the video tag. </video>
          </a></div>
        <div class="item"><a>
          <video class="center-block" loop autoplay>
            <source src="images/video/gearvr-1366x600.mp4" type="video/mp4">
            Your browser does not support the video tag. </video>
          </a> </div>
        <div class="item"><a>
          <video class="center-block" loop muted autoplay>
            <source src="images/video/gears2-1366x600.mp4" type="video/mp4">
            Your browser does not support the video tag. </video>
          </a> </div>
        <div class="item"><a href="product-info-view.php?glx_id=2">
          <video class="center-block" loop muted autoplay>
            <source src="images/video/note5-1366x600.mp4" type="video/mp4">
            Your browser does not support the video tag. </video>
          </a></div>
      </div>
        
        <!-- Left and right controls --> 
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  </div>
    <!-- frame -->
    <div class="row bmp-row-4">
    <div class="col-lg-3"> <a href="product-info-view.php?glx_id=18" class="hvr-radial-out"><img class="img-responsive center-block" src="images/banner/little-337x200.png" alt="tabview"></a> </div>
    <div class="col-lg-3"> <a href="product-info-view.php?glx_id=2" class="hvr-radial-out"><img class="img-responsive center-block" src="images/banner/level-hero-337x200.png" alt="note5"></a> </div>
    <div class="col-lg-3"> <a href="product-info-view.php?glx_id=11" class="hvr-radial-out"><img class="img-responsive center-block" src="images/banner/case-337x200.png" alt="s7-active"></a> </div>
    <div class="col-lg-3"> <a href="product-info-view.php?glx_id=1" class="hvr-radial-out"><img class="img-responsive center-block" src="images/banner/charge-337x200.png" alt="s7-edge"></a> </div>
  </div>
    
    <!-- end body content --> 
    
<?php include_once("footer.php");?>

  </div>
</body>
</html>