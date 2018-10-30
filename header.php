<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="img/fav.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrapValidator.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114861070-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114861070-3');
</script>
    <style type="text/css">
        @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #345ef2 !important;
            }
        }
        .navbar-color{
            background-color: #083c64!important;
        }
        .nav-color{
            color: #083c64!important;
        }
    </style>
</head>
<?php $a_url=basename($_SERVER['SCRIPT_FILENAME']);?>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-color">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="index.php">
                <strong><img style="width:210px;height:auto;" src="img/logo.png" alt="logo"></strong>
            </a>

            <!-- Collapse -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left -->
                <ul class="navbar-nav mr-auto nav">
                    <li class="nav-item <?php if($a_url=='index.php' || $a_url=='' ){ echo "active"; } ?>">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                     <li class="nav-item <?php if($a_url=='hospital-management-software.php' || $a_url=='hospital-management-software' ){ echo "active"; } ?>">
                        <a class="nav-link" href="hospital-management-software.php">Hospital</a>
                    </li>
                    <li class="nav-item <?php if($a_url=='healthcards.php' || $a_url=='healthcards' ){ echo "active"; } ?>">
                        <a class="nav-link" href="healthcards.php">Health Cards</a>
                    </li>
                     <li class="nav-item <?php if($a_url=='waste-management-system.php' || $a_url=='waste-management-system' ){ echo "active"; } ?>">
                        <a class="nav-link" href="waste-management-system.php">Waste Mangement</a>
                    </li>

                </ul>

                <!-- Right -->
                <ul class="navbar-nav nav-flex-icons">

                    <li class="nav-item">
                        <a href="#" data-toggle="modal" data-target="#centralModalInfo" class="nav-link border border-light rounded" target="_blank">
                            <i class="fa fa-user mr-2"></i>Register
                        </a>
                    </li>&nbsp;


                </ul>

            </div>

        </div>
    </nav>
    <!-- Navbar -->
