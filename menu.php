<nav class="navbar navbar-inverse">
      <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
        </button>
              <a class="navbar-brand" href="index.php">SRDI</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="Registro.php">Registro<span class="sr-only">(current)</span></a></li> -->
        <!-- <li><a href="clientes.php">Clientes</a></li>  -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Personas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="registro.php">Adicionar Persona</a></li>
            <li><a href="listarpersonas.php">Listar personas</a></li>
            <li><a href="buscarpersonas.php">Buscar persona</a></li>

          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            Certificados<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="registro.php">Adicionar Certificado</a></li>
            <li><a href="listarcertificado.php">Listar de Certificados</a></li>
            <li><a href="buscarcertificado.php">Buscar certificado</a></li>

          </ul>
        </li>


      </ul>

<!--       <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="button" class="btn btn-info"> Buscar </button>
      </form>
 -->      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">ATRAS</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OPCIONES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
