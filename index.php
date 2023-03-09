<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="modules/module-style.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
 	 <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<title>OceanView Hotel</title>
</head>
<body  style='overflow-x:hidden;'>
	<div class="first-block">
		<div class="filter-block">
			<?php include_once 'modules/header.php'; ?>
			<div class="greeting-block">
				<h2 style="text-align: center; color: #ffe605;">&#9733; &#9733; &#9733; &#9733;</h2>
				<h2 style="text-align: center; margin: 10px;">Добро пожаловать в Ocean View</h2>
				<p style="text-align: center; margin: 5px;">Ищете, где остановиться в Майами-Бич?</p>
			    <p style="text-align: center; margin: 5px;">Можете больше не искать. </p>
			    <p style="text-align: center; margin: 5px;">Очаровательный отель Ocean Viev позволит вам познакомиться с Майами-Бич наилучшим образом.</p>
			    <p style="text-align: center; margin: 5px; margin-bottom: 60px;">Вы пока что не авторизованы, <a style="font-size: 20px; color: #e14c86;" href="login.php">войдите</a> или <a style="font-size: 20px; color: #e14c86;" href="registration.php">зарегестрируйтесь</a>!</p>
	
			</div>
		</div>
	</div>
	<div class="_second-block">
		<div class="slider-block-second">
			<div><img src="image/main-slider/1.jpg"  width="99%"></div>
    		<div><img src="image/main-slider/2.jpg"  width="99%"></div>
    		<div><img srv="image/main-slider/1.jpg"  width="1200px"></div>
 	 	</div>
	</div>

</body>
	<?php include_once 'modules/footer.php'; ?>
</html>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.slider-block-second').slick({
		dots: true,
        accessibility: true,
		autoplay: true,
		autoplaySpeed: 5000

      });
    });
  </script>