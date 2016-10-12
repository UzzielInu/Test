<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SS y ER</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--For Icon in the Explorer-->
     <link rel="shortcut icon" href="ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

</head>

<body">
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Servicio Social</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="https://www.uv.mx/fei">Facultad de Estadística e Informática</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Carousel -->
    
    <!-- <header id="myCarousel" class="carousel slide">        
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" align="center-block" style="background-image:url('img/SS2.png');"></div>
            </div>
        </div>   
    </header>
          -->
    <!-- Page Content -->
    <h1 style="font-size: 30px; color: #000; text-transform: uppercase; font-weight: 300; text-align: center; padding:80px;padding-bottom:10px;">Gracias por Realizar tu selección<br>Tus datos han sido registrados</h1>
    <!-- <h1 style="font-size: 30px; color: #000; text-transform: uppercase; font-weight: 300; text-align: center; margin-bottom: 1px;">Tus datos han sido registrados</h1> -->

    <div class="container" style="padding-top:0px">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-14">
                <h1 class="page-header">
                    Dependencias:
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-trophy"></i> Opción 1</h4>
                    </div>
                    <div class="panel-body">
                        <p><strong><?php echo $_POST['Opcion1']; ?></strong></p>
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-paw"></i> Opción 2</h4>
                    </div>
                    <div class="panel-body text-">
                        <p><strong><?php echo $_POST['Opcion2']; ?></strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-coffee"></i> Opción 3</h4>
                    </div>
                    <div class="panel-body">
                        <p><strong><?php echo $_POST['Opcion3']; ?></strong></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <!-- <div class="alert alert-info">
            <div class="row">
                <div class="col-md-8">
                    <p><strong>Habiendo leído las instrucciones, esperamos que no tengas problemas con tu registro. Suerte con tu servicio y a dar lo mejor de tí</strong></p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-info btn-block" href="../Reg/form-1/index.html">Registrar</a>
                </div>
            </div>
        </div>

        <hr> -->

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Coordinación de SS y ER | FEI 2016</p>
                </div>
            </div>
        </footer>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
