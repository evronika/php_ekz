<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 02.03.2017
 * Time: 19:25
 */
$content = [
    'Russian' => [
        'h1' => 'Э́ми Да́дли'
        , 'description' => 'Эми Робсарт была единственной дочерью богатого норфолкского землевладельца. В восемнадцать лет она вышла замуж за Роберта Дадли, сына Джона Дадли, 1-го герцога Нортумберленда.'
    ],
    'English' => [
        'h1' => 'Amy Dudley'
        , 'description' => 'Amy Dudley lived with friends in different parts of the country, having her own household and hardly ever seeing her husband. In the morning of 8 September 1560, at Cumnor Place near Oxford, she insisted on sending away her servants and later was found dead at the foot of a flight of stairs with a broken neck and two wounds on her head.'
    ],
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
    <title>Title</title>
    <style>
        .active{
            color: red;
        }
    </style>
</head>
<body>
<header>
    Выберите язык: <?php
        foreach ($content as $key => $c){
            $activeLinkClass = (($currentLanguage == $key) ? ' class="active" ' : '' );
            print '<a href="changeLanguage.php?lang='.$key.'"
            '.$activeLinkClass.'>'.$key.'</a> ';
        }
    ?>
</header>
<h1><?php echo $content[$currentLanguage]['h1'] ?></h1>
<p><?php echo $content[$currentLanguage]['description']; ?></p>
</body>
</html>
