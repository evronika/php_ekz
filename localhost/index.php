<head>
	<link rel="stylesheet" href="css/index.css">
</head>
<?php
require_once ('header.php');
$contentShop = [
    'Russian' => [
		'Летнее мыло',
		'Спа',
		'Набор дубовых свечей',
		'Мыло из морских водорослей',
		'h2' => 'Блог',
		'h3' => 'Магазин',
		'price' => ['$8.99', '$2.99', '$3.99', '$1.99'],
		'notprice' => ['$11.99', '$4.99', '$6.99', '$3.99'],
		'More' => 'Подробнее' ,
	],
    'English' => [
		'Summer Berry Soap'  , 
		'Seewed soap set' , 
		'Oak Candle set' ,'Seewed soap' , 
		'h2' => 'Blog', 'h3' => 'Shop',
		'price' => ['$8.99', '$2.99', '$3.99', '$1.99'],
		'notprice' => ['$11.99', '$4.99', '$6.99', '$3.99'],
		'More' => 'More' ,
	],
];
$contentBlog = [
    'Russian' => [
	'Летнее мыло',
	'Спа',
	'Набор дубовых свечей',
	'h2' => 'Blog',],
    'English' => ['Summer Berry Soap'  , 'Seewed soap set' , 'Oak Candle set' ,],
];
$currentLanguage = 'English';
if (isset($_COOKIE['lang'])
    && isset($content[$_COOKIE['lang']])
){
    $currentLanguage = $_COOKIE['lang'];
}
?>
	<body>
		<div class="logo"><a href="index.php">NATURAL <i>shop</i></a></div>
		<img class="oboi" src="img/oboi.jpg"/>
		<div class="text one">
			Responcive & Retina Ready
		</div>
		<div class="text two">
			A Beautiful WooCommerce Theme
		</div>
		<h2 id="shop"><span class="activeSection"> <? echo $contentShop[$currentLanguage]['h3']; ?></span></h2>
		<div class="shop">
			<?
				$count=0;
				foreach ($contentShop[$currentLanguage] as $key => $c){
					if ($count<4){
						echo '<div class="img"><span class="sale"><i>Sale!</i></span><img src="img/'.$count.'.jpg" alt="мыло"/>'.$c.'<br><s>'.$contentShop[$currentLanguage]['notprice'][$count].'  </s><span>'.$contentShop[$currentLanguage]['price'][$count].'</span></div>';
						$count++;
					}
				}
			?>
		</div>
		<h2 id="blog"><span class="activeSection"><? echo $contentShop[$currentLanguage]['h2']; ?></span></h2>
			<div class="blog">
			<?
				$count=0;
				foreach ($contentShop[$currentLanguage] as $key => $c){
					if ($count<3){
						echo '<div class="img"><a href=""><img src="img/'.$count.'.jpg" alt="мыло"/>'.$c.'<br><span>'.$contentShop[$currentLanguage]['More'].'</span></a></div>';
						$count++;
					}
			}
			?>
		</div>
	<body>
<?php
require_once ('footer.php');
?>
