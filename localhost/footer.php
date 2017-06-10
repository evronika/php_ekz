<?php

 $content = [
    'Russian' => [
	'Все права защищены ©','Сайт '],
    'English' => ['All rights reserved ©' ,'Site ',]
];
$currentLanguage = 'English';
if (isset($_COOKIE['lang'])
    && isset($content[$_COOKIE['lang']])
){
    $currentLanguage = $_COOKIE['lang'];
}
 
?>
<footer>
	<?php 
		define ('y','2017');
		$yy=date('Y');
		echo '<div class="absolute"><span>'.$content[$currentLanguage][0].'<br>'.$content[$currentLanguage][1].y.'</span></div>';
	?>
	<span> <a href=""><i class="fa fa-vk fa-lg" aria-hidden="true"></i></a> <a href=""><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a> <a href=""><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a> <a href=""><i class="fa fa-youtube-play fa-lg" aria-hidden="true"></i></a></span>
</footer>
</body>
</html>
