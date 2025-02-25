<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/estilos.css" media="screen" title="Contacto">

</head>
<body>

    <div class="contenedor">
        
            <header class="imagen">
                <img  class ="img" src="images/logo1.png" alt="logo 1">
                <h1>¿Deseas estudiar en Unisangil?</h1>
            </header>
        
    
        
            <div class="contenido">
                <form action="Verificacion.php" method="post">
                    
                        <p>Llena el siguiente formulario para registrarte en una de las carreras disponibles</p>
                            <fieldset>
                                <legend>Datos personales</legend>
                                <div class="datos">
                                <label for="nombre">Nombres: 
                                    <input type="text" name="nombre" id="nombre" placeholder="Pancho Pepe" required>
                                    
                                </label>
                                <label for="apellido">Apellidos:
                                    <input type="text" name="apellido" id="apellido" placeholder="Sanchez Rodíguez" required>
                                </label>
                                    <br>
                                <label for="Telefono">Telefono:
                                    <input type="tel" name="telefono" id="telefono" placeholder="Numero de telefono" required>
                                </label>
                                    <br>
                                <label for="email">Correo:
                                    <input type="email" name="correo" id="email" placeholder="Tu correo electronico" required>
                                </label>   
                                <label for="ciudad">Ciudad
                                    <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad de residencia" required>
                                </label>
                                </div>
                                <hr>                                     
                                        <h2>Género</h2>
                                        
                                            <label for="mas">Masculino
                                                <input type='radio' name="opciones" id='mas' value='Masculino' required>
                                            </label>  
                                            <label for="fem">Femenino
                                                <input type='radio' name="opciones" id='fem' value='Femenino' required>
                                            </label>
                                            <label for="otr">Otro
                                                <input type='radio' name="opciones" id='otr' value='otro' required>
                                            </label> 
                                    </fieldset>   
                                    <fieldset>
                                        <legend>Datos academicos</legend>
                                        <label for="Carrera">Carreras disponibles
                                            <select name="carrera" required>
                                                <option value="">- Selecciona una -</option>
                                                <option value="Administracion de Empresas">Administracion de Empresas SNIES 11001.</option>
                                                <option value="Contaduri Publica">Contaduri Publica SNIES 15683.</option>
                                                <option value="Derecho">Derecho SNIES 3835.</option>
                                                <option value="Inngeniería de Sistemas">Inngeniería de Sistemas SNIES 4350.</option>                                            
                                                <option value="Tecnologia de Sitemas de Informacion">Tecnologia de Sitemas de Informacion SNIES 11950.</option>
                                                <option value="Tecnología en Gestión de Empresas de Economía Solidaria">Tecnología en Gestión de Empresas de Economía Solidaria SNIES 19470.</option>
                                            </select> 
                                            
                                            <p>Escoje una de nuestras cedes</p>
                                        
                                            <label for="San-Gil">San-Gil
                                                <input type="checkbox" name="cede" value="San-Gil" id="San-Gil " >
                                            </label>

                                            <label for="Yopal">Yopal
                                                <input type="checkbox" name="cede" value="Yopal" id="Yopal" >
                                            </label>

                                            <label for="Chiquinquirá">Chiquinquirá
                                                <input type="checkbox" name="cede" value="Chiquinquirá" id="Chiquinquirá" >
                                            </label>
                                            <hr>
                                            <div class="comentarios">
                                            <h2>Comentarios</h2>
                                                <label for="mensaje">
                                                <textarea name="mensaje"  id="mensaje" required></textarea>
                                            </label>
                                            </div>   
                                    </fieldset>

                                                   
                                        
                        

                                  
                                <div class="botones">
                                    <input type="submit" value="Registrar" class="boton">
                                    <input type="reset" value="Cancelar" class="boton">
                                </div>
                </form>
            </div>
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
                                   
</body>
</html>