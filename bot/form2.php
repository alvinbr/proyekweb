<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Alpin Website</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"><i class="fa fa-play fa-rotate-270"></i> Promenz</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Beranda</a></li>
        <li><a href="form.html">Form Admin</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>Promenz</h1>
          <p>Smile • Effort • Thanks</p>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Form Section -->
<div id="form">
    <div class="container">
        <div class="section-title text-center center">
            <h2>Data Admin</h2>
            <hr>
          </div>
      <center>
      <table class="table2">
            <form action="form2.php" method="GET" align="center">
            <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $_GET['nama'] ?></td>
            </tr>
            <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><?php echo $_GET['password'] ?></td>
            </tr>
            <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $_GET['jenis_kelamin'] ?></td>
            </tr>
            <tr>
                    <td>Keahlian</td>
                    <td>:</td>
                    <td><?php if (isset($_GET['keahlian'])!='')
                                {
                                    echo $_GET['keahlian']."</br>";
                                }
                              if (isset($_GET['keahlian1'])!='')
                                {
                                    echo $_GET['keahlian1']."</br>";
                                }
                              if (isset($_GET['keahlian2'])!='')
                                {
                                     echo $_GET['keahlian2']."</br>";
                                } ?></td>
            </tr>
            <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo $_GET['tempat_lahir'] ?></td>
            </tr>
            <tr>
                    <td>Deskripsi </td>
                    <td>:</td>
                    <td><?php echo $_GET['deskripsi'] ?></td>
            </tr>
            </form>
        </table>
      </center>
    </div>
  </div>

<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2016 Spectrum. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>