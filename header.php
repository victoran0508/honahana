<!-- HTMLコード -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">

    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-3.4.1.min.js"></script>
</head>

<body>
    <header class="page-header">
        <div class="header-inner">
            <a href="<?php home_url(); ?>/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" /></a>
            <a href="javascript:void(0)" class="nav-open"><i></i><span></span></a>
            <div class="nav-wrapper">
                <ul class="nav">
                    <li><a href="/concept">Concept</a></li>
                    <li><a href="/arrange">Arrange</a></li>
                    <li><a href="/bridal">Bridal</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/contact" class="contact"><img class="img" src="<?php echo get_template_directory_uri(); ?>/assets/img/envelope.svg" alt="" /></a></li>
                </ul>
            </div>
        </div>
    </header>
