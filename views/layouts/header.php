<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="/templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="/templates/css/font-awesome.min.css" rel="stylesheet">
    <link href="/templates/css/prettyPhoto.css" rel="stylesheet">
    <link href="/templates/css/price-range.css" rel="stylesheet">
    <link href="/templates/css/animate.css" rel="stylesheet">
    <link href="/templates/css/main.css" rel="stylesheet">
    <link href="/templates/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="/templates/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">

                            <li><a href="/cart" id="cart"><i class="fa fa-shopping-cart" ></i> Корзина (<span id="cartCount"><?php echo Cart::countItems();?></span>)</a></li>
                            <?php if(User::isGuest()): ?>
                                <li><a href="/user/register"><i class="fa fa-lock"></i> Регистрация</a></li>
                                <li><a href="/user/login"><i class="fa fa-lock"></i> Вход</a></li>
                            <?php else:?>
                                    <li><a href="/cabinet"><i class="fa fa-user"></i> Аккаунт</a></li>
                                    <li><a href="/user/logout"><i class="fa fa-unlock"></i> Выход</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active">Главная</a></li>
                            <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="/catalog">Каталог</a></li>

                                </ul>
                            </li>

                            <li><a href="/contact">Контакты</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <form action="/search" method="post">
                            <input type="text" name="searchText" placeholder="Поиск...."/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">
                <h2>Category</h2>
                <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                    <?php
                    // // Список категорий для левого меню
                    $categories=Category::getCategoriesList();
                    if(!empty($categories)):?>
                        <?php foreach ($categories as $category ):?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#id-<?php echo $category->id;?>">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            <?php echo $category->name;?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="id-<?php echo $category->id;?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <?php
                                            $parent_id=$category->id;
                                            $subCategories=Category::getSubCategoriesList($parent_id);

                                            ?>

                                            <?php if (!empty($subCategories)):?>
                                                <?php foreach ($subCategories as $subCategory):?>
                                                    <li><a href="/category/<?php echo $category->id.'/';echo $subCategory->id;?>"><?php echo $subCategory->name;?> </a></li>
                                                <?php endforeach;?>
                                            <?php endif;?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>

                </div><!--/category-products-->

            </div>
        </div>