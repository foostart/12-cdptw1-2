<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-417">
    <!--BEGIN MENU -->
    <nav class="navbar-default" role="navigation">
        <div class="container">
            <!--BEGIN NAVMIN -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--LOGO-->
                <h2 class="logo-text">A<span class="text-highlight">pp</span>ic</h2>
            </div>
            <!--END NAVMIN -->
            <!--BEGIN MENU RIGHT-->
            <div class="navbar-collapse" id="bs-slide-dropdown">
                <ul class="nav navbar-nav navbar-right">
                    <!--HOME-->
                    <li class="dropdown active-item">
                        <a href="#" class="dropdown-toggle active-item " data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Coming soon</a></li>
                            <li><a href="#">How it works</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <!--PAGES-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Coming soon</a></li>
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Page elements</a></li>
                            <li><a href="#">404</a></li>
                        </ul>
                    </li>
                    <!--SEVICES-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Price plans</a></li>
                        </ul>
                    </li>
                    <!--BLOG-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Blog style 1</a></li>
                            <li><a href="#">Blog style 1 fullwidth</a></li>
                            <li><a href="#">Blog style 2</a></li>
                            <li><a href="#">Blog style 2 fullwidth</a></li>
                            <li><a href="#">Blog style 3</a></li>
                            <li><a href="#">Blog style 3 fullwidth</a></li>
                        </ul>
                    </li>
                    <!--GALLERY-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Gallery random</a></li>
                            <li><a href="#">Gallery columns 2</a></li>
                            <li><a href="#">Gallery columns 3</a></li>
                            <li><a href="#">Gallery columns 4</a></li>
                        </ul>
                    </li>
                    <!--SHOP-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Single product</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!--END MENU RIGHT-->
        </div>
    </nav>
    <!--END MENU -->
</div>
