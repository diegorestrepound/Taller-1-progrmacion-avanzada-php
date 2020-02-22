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
            .btnguardarcambios{
                border-radius: 3px;
                display: inline-block;
                padding: 20px 15px;
                box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
            }
            .btn-guardarcambios{
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
            .btn-guardarcambios:hover{
                background-color: #26413b;
                margin-top: -2;
                padding-bottom: 12px;
                box-shadow: 1.5px 1.5px 5px rgba(141, 10, 10, 0.561);
            }	
            .btn-guardarcambios:active{
                background-color:#162522;
                margin-top: -2;
                padding-bottom: 12px;
                box-shadow: none;
            }
        </style>
    </head>
    <body>
        <?php foreach($consulta as $datos):?>
        <h1>Modificar información</h1>
        <br>
        <form name="form1" method="post" action="index1.php?accion=guardarCambiosEstudiante">
        
        <p>Tipo doc:</p>
        <input type="text" class="field" name="txttipodoc" value="<?php print $_REQUEST['tipodoc'];?>" readonly>
        <p>Numero: </p>
        <input type="text" class="field" name="txtnumero" value="<?php print $datos['numero'];?>">
        <p>Nombre:</p>
        <input type="text" class="field" name="txtnombre" value="<?php print $datos['nombre'];?>">
        <p>Fecha de nacimiento:</p>
        <input type="text" class="field" name="txtf_nacimiento" value="<?php print $datos['f_nacimiento'];?>">
        
        <p><input type="submit" class="btn btn-guardarcambios" name="btnguardarcambios" value="Guardar Cambios"></p>
        </form>
        <?php endforeach;?>
    </body>
</html>