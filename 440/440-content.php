<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-440">
    <!--BEGIN MENU -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!--BEGIN NAVMIN -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <!--LOGO-->
                <a class="brand" href="#"> <img class="a" src="images/sc-logo-main1.png" alt=""> </a>
            </div>
            <!--END NAVMIN -->
            <!--BEGIN MENU RIGHT-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--HOME-->
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Showcase</a></li>
                    <!--PAGES-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Highlights <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Coming soon</a></li>
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Page elements</a></li>
                            <li><a href="#">404</a></li>
                        </ul>
                    </li>
                    <!--SEVICES-->
                    <li>
                        <a href="#">Tour</a>
                    </li>
                    <!--BLOG-->
                    <li>
                        <a href="#">Examples</a>
                    </li>
                    <!--GALLERY-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Gallery random</a></li>
                            <li><a href="#">Gallery columns 2</a></li>
                            <li><a href="#">Gallery columns 3</a></li>
                            <li><a href="#">Gallery columns 4</a></li>
                        </ul>
                    </li>
                    <!--SHOP-->
                    <li>
                        <a href="#">Buy Theme</a>
                    </li>
                </ul>
            </div>
            <!--END MENU RIGHT-->
        </div>
    </nav>
    <!--END MENU -->
</div>