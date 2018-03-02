<?php
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    switch ($lang) {
        case 'fr':
            define('currentLang', 'fr');
            break;
        case 'ru':
            define('currentLang', 'ru');
            break;
        default:
            define('currentLang', 'en');
            break;
    }