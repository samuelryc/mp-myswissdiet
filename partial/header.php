<!DOCTYPE html>
<html lang="<?php echo ($_SESSION['lang']); ?>">
    <head>
        <title><?php echo $action->getTitle(); ?></title>
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Samuel Ryc">

        <link rel="icon" href="images/favicon/favicon.ico" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/global.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="wrapper">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle Navigation</span>
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <div id="main-nav" class="navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="/"><?php echo $page->read('menu', 'm1');?></a>
                            </li>
                            <li>
                                <a href="/danny-chandler"><?php echo $page->read('menu', 'm2');?></a>
                            </li>
                            <li>
                                <a href="/slimming-concept"><?php echo $page->read('menu', 'm3');?></a>
                            </li>
                            <li>
                                <a href="/partnership"><?php echo $page->read('menu', 'm4');?></a>
                            </li>
                            <li>
                                <a href="/contact"><?php echo $page->read('menu', 'm5');?></a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img class="spacing-30-right" src="../images/flags/<?php echo $_SESSION['lang'];?>.png"><?php echo $action->getLang();?><i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu flags-inline" role="menu">
                                    <li>
                                        <a href="?lang=en"><img class="spacing-30-right" src="../images/flags/en.png" alt="<?php echo $page->read('alt', array('header', 'en'));?>">ENGLISH</a>
                                    </li>
                                    <li>
                                        <a href="?lang=fr"><img class="spacing-30-right" src="../images/flags/fr.png" alt="<?php echo $page->read('alt', array('header', 'fr'));?>">FRANÇAIS</a>
                                    </li>
                                    <li>
                                        <a href="?lang=ru"><img class="spacing-30-right" src="../images/flags/ru.png" alt="<?php echo $page->read('alt', array('header', 'ru'));?>">русский</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
