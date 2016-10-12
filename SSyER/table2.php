<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include("conexion.php");
    ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SS y ER</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="normalize.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="demo.css" /> -->

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
<form action="Salida.php" method="post">
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Tabla Ejemplo</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a>Dependencias Servicio</a>
                    </li>
                   
                </ul>
            </div>
           
        </div>
    </nav>

        <h1 style="font-size: 30px; color: #000; text-transform: uppercase; font-weight: 300; text-align: center; margin-bottom: 15px;">Dependencias para realizar Servicio Social</h1>
        <!-- Wrapper for slides -->
<div class="container">
  <div class="table-responsive">
   	<table>
     	<thead>
        <tr>
       		   <th >Dependencia</th> 
             <th >Proyecto</th>
             <th >Requerimientos</th>
             <th >Dirección</th>
             <th >Horario</th>
             <th >Solicitantes</th>
             <th >Opción</th>
        </tr>
  		</thead>
      
  <tbody>
      <?php
      
      $sql = "select IdDependencia, NombreDependencia,AreaDependencia,Requerimientos,Direccion,NumSolicitantes,Horario from dependencias";

      $result = mysqli_query($connection, $sql);
      $cont = 0;
      while($fila = mysqli_fetch_array($result)){
      $cont++;
      echo '<tr>';
          echo '<td>'.$fila["NombreDependencia"].'</td>';
          echo '<td>'.$fila["AreaDependencia"].'</td>';
          echo '<td>'.$fila["Requerimientos"].'</td>';
          echo '<td>'.$fila["Direccion"].'</td>';
          echo '<td>'.$fila["Horario"].'</td>';
          echo '<td>'.$fila["NumSolicitantes"].'</td>';
          echo '<td>
            <select class="form-control" name="Opcion'.$cont.'" style="width:auto" onchange="NoMoreSelection(this);">
              <option value="0" selected>-</option>
              <option  value="'.$fila["NombreDependencia"].'" label="Primera">Primera</option>
              <option  value="'.$fila["NombreDependencia"].'" label="Segunda">Segunda</option>
              <option  value="'.$fila["NombreDependencia"].'" label="Tercera">Tercera</option>
            </select>
            </td>';
        }
      ?>  
       </tbody>
	  	</table>
</div>

</div>
        
    <!-- Page Content -->
    <div class="container">
        <hr>
        <!-- Call to Action Section -->
        <div class="alert alert-success">
        <div class="col-md-4">
                    
                    <input type="submit" class="btn btn-lg btn-success btn-block" href="Salida.php" value="Guardar Selección">
                </div>
            <div class="row">
                <div class="col-md-7" align="center">
                    <p><strong>Gracias por participar en el proceso de selección de dependencias. El próximo periodo se te será notificada la respuesta. Normalmente es después de que iniciaron clases, tu Maestro de SS te lo hará saber.</strong></p>
                </div>
                
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Coordinación de SS y ER | FEI 2016</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Validation for Options in Dropdown menu -->

<script type="text/javascript">
 
    function NoMoreSelection(selectElement){
      var arraySelects = document.getElementsByClassName('form-control');
      //Getting selected index
      var selectedOption = selectElement.selectedIndex;
      //Disabling options at same index in other select elements
      for(var i=0; i<arraySelects.length; i++) {
      if(arraySelects[i] == selectElement)
      continue; //Passing the selected Select Element
      // arraySelects[i].options[selectedOption] = "0";
      if (arraySelects[i].options[selectedOption].text == "Primera"){
        arraySelects[i].options[1].disabled = true;
      }
      if (arraySelects[i].options[selectedOption].text == "Segunda"){
        arraySelects[i].options[2].disabled = true;
      }
      if (arraySelects[i].options[selectedOption].text == "Tercera"){
        arraySelects[i].options[3].disabled = true;
      }
      if (arraySelects[i].options[selectedOption].text == "-"){
        
      }

      }
       
      }
 </script>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<!--     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 -->    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
    <script src="jquery.stickyheader.js"></script>

    <!-- Script to Activate the Carousel -->
    <!--
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
-->
</body>
</form>
</html>