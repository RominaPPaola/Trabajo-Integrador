<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!--mi hoja de estilos-->
  <link rel="stylesheet" href="tp.integrador.css">
  <title>TP Integrador</title>

</head>

<body>

  <nav class="navbar bg-body-tertiary: " style="background-color: #3b454d;">
    <div class="container-fluid"><!--barra griz de navegacion-->
      <a class="navbar-brand" href="/Trabajo-integrador/tp.integrador.php">
        <img src="img/codoacodo.png" alt="Logo" width="120" height="80" class="d-inline-block align-text">
        Conf Bs As
      </a>
      <div class="boton">
        <button type="button" class="btn b1">La conferencia</button>
        <a href="ListaOradores.php" type="button" class="btn b2">Los oradores</a>
        <button type="button" class="btn b3">El lugar y la fecha</button>
        <button type="button" class="btn b4"><a href="#serorador">Conviértete en orador</a></button>
        <a href="indexintegr.html" type="button" class="btn b5">Comprar tickets</a>
      </div>
    </div>
  </nav>

  <div class="card text-bg-dark" >
    <img src="img/ba1.jpg" class="card-imagen-ba1" alt="fondo" >
    <div class="texto-sobre-ba1">
      <h5 class="card-title">Cofn Bs As</h5>
      <p class="card-text"> Bs As llega por primera vez a Argentina. Un evento para compartir con<br>
        nuestra comunidad el conocimiento y experiencia de los expertos que<br>
        estan creando el futuro de internet. Ven a conocer a miembros del<br>
        evento a otros estudiantes de Codo a Codo y los oradores de primer<br>
        nivel que tenemos para ti. Te esperamos!</p>
      <div class="button">
        <button type="button" class="btn btn-outline-light"><a href="#serorador">Quiero ser orador</a></button>
        <a type="button" class="btn btn-success" href="indexintegr.html">Comprar ticket</a>
      </div>
    </div>
  </div>

  <div class="text-center">
    <h4>CONOCE A LOS</h4>
    <h2>ORADORES</h2>
  </div>

  <!--contenedor de los tres oradores-->
  <div class="formCar row row-cols-1 row-cols-md-5 g-4">
    <div class="col">
      <div class="card">
        <img src="img/steve.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <button type="button" class="btn btn-warning" style="font-size:xx-small"><b>JavaScript</b></button>
          <button type="button" class="btn btn-info" style="font-size:xx-small"><b>React</b></button>
          <h5 class="card-title">Steve Jobs</h5>
          <p class="card-text">Lorem iosum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis
            deleniti, totam fuga sequi iste! Facili explicado repellat ut similique incidunt? Ullam nobis beatae,
            corporis facilis veniam magni ratione!</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img/bill.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <button type="button" class="btn btn-warning" style="font-size:xx-small"><b>JavaScript</b></button>
          <button type="button" class="btn btn-info" style="font-size:xx-small"><b>React</b></button>
          <h5 class="card-title">Bill Gates</h5>
          <p class="card-text">Lorem iosum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis
            deleniti, totam fuga sequi iste! Facili explicado repellat ut similique incidunt? Ullam nobis beatae,
            corporis facilis veniam magni ratione!</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="img/ada.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <button type="button" class="btn btn-secondary" style="font-size:xx-small"><b>Negocios</b></button>
          <button type="button" class="btn btn-danger" style="font-size:xx-small"><b>Startups</b></button>
          <h5 class="card-title">Ada Lovelaces</h5>
          <p class="card-text">Lorem iosum dolor sit amet, consectetur adipisicing elit. Et voluptatibus perferendis
            deleniti, totam fuga sequi iste! Facili explicado repellat ut similique incidunt? Ullam nobis beatae,
            corporis facilis veniam magni ratione!</p>
        </div>
      </div>
    </div>
  </div><br><br>
  </div>

<!--seccion imagen y texto 50% -->
<div class="section-honolulu" >
  <div class="image col-6">
    <img src="img/honolulu.jpg" alt="Imagen" class="honolulu" >
  </div>
  <div class="texto-de-tarjeta col-6">
    <h3>Bs As - Octubre</h3>
    <p class="parrafo">
      Buenos Aires es la provincia y localidad mas grande del estado de
      Argentina, en los Estados Unidos. Honolulu es la más sureña de entre
      las principaples ciudades estadounidenses. Aunque el nombre de Honoluluse se refiere
      al area urbana en la costa sureste de la islade de Oahu, la ciudad y
      el condado de Honolulu han formado una ciudad-condado consolidada que
      cure toda la ciudad (aproximadamente 600 km2 de superficie).
    </p>
    <button type="button" class="btn btn-outline-light center-boton">Conocé más</button>
  </div>
</div>

    <div class="text-center" id="serorador">
      <h4>CONVIERTETE EN UN</h4>
      <h2>ORADOR</h2>
      <p>Anótate como orador para dar una charla ingite. Cuéntanos de qué quieres hablar!</p>
    </div>

    <!--el formulario-->
    <div class="container form">
      <form method="post">
        <div class="row">
          <div class="col">
    	      <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
    	      <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
          </div>
          <div class="col">
            <input type="integer" name="telefono" class="form-control" placeholder="Telefono" required>
            <input type="mail" name="mail" class="form-control" placeholder="E-mail" required>
          </div>
          <div class=""><br><br>
            <label for="floatingTextarea"> Sobre qué quieres hablar?</label>
            <input type="text" name="titulo" class="form-control" placeholder="Titulo" required>
            <input type="text" name="tema" class="form-control" placeholder="Cuerpo del mensaje" required>
          </div>
          <div class="d-grid gap-2"><!--boton verde de enviar-->
    	      <input type="submit" name="register" class="btn btn-green">
          </div>
        </div>
      </form>  
    </div>
    
    <?php 
      include("registrador.php");
    ?>
    <!--barra final-->
    <nav class="navbar" style="background-color: #2e4d64;">
      <!-- Navbar content -->
      <button type="button" class="btn b1 ">Preguntas Frecuentes </button>
      <button type="button" class="btn b1">Contáctenos</button>
      <button type="button" class="btn b1">Prensa</button>
      <button type="button" class="btn b1">Conferencias</button>
      <button type="button" class="btn b1">Términos y condiciones</button>
      <button type="button" class="btn b1">Privacidad</button>
      <button type="button" class="btn b1">Estudiantes</button>
    </nav>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>