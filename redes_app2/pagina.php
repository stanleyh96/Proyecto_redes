<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../redes_app2/css/pagina2.css">
  <script src="https://kit.fontawesome.com/b1bb7e3181.js" crossorigin="anonymous"></script>
  <title>Administrador</title>
</head>
<body>
  <!--nav-->
  <nav class="menu">
    <ul class="tabs">
      <li class="dropdown"><a href="#tab1"><i class="fas fa-home"></i> HOME</a></li>
      <li><a href="#tab2"><i class="fas fa-users"></i> Nosotros</a></li>
      
      <li><a href="#tab3"><i class="fas fa-running"></i> Ejercicios</a></li>
    </ul>
    
  </nav>
  <!--end nav-->

  <section class="container">
    <div class="container-registros">
      <article class="seccion" id="tab1">
        <div>
          <H2 id="lista-cliente"><i class="fas fa-users"></i>Una vida saludable </H2>
          <div><img src="" alt=""></div>
        </div>
        
        
       
       
        <!------------------------------------------------------------------------------------------->
      
        <!------------------------------------------------------------>
      </article>
      <article class="seccion" id="tab2">
        <H2 id="encabezado-vuelos"><i class="fas fa-plane-departure"></i> Registro de Vuelos</H2>
        <div id="vuelos" class="container-encabezado">
          <h2 class="encabezado">N° Vuelo</h2>
          <h2 class="encabezado">Origen</h2>
          <h2 class="encabezado">destino</h2>
        </div>
        <div id="container-lista-vuelos" class="container-table">
          
        </div >
        <H2 id="registrar"><i class="fas fa-plane-arrival"></i> Agregar Vuelo</H2>
        <form action="insertarvuelos.php" method="post" id="encabezado-add-container" class="container-encabezado">
          <h2 id="encabezado-add" class="encabezado">Origen</h2>
          <input name="origen" type="number" class="container-input" placeholder="Ingrese pais de origen" >
          <h2 id="encabezado-add" class="encabezado">destino</h2>
          <input name="destino" type="number" class="container-input" placeholder="Ingrese pais de destino" >
          <button type="submit" class="registrar">AGREGAR</button>
        </form>

      </article>
      <article class="seccion" id="tab3">
        <!--<i class="fas fa-hand-holding-usd"></i>-->
        <H2><i class="fas fa-ticket-alt"></i> Boletos</H2>
        <div class="container-encabezado">
          <h2 id="encabezado-boletos" class="encabezado">N° Boleto</h2>
          <h2 id="encabezado-boletos" class="encabezado">N° Vuelo</h2>
          <h2 id="encabezado-boletos" class="encabezado">DUI</h2>
          <h2 id="encabezado-boletos" class="encabezado">Nombre</h2>
          <h2 id="encabezado-boletos" class="encabezado">Destino</h2>
        </div>
        <div class="container-table-boletos">
         
        </div>
        <H2 id="registrar"><i class="fas fa-plane-arrival"></i> Vender boleto</H2>
        <form action="comprarvuelo.php" method="post" id="encabezado-add-container" class="container-encabezado">
          <h2 id="encabezado-add" class="encabezado">N°vuelo</h2>
          <input name="vuelo" type="number" class="container-input" placeholder="Ingrese numero vuelo">
          <h2 id="encabezado-add" class="encabezado">DUICliente</h2>
          <input name="dui" type="number" class="container-input" placeholder="Ingrese DUI">
          <h2 id="encabezado-add" class="encabezado">N°tarjeta</h2>
          <input name="tarjeta" type="number" class="container-input" placeholder="Ingrese numero de tarjeta">
          <button type="submit" class="registrar">AGREGAR</button>
        </form>

      </article>
    </div>
  </section>
  <!--scripts-->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>