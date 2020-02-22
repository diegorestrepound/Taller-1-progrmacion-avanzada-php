<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html"; charset="utf8"/>
        <title>Ejemplo 2 - MVC PHP</title>
        <style>
            body{
                background-color: #ccc;
                font-family: Arial;
                
            }
            #main-container{
                margin:150px auto;
                width: 600px;
            }
            table{
                margin-top: -130;
                background-color: white;
                text-aling: left;
                border-collapse: collapse;
                width: 100%;
                box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.400);
            }
            th, td{
                padding: 20px;
            }
            thead{
                background-color: #246355;
                border-bottom: solid 5px #0F362D;
                color:white;
            }
            tr:nth-child(even){
                background-color: #ddd;

            }
            tr:hover td{
                background-color: #369681; 
                color: white; 
            }

            form{
                padding: 20px;
                width: 300px;
                margin-top: -20;
                margin : 0px 600px;;
            }

            input{
                border: 0;
                outline: none;
                width:280px;
            }
            .field{
                border: solid 1px #ccc;
                padding: 10px;
                 
            }
            .field:focus{
                border-color:#632432; 
            }
            .center-content{
                text-aling: center;
            }
            .btnguardar{
                border-radius: 3px;
                display: inline-block;
                padding: 20px 15px;
                box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
            }
            .btn-guardar{
                font-size: 22px;
                color: white;
                background-color: #246355;
                margin-top: -3;
                padding-bottom: 12px ;
                box-shadow: 3px 3px 7px rgba(141, 10, 10, 0.561);
            }
            .btn-black{
                color: #ddd;
                background-color: #222;
            }
            .btn-guardar:hover{
                background-color: #26413b;
                margin-top: -2;
                padding-bottom: 12px;
                box-shadow: 1.5px 1.5px 5px rgba(141, 10, 10, 0.561);
            }	
            .btn-guardar:active{
                background-color:#162522;
                margin-top: -2;
                padding-bottom: 12px;
                box-shadow: none;
            }



        </style>
    </head>
    <body>

        <h1>Agregar estudiante</h1>
        <form name="form1" method="post" action="index1.php?accion=guardar">
        <p>Numero de documento: </p>
        <input type="text" class="field" name="txtnumero"><br>

        <p>Nombre: </p>
        <input type="text" class="field" name="txtnombre" ><br>

        <p>Fecha de nacimiento:</p>  
        <input type="text" class="field" name="txtf_nacimiento">  <br>

        <p class="center-content"><input type="submit" class="btn btn-guardar" name="btnguardar" value="Guardar"></p>
        </form>

        <div id="main-container">
            <table>
                <thead>
                    <tr>
                        <th>Id doc</th>
                        <th>numero de documento</th>
                        <th> nombre </th>   
                        <th>fecha de nacimiento</th>
                        <th> Modificar  </th>
                        <th> Eliminar  </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($consulta as $datos): ?>
                    <tr>
                        <td><?php print $datos['tipodoc']; ?></td>
                        <td><?php print $datos['numero']; ?></td>
                        <td><?php print $datos['nombre']; ?></td>
                        <td><?php print $datos['f_nacimiento']; ?></td>
                        <td><a href="index1.php?accion=modificar&id=<?php print $datos['tipodoc']; ?>">Modificar</a></td>
                        <td><a href="index1.php?accion=eliminar&id=<?php print $datos['tipodoc']; ?>">Eliminar</a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        
    </body>
</html>