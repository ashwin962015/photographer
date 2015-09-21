<html>
<head>
    <title>BookPhotographer.com | Book photographer for your special moments</title>

    <link href='images/favicon.ico' rel='shortcut icon' />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-52152149-1', 'photographers.com.ng');
        ga('send', 'pageview');

    </script>

</head>

<body>


<?php
$currentPage = max(explode('/', $_SERVER['REQUEST_URI']));
?>

<!-- Navigation  -->
<nav class="navbar navbar-fixed-top navbar-white" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img
                    src="http://app.photographers.com.ng/img/logo1.png"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li <?php if($currentPage == 'login.php') { echo 'class="blue-btn"'; } ?>><a href="login.php">Log in</a></li>
                <li <?php if($currentPage == 'contact.php') { echo 'class="blue-btn"'; } ?>><a href="contact.php">Contact Us</a></li>
                <li <?php if($currentPage == 'howitworks.php') { echo 'class="blue-btn"'; } ?>><a href="howitworks.php">How it works</a></li>
                <li <?php if($currentPage == 'list.php') { echo 'class="blue-btn"'; } ?>><a href="list.php">List your business</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navigation ends -->