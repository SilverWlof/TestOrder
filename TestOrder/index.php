<?php
include 'support/SQL.php';
$items = dbQuery("SELECT * FROM item");
$cart = array();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Task</title>
	<link rel="stylesheet" type="text/css" href="support/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="support/rest.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container" onload="check(), Cart()">

	<header>
		<img src="image/logo.jpg">
	</header>


<div class="cart">
	<div class="row align-items-center">
		<img src="image/cart.png">
		<h1>Корзина</h1>
	</div>
	
	<div id="cart">
		
	</div>

	
	<div class="splin"></div>
	<div class="bay_item">
		<p>Всего: <b id="sum"></b> руб.</p>
		<button type="submit">Оформить заказ</button>
	</div>
</div>

<? 
foreach ($items as $item) {
	echo 
		'<div class="item"'.'>'.
			'<img src="'.$item['img'].'">'.
		'<div class="ap">'.
			'<h1 class="name_1" data-art="'.$item['id'].'" >'.$item['name'].'</h1>'.
			'<p>'.$item['valud'].'</p>'.
		'</div>'.
		'<div class="bay">'.			
				'<p data-art="'.$item['id'].'">'.'<b class="price_1">'.$item['price'].'</b>'.' руб.'.'</b>'.'</p>'.				
				'<button class="bay_1" id="'.$item['id'].'" onclick="addCart(this)">В корзину!</button>'.						
		'</div>'.
		'</div>'.'<div class="splin"></div>';
}
?>

<footer></footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="funk.js"></script>
</body>
</html>