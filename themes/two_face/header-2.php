<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Face</title>
    <link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;600&family=Noto+Sans+JP:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    
    <?php wp_head();?>
</head>
<body>
<div class="wrapper">
        <header id="header_tattoo" class="header flex-md-row">
            <div class="header-title">
                <a href="<?php echo home_url( '/' ); ?>">
                    <h2>
                        TWO FACE
                        <p>Vintage & Used Clothing</p>
                    </h2>
                </a>
            </div>
            
            <div id="header-trigger">
                <a href="javascript:void(0);">
                    <span></span>
                </a>
            </div>
        </header>
<!-- ----------ハンバーガーメニュー---------------- -->
        <nav id="gnav" style="display:none;">
            <div id="gnav_trigger">
               <a href="javascript:void(0)">
                   <span></span>
               </a> 
            </div>
            <div>
                <ul>
                    <li><a href="<?php echo home_url( '/' );?>">HOME</a></li>
                    <li><a href="<?php echo home_url( '/blog' );?>">BLOG</a></li>
                    <li><a href="<?php echo home_url( '/tattoo' );?>">TATTOO</a></li>
                    <li><a href="http://www.ne.jp/asahi/yasuda/wet/">YASUDA&nbsp;WEBSITE</a></li>
                    <li><a href="https://twofaceshop.thebase.in/">ONLINE&nbsp;SHOP</a></li>

                </ul>
                <ul>
                    <li>
                        <a href="https://www.instagram.com/twoface.shop/"><i class="fab fa-instagram"></i></a>
                        <a href="https://line.me/R/ti/p/%40twoface"><i class="fab fa-line"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        
<!-- ----------ーーーーーーーーーーー---------------- -->

