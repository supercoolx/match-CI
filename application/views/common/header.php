<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="format-detection" content="telephone=no, email=no, address=no">
    <meta name="keywords" content="Scope,SES,エンジニア,営業代行,フリーランス,好きな仕事,理不尽,上下関係,組織構造,成島孝則">
    <meta name="description" content="フリーランスとして働く人達を増やしたい。そして、個々の能力が尊重される相乗効果の高い組織構造を作ることを目指しています。">
    <title><?php echo $title?$title.' | ':""; ?>Scope</title>
    <link rel="stylesheet" href="assets/layui/lib/layui-v2.5.4/css/layui.css" media="all">
    <link rel="stylesheet" href="assets/layui/css/public.css" media="all">
    <script src="assets/layui/lib/layui-v2.5.4/layui.js" charset="utf-8"></script>
    <script src="assets/layui/js/lay-config.js?v=1.0.4" charset="utf-8"></script>
    <script src="assets/script/jquery.min.js"></script>
    <script async="async" src="assets/script/script.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,900;1,700&family=Noto+Sans+JP:wght@400;700&family=Oswald&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css?ver=20211013">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
</head>

<body class="<?php if (isset($body_class)) {echo $body_class;} else {echo 'subpage fixed';}?>"
    data-browser="<?php if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false)) {echo 'ie';}?>">
    <input type="checkbox" id="menu-status" class="menu-status" name="menu-status">
    <header class="header">
        <div class="logo"><a href="<?php echo base_url() ?>"></a><img src="<?php echo base_url() ?>assets/images/logo.webp" alt=""></div>
        <div class="right"><label for="menu-status" aria-hidden="true" class="sp_nav_btn">
                <div class="bars"><span class="bar"></span></div>
            </label>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url() ?>#service">Service</a></li>
                    <li><a href="<?php echo base_url() ?>#office">Office</a></li>
                    <li><a href="<?php echo base_url() ?>#profile">Profile</a></li>
                    <li><a href="<?php echo base_url() ?>#vision">Vision</a></li>
                    <li><a href="<?php echo base_url() ?>#message">Message</a></li>
                    <li><a href="<?php echo base_url() ?>#recruit">Recruit</a></li>
                    <li><a href="<?php echo base_url() ?>#entry">Entry</a></li>
                    <li><a href="<?php echo base_url() ?>#company">Company</a></li>
                    <li><a href="<?php echo base_url() ?>#contacts" class="special"><svg viewBox="0 0 1024 1024"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M960 1024H64c-38.4 0-64-25.6-64-64V192c0-38.4 25.6-64 64-64h896c38.4 0 64 25.6 64 64v768c0 38.4-25.6 64-64 64zM128 896h768V256H128v640z"
                                    fill="#ffffff" p-id="2169"></path>
                                <path
                                    d="M512 697.6c-12.8 0-25.6-6.4-38.4-12.8l-448-448 76.8-76.8L512 563.2c83.2-76.8 275.2-281.6 409.6-409.6l76.8 76.8c-441.6 448-454.4 454.4-460.8 454.4-6.4 6.4-19.2 12.8-25.6 12.8z"
                                    fill="#ffffff" p-id="2170"></path>
                            </svg>Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>