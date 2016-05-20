<?php
  include 'conexion.php';

  $sql ="select * from informacion";
  $result = mysql_query($sql);

?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Lista de Certificados</title>
    <link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
    <script type="text/javascript" src="js/jquery-2.2.3.js"></script>    
    <script type="text/javascript" src="js/bootstrap.js"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include 'menu.php' ?>
        </div>
        <div class="col-md-12">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Tratamiento</th>
                <th>Cliente</th>
                <th>Otro</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  while ($row = mysql_fetch_row($result)){ 
              ?>
                  <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>               
                    <td><?= $row[2] ?></td>               
                    <td><?= $row[4] ?></td>               
                    <td><?= $row[3] ?></td>               
                  </tr>         
              <?php
                } 
              ?>              
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
      $('.dropdown-toggle').dropdown();
    </script>
    
  </body>
</html>