<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Slackware">
    <meta name="author" content="lu9dce">
    <meta http-equiv="Cache-control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Slackar - Argentina</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Dorang main styles -->
	<link rel="stylesheet" href="assets/css/dorang.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">
    
    <!-- page navbar -->
    <nav class="page-navbar" data-spy="affix" data-offset-top="10">
        <ul class="nav-navbar container">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="http://slack.ar/slackware/" class="nav-link">Repository</a></li>
            <li class="nav-item"><a href="https://slackware.uk/" class="nav-link"><img src="assets/imgs/placeholder.svg"></a></li>
            <li class="nav-item"><a href="#" class="nav-link">Readme</a></li>
            <li class="nav-item"><a href="http://www.slackware.com/" class="nav-link">slackware.com</a></li>
            </li>
        </ul>
    </nav>
    <!-- page header -->
    <header class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <p class="header-subtitle">Repository 64bit by</p>
            <h1 class="header-title">Slackware Argentina Project</h1>
            <p class="header-subtitle">Just a group of friends with a passion for Slackware</p>
            <p style="color:#4BC6C3;"><b>Packages for slackware 15 (x64) :
            <?php
             echo file_get_contents('/var/www/html/total.txt')
            ?>
        </div></b></p>
    </header><!-- end of page header -->

    <!-- page container -->
    <div class="container page-container">
        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4">Explore The World</h6>
            <p class="mb-5">
            Slackware is a Linux distribution created by Patrick Volkerding
            in 1993. Originally based on Softlanding Linux System, 
            Slackware has been the basis for many other Linux distributions, 
            most notably the first versions of SUSE Linux distributions, 
            and is the oldest distribution that is still maintained.
            Slackware aims for design stability and simplicity and to
            be the most "Unix-like" Linux distribution. It makes as few
            modifications as possible to software packages from upstream
            and tries not to anticipate use cases or preclude user decisions.
            In contrast to most modern Linux distributions, Slackware
            provides no graphical installation procedure and no automatic
            dependency resolution of software packages. It uses plain text
            files and only a small set of shell scripts for configuration
            and administration. Without further modification it boots into
            a command-line interface environment. Because of its many
            conservative and simplistic features, Slackware is often
            considered to be most suitable for advanced and technically
            inclined Linux users
            </p>
        </div>

        </div><!-- end of container -->
    </div><!-- end of pre footer -->

    <center>
    <p class="infos">&copy; <script>document.write(new Date().getFullYear())</script>, Slackware&copy is a registered trademark of  <a href="http://slackware.com/trademark/trademark.php">Patrick Volkerding</a>
    <br>Linux&copy is a registered trademark of <a href="http://www.linuxmark.org/">Linus Torvalds</a></p>       
    <br>
    <br>
    </center>

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Dorang js -->
    <script src="assets/js/dorang.js"></script>

</body>
</html>
