<head>
	<link rel="stylesheet" href="css/contacts.css">
</head>
<?php
require_once ('header.php');
require_once ('config.php');
?>
<?php
$contentC = [
   'Russian' => ['Имя <i>*</i>',	'E-mail <i>*</i>', 'Тема', 'Сообщение <i>*</i>','Phone'=>'<b>Телефон</b>','Fax'=>' <b>Факс</b>','Address'=>' <b>Адрес:</b> 116 Пикодили, Лондон', ],
    'English' => ['Name <i>*</i>'  , 'E-mail <i>*</i>' , 'Subject' ,'Message <i>*</i>' , 'Phone'=>' <b>Phone</b>','Fax'=>' <b>Fax</b>','Address'=>' <b>Address</b>: 166 Piccadilly, London',],
];
?>
	<body>
		 <nav>
       <? if ($fileName == 'index.php'){
    }
    else{
        print '<ul class="breadcrumbs">
                    <li><a href="index.php">'.$pages[$currentLanguage]['index.php']['menuTitle'].'</a></li><li>|</li>
';
        if (isset($pages[$currentLanguage][$fileName])) {
            print '<li>'.$pages[$currentLanguage][$fileName]['menuTitle'].'</li>';
        }
        print '</ul>';
    }
	?>
		</nav>
		<h2> <? print ($pages[$currentLanguage][$fileName]['menuTitle']); ?> </h2>
		<form method="post" action="mail.php">
			<?php echo $contentC[$currentLanguage][0] ?>:<input type="text" name="name"/><br/><hr>
			<?php echo $contentC[$currentLanguage][1] ?>:<input type="e-mail" name="e-mail"/><hr>
			<?php echo $contentC[$currentLanguage][2] ?>:<input type="text" name="text"/><hr>
			<?php echo $contentC[$currentLanguage][3] ?>:<input type="text" name="message"/><hr>
			<br/>
			<input type="submit" name="doSubmit" value="Enter"/>
		</form>
		<div class="info">
			<h4><? print ($pages[$currentLanguage][$fileName]['menuTitle']); ?></h4>
			<ul>
				<li><i class="fa fa-phone fa-lg" aria-hidden="true"></i><? echo $contentC[$currentLanguage]['Phone']?>: +44 01234 56789</li>
				<li><i class="fa fa-file fa-lg" aria-hidden="true"></i><? echo $contentC[$currentLanguage]['Fax']?>: +44 98765 43210</li>
				<li><i class="fa fa-envelope fa-lg" aria-hidden="true"></i><b>E-mail:</b> email@website.com</li>
				<li><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i><? echo $contentC[$currentLanguage]['Address']?></li>
			<ul>
		</div>
	</body>
<?php
require_once ('footer.php');
?>