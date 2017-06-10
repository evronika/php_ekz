<?php
/**
 * Created by PhpStorm.
 * User: st
 * Date: 02.03.2017
 * Time: 19:32
 */
if (isset($_GET['lang'])){
    setcookie('lang', $_GET['lang'], time()+60*60*24);
    if (isset($_SERVER['HTTP_REFERER'])) {
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
}