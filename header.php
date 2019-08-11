<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $title; ?> | HasanWAP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="video" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap -->
<link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
<!-- //bootstrap -->
<link href="/css/dashboard.css" rel="stylesheet">
<!-- Custom Theme files -->
<link href="/css/style.css" rel='stylesheet' type='text/css' media="all" />
<script src="/js/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- //fonts -->
</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><h1><img src="/images/logo.png" alt="HasanWAP" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<div class="top-search">
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="header-top-right">
				<div class="file">
					<a href="upload.html">Upload</a>
				</div>	
				<div class="signin">
					<a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Sign Up</a>
				</div>	
				<div class="signin">
					<a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign In</a>
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
	
        <div class="col-sm-3 col-md-2 sidebar">
			<div class="top-navigation">
				<div class="t-menu">MENU</div>
				<div class="t-img">
					<img src="/images/lines.png" alt="" />
				</div>
				<div class="clearfix"> </div>
			</div>
				<div class="drop-navigation drop-navigation">
				  <ul class="nav nav-sidebar">
					<li class="active"><a href="/" class="home-icon"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
					<li><a href="/download/TV/" class="user-icon"><span class="glyphicon glyphicon-home glyphicon-blackboard" aria-hidden="true"></span>TV</a></li>
					<li><a href="/download/movies/" class="menu1"><span class="glyphicon glyphicon-film" aria-hidden="true"></span>Movies<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
						<ul class="cl-effect-2">
							<li><a href="/download/movies/">English</a></li>                                             
							<li><a href="/download/film-terbaru/">Indonesia</a></li>
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu1" ).click(function() {
							$( "ul.cl-effect-2" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					<li><a href="/download/olahraga/" class="menu"><span class="glyphicon glyphicon-film glyphicon-king" aria-hidden="true"></span>Sports<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
						<ul class="cl-effect-1">
							<li><a href="/download/sepakbola/">Sepakbola</a></li>                                             
							<li><a href="/download/futsal/">Futsal</a></li>
							<li><a href="/download/karate/">Karate</a></li> 
						</ul>
						<!-- script-for-menu -->
						<script>
							$( "li a.menu" ).click(function() {
							$( "ul.cl-effect-1" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					<li><a href="/download/lagu/" class="song-icon"><span class="glyphicon glyphicon-music" aria-hidden="true"></span>Lagu</a></li>
					<li><a href="/download/berita/" class="news-icon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Berita</a></li>
				  </ul>
				  <!-- script-for-menu -->
						<script>
							$( ".top-navigation" ).click(function() {
							$( ".drop-navigation" ).slideToggle( 300, function() {
							// Animation complete.
							});
							});
						</script>
					<div class="side-bottom">
						<div class="side-bottom-icons">
							<ul class="nav2">
								<li><a href="//www.facebook.com/wapblog.iwb.me" class="facebook"> </a></li>
								<li><a href="//www.twitter.com/hasanteam008" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
						<div class="copyright">
							<p>Copyright &copy; 2017 Hasan Team Developers | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
						</div>
					</div>
				</div>
        </div>
