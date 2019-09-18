<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-440" >
    <div class="container">
        <div class="row">
            <!-- BEGIN CONTENT -->
            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top sc-nav " role="navigation" >
                <div class="nav-container container">
                    <div class="navbar-header">
                        <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="#"> <img class="a" src="images/sc-logo-main1.png" alt=""> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul id="menu-main-menu" class="nav navbar-nav">
                            <li>
                                <a href="http://pixelgrapes.com/demo/scribe/">Home</a></li>
                            <li class=" dropdown active">
                                <a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" aria-haspopup="true">Showcase <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li class=" active"><a href="https://scribe.pixelgrapes.com/app-showcase/">Phone App</a></li>
                                    <li><a href="#">Tablet App</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Highlights</a></li>
                            <li><a href="#">Tour</a></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" aria-haspopup="true">Examples <span class="caret"></span></a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Countdown</a></li>
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Buy Theme</a></li>
                        </ul></div></div></div>
            <!-- END CONTENT -->
            <script src="js/scripts.js" type="text/javascript"></script>
        </div>
    </div>
</div>