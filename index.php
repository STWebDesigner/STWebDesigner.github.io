<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home | STWebDesigner</title>
        
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="author" content="Sophie Thomas"/>
        <meta name="description" content="Welcome to STWebDesigner. I am aspiring Web Designer with a passion for creating beautiful and functional websites and graphic designs, providing you with tips, tutorials and news about Web Design and Development."/>
        <meta name="keywords" content="STWebDesigner, Website, Web Design, Web Development, Tips, Tutorials, Videos, YouTube, Designs, Graphics, HTML, CSS"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
        <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
        <link href="assets/images/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    </head>

<?php include('elements/header.php'); ?>

<!-- PAGE CONTENT GOES HERE -->

        <!-- navigation -->
        <nav class="main-nav navbar navbar-default">

        <!-- toggle icon -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand menu_text" data-toggle="collapse" data-target=".navbar-collapse">Menu</div>
        </div>

    <!-- navigation links -->
        <div class="collapse navbar-collapse" class="navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php" class="active">Home</a></li
                ><li><a href="tutorials.php">Tutorials</a></li
                ><li><a href="about.php">About</a></li
                ><li><a href="contact.php">Contact</a></li>
            </ul>
        </div><!-- navbar-collapse -->
            
        </nav><!-- end navigation -->
    
        <div class="container">
        
            <div class="tuts-container">
                
            <div class="home-box-1">
                <img src="assets/images/thumbnails/free-tutorials.jpg" alt="Free Tutorials">
                <h3>Free Web Design &amp; Development Tutorials</h3>
                <p>Video Web Design and Development tutorials are produced free of charge and are available to watch on <a href="https://www.youtube.com/user/STWebDesigner" target="_blank" class="link">YouTube</a>.</p>
        <br />
                <div class="btn-wrapper">
                    <a href="tutorials.php" class="main-btn">All Tutorials</a>
                </div><!-- end .btn-wrapper --> 
            </div>
            
            <div class="home-box-2">
                <img src="assets/images/thumbnails/basic-responsive-site.jpg" alt="Latest Series">
                <h3>Code a Basic Responsive Website</h3>
                <p>In these series of videos I will teach you how to Code a Basic Responsive Website using HTMl and CSS from start to finish.</p>
        <br />
                <div class="btn-wrapper">
                    <a href="https://www.youtube.com/playlist?list=PLqerRVSEB3nixaJaRPAIshVJJ1VFzZTNy" target="_blank" class="main-btn">Watch Series</a>
                </div><!-- end .btn-wrapper --> 
            </div>
                
            </div><!-- end .tut-container -->
            
        </div><!-- end .container -->

<!-- END OF PAGE CONTENT -->

<?php include('elements/footer.php'); ?>