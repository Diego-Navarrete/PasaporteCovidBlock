<?php  include ("conexion.php ");

if ($_SERVER['REQUEST_METHOD']  == 'POST') {

  if (strlen($_POST['Tipod']) >= 1 &&  
  strlen($_POST['numero']) >= 1 &&
  strlen($_POST['nombreapellido']) >= 1 &&
  strlen($_POST['ciudad']) >= 1 &&
  strlen($_POST['regimen']) >= 1 &&
  strlen($_POST['eps']) >= 1 &&
  strlen($_POST['centroa']) >= 1 &&
  strlen($_POST['fechap']) >= 1 &&
  strlen($_POST['resultado']) >= 1 &&
  strlen($_POST['tipov']) >= 1 &&
  strlen($_POST['lugar']) >= 1 &&
  strlen($_POST['FechaP']) >= 1 &&
  strlen($_POST['FechaS']) >= 1) {

    $TipoD = htmlentities($_POST['Tipod']);
    json_encode ($TipoD);
    $numero = htmlentities($_POST['numero']);
    json_encode ($numero);
    $nombreapellido = htmlentities($_POST['nombreapellido']);
    json_encode ($nombreapellido);
    $ciudad = htmlentities($_POST['ciudad']);
    json_encode ($ciudad);  
    $regimen = htmlentities($_POST['regimen']);
    json_encode ($regimen); 
    $eps = htmlentities($_POST['eps']);
    json_encode ($eps); 
    $centroa = htmlentities($_POST['centroa']);
    json_encode ($centroa); 
    $fechap = htmlentities($_POST['fechap']);
    json_encode ($fechap); 
    $resultado = htmlentities($_POST['resultado']);
    json_encode ($resultado); 
    $tipov = htmlentities($_POST['tipov']);
    json_encode ($tipov); 
    $lugar = htmlentities($_POST['lugar']);
    json_encode ($lugar); 
    $FechaP = htmlentities($_POST['FechaP']);
    json_encode ($FechaP); 
    $FechaS = htmlentities($_POST['FechaS']);
    json_encode ($FechaS); 
           
         $consulta = "INSERT INTO registro (TIPO_DOCUMENTO, NUMERO_DOCUMENTO, NOMBE_APELLIDO, CIUDAD, REGIMEN, EPS, CENTRO_ATENCION, FECHA_PRUEBA, RESULTADO, TIPO_VACUNA, LUGAR_VACUNACION, FECHA_PRIMERA_DOSIS, FECHA_SEGUNDA_DOSIS) 
            VALUES ('$TipoD','$numero','$nombreapellido','$ciudad','$regimen','$eps','$centroa', '$fechap', '$resultado', '$tipov', '$lugar', '$FechaP', '$FechaS')";

            //var_dump($consulta);
            try{
              $resultado = mysqli_query ($conex,$consulta);
              $fields = array('TIPO_DOCUMENTO' => $TipoD, 'NUMERO_DOCUMENTO' => $numero, 'NOMBE_APELLIDO' => $nombreapellido, 'CIUDAD' => $ciudad,'REGIMEN' => $regimen, 'EPS' => $eps, 'CENTRO_ATENCION' => $centroa,'FECHA_PRUEBA' => $fechap, 'RESULTADO' => $resultado, 'TIPO_VACUNA' => $tipov, 'LUGAR_VACUNACION' => $lugar, 'FECHA_PRIMERA_DOSIS' => $FechaP, 'FECHA_SEGUNDA_DOSIS' => $FechaS);
              

              $fields_string = http_build_query($fields);
              $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, "http://192.168.10.3:5000/new_transactions/");
              curl_setopt($ch, CURLOPT_POST, 1);
              curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string );
              $data = curl_exec($ch);
              curl_close($ch);
             
              // redireccione a la pagina o coloque el mensaje de datos guardados

            } catch (Exception $e) {
              echo 'ERROR:'.$e->getMessage();
            } 
     } else {    
      echo 'error en los datos';
   }
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>CARGUE EXITOSO</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Registro.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
    }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Registro">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body>
    <form action="Cargue.php" method="post">
    <?php  include ("conexion.php "); ?>
        <nav class="u-body"><header class="u-clearfix u-gradient u-header u-header" id="sec-7aea"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
  </symbol>
  </defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-1-base" href="Pasaporte-Covid.php" target="_blank" style="padding: 10px 20px;">¿QUÈ ES EL PASAPORTE COVID?</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-1-base" href="Para-que-sirve.php" target="_blank" style="padding: 10px 20px;">PARA QUE SIRVE</a>
            </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-palette-1-base" href="Estadisticas.php" style="padding: 10px 20px;">ESTADISTICAS</a>
            </li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Pasaporte-Covid.php" target="_blank" style="padding: 10px 20px;">¿QUÈ ES EL PASAPORTE COVID?</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Para-que-sirve.php" target="_blank" style="padding: 10px 20px;">PARA QUE SIRVE</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Estadisticas.php" style="padding: 10px 20px;">ESTADISTICAS</a>
</li></ul>
</div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <img class="u-image u-image-round u-radius-10 u-image-1" src="images/Uniminuto.png" alt="" data-image-width="266" data-image-height="189">
      </div></header>
      <section class="u-align-center u-clearfix u-section-1" id="carousel_aa4a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-palette-1-light-1 u-text-1">DATOS INGRESADOS CORRECTAMENTE</h2>
        <div class="u-align-center u-form u-form-1">
        </div>
            <div class="u-align-left u-form-group u-form-submit">
            <a href="portada.html" data-page-id="359922106" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-10">REGRESAR</a>
            <a href="Consultas.php" data-page-id="359922106" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-10">CONSULTAR</a>
          </form>
        </div>
    </form>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-gradient u-footer" id="sec-c6e2"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Creado Por: Diego Fernando Navarrete Acuña&nbsp;<br>Liderado Por: Jaider Ospina Navas
        </p>
      </div></footer>
  </form>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.3.5/web3.min.js"></script>
  <script type="text/javascript" src="src/utils.js"></script>
  <script type="text/javascript" src ="src/index.js"></script>
  </body>
</html>
