<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Contact | STWebDesigner</title>
        
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="author" content="Sophie Thomas"/>
        <meta name="description" content="You can contact me through Social Media and Email."/>
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
                <li><a href="index.php">Home</a></li
                ><li><a href="tutorials.php">Tutorials</a></li
                ><li><a href="about.php">About</a></li
                ><li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </div><!-- navbar-collapse -->
            
        </nav><!-- end navigation -->
    
        <div class="container">
    
            <h1>Contact</h1>
            <p>I would love to hear from you. If you wish to get in touch fill out the contact form below. If you hate contact form forms you can shoot me an <a href="mailto:stwebdesigner97@gmail.com" class="under-link">email</a> instead.</p>
    <br />
            <?php include('elements/includes/form.php'); ?>
            
        </div><!-- end .container -->

<!-- END OF PAGE CONTENT -->

<?php include('elements/footer.php'); ?>