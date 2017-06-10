<?php
require_once ('config.php');

$content = [
    'Russian' => [
		'index.php'=>'Главная',
		'index.php#shop' => 'Магазин',
		'index.php#blog' => 'Блог',
		'contacts.php'=>'Контакты',],
    'English' => [
		'index.php'=>'Home'  , 
		'index.php#shop' => 'Shop' ,
		'index.php#blog' => 'Blog' ,
		'contacts.php'=>'Contact us' ,],
];
$currentLanguage = 'English';
if (isset($_COOKIE['lang'])
    && isset($content[$_COOKIE['lang']])
){
    $currentLanguage = $_COOKIE['lang'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <title>
		<?php 
	 $phpSelf = $_SERVER['PHP_SELF'];
     $rpos = strrpos($phpSelf, '/');
     $fileName = '';
     if ($rpos !== FALSE){
         $fileName = substr($phpSelf, $rpos+1);
     }
    else{
        $fileName = $phpSelf;
    }
		$pr=$pages[$currentLanguage][$fileName]['title'];
		echo "$pr";
		?>
	</title>
    <style>
		.active {
			color: rgb(3, 56, 28);
		}
    </style>
</head>
<body>
<header>  
	
   <nav>  
        <?
        foreach ($content as $key => $c){
            $activeLinkClass = (($currentLanguage == $key) ? ' class="active" ' : '' );
            print '<a href="changeLanguage.php?lang='.$key.'"
            '.$activeLinkClass.'>'.$key.'</a> ';
        }
		?>
    </nav>
	<hr>
	<nav class ="nav">
		<?
		foreach ($content[$currentLanguage] as $key => $c){
				if ($fileName!==$key)
					echo '<span><a href = "'.$key.'">'.$c.'</a></span>';
				else {
					echo '<span class="activeSection"><hr><a href = "'.$key.'">'.$c.'</a></span>';
				}
			}
		?>
	</nav>
	<hr>
</header>
