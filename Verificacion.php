<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validadcion</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen" title="no title">
    
</head>
<body>
  <div class="contenedor">
              <header class="center">
                <img  class ="img" src="images/logo1.png" alt="logo 1">
                
            </header>
    <div class="ver">
    <br>
      <h1>Datos guardados correctamente</h1>
      
      <h3>Datos personales del usuario</h3>
      <?php
      if(isset($_POST['nombre']) && trim($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        echo "Nombre: ".$nombre;
      }else{
        echo "No se ha ingresado El nombre.";
      }
      ?>
      <?php
      if(isset($_POST['apellido']) && trim($_POST['apellido'])){
        $apellido = $_POST['apellido'];
        echo " ".$apellido;
      }else{
        echo "No se ha ingresado El apellido.";
      }
      ?>
      <hr>
      <?php
       if(isset($_POST['opciones'])){
        $opcion = $_POST['opciones'];
        echo "Genero: ".$opcion;
      }else{
        echo "Rarito xd";
      }
      ?>
      <hr>
      <?php
      if(isset($_POST['telefono']) && trim($_POST['telefono'])){
        $telefono = $_POST['telefono'];
        echo "Telefono: ".$telefono;
      }else{
        echo "No se ha registrado numero de Telefono.";
      }
      ?>
      <hr>
      <?php
      if(isset($_POST['correo']) && trim($_POST['correo'])){
        $correo = $_POST['correo'];
        echo "E-mail de contacto: ".$correo;
      }else{
        echo "No se ha registrado numero de Telefono.";
      }
      ?>  
      <hr>
      <?php
        if(isset($_POST['ciudad']) && trim($_POST['ciudad'])){
          $cuidad = $_POST['ciudad'];
          echo "Ciudad de residencia: ".$cuidad;
        }else{
          echo "No se ha registrado Ciudad de residencia.";
        }
        ?>

      <hr>
      <h3>Carreara deseada</h3>
      
        <hr>
        <?php
        if(isset($_POST['carrera']) && trim($_POST['carrera'])){
          $carrera = $_POST['carrera'];
          echo "La carrerea que deseas es: ".$carrera;
        }else{
          echo "No se ha registrado carrera de interes.";
        }

       ?>
         <?php
        if(isset($_POST['cede']) && trim($_POST['cede'])){
          $cede = $_POST['cede'];
          echo "Y la cede que en la quieres estudiar es: ".$cede;
        }else{
          echo "No se ha registrado cede de desarrollo.";
        }
        ?>
        <hr>
        <?php
      if(isset($_POST['mensaje']) && trim($_POST['mensaje'])){
        $mensaje = $_POST['mensaje'];
        echo "Mensaje recibido: ".$mensaje;
      }else{
        echo "No hay mensaje.";
      }
      ?>

      
</div>
        <footer class="contenedor fin" >
                                            <div>
                                            <img class="img" src="images/logo2.png" alt="logo2">
                                            </div>
                                            <tr>
                                                <div>
                                                <td style="width: 200px;">
                                                <h6><span style="font-family: 'trebuchet ms', geneva; font-size: 8pt; color: #999999;">San Gil</span></h6>
                                                <p style="line-height: 14px;"><span style="color: #999999; font-size: 8pt;"><strong><span style="font-family: 'trebuchet ms', geneva;">Km 2 vía San Gil - Charalá,<br>Teléfonos: (7) 7245757 - 7246565<br><span style="color: #999999; font-size: 8pt;"><strong><span style="font-family: 'trebuchet ms', geneva;">San Gil, Santander, Colombia</span></strong></span></span></strong></span></p>
                                                </td>
                                                </div>
                                                <div>
                                                <td style="width: 200px;">
                                                <h6><span style="color: #999999; font-size: 8pt;"><strong><span style="font-family: 'trebuchet ms', geneva;">Chiquinquirá</span></strong></span></h6>
                                                <p style="line-height: 14px;"><span style="color: #999999; font-size: 8pt;"><strong><span style="font-family: 'trebuchet ms', geneva;">Calle 18 # 12-18</span></strong></span><br><span style="color: #999999; font-size: 8pt;"><strong><span style="font-family: 'trebuchet ms', geneva;">Teléfonos: (8) 7266058 Ext. 101<br>Chiquinquirá, Boyacá, Colombia</span></strong></span></p>
                                                </td>
                                                </div>
                                                <div>
                                                <td style="width: 200px;">
                                                <h6><span style="color: #999999; font-size: 8pt;"><strong><span style="font-family: 'trebuchet ms', geneva;">Yopal</span></strong></span></h6>
                                                <p style="line-height: 14px;"><span style="color: #999999; font-size: 8pt;"><strong><span style="font-family: 'trebuchet ms', geneva;">Calle 7 No. 20 -63<br>Teléfonos: PBX. 6341700<br>El Yopal, Casanare, Colombia</span></strong></span></p>
                                                </td>
                                                </div>
                                            </tr>
                                        </footer>

    </div>
</body>
</html>