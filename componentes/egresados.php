<?php
require_once "../conexion.php";
$conexion=conexion();
?>
<div class="row">
    <div class="col-sm-12">
        <p><h2>Egresados</h2></p>
        <table class="table">
            
            <tr style="font-size:8px">
                <td>A_Paterno</td>
                <td>A_Materno</td>
                <td>Nombre</td>
                <td>N. Cuenta</td>
                <td>Ingreso</td>
                <td>Egreso</td>
                <td>Email</td>
                <td>Teléfono</td>
                <td>Titulacion</td>
                <td>Opcion titulacion</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
                $consulta="SELECT * from egresados";
                $result = mysqli_query($conexion,$consulta);
                while($ver=mysqli_fetch_row($result)){

                    $datos=$ver[0]."||".
                        $ver[1]."||".
                        $ver[2]."||".
                        $ver[3]."||".
                        $ver[4]."||".
                        $ver[6]."||".
                        $ver[7]."||".
                        $ver[8]."||".
                        $ver[9]."||".
                        $ver[10];          
            ?>
                    <tr style="font-size:8px">
                        <td><?php echo $ver[1]?></td>
                        <td><?php echo $ver[2]?></td>
                        <td><?php echo $ver[3]?></td>
                        <td><?php echo $ver[4]?></td>
                        <td><?php echo $ver[5]?></td>
                        <td><?php echo $ver[6]?></td>
                        <td><?php echo $ver[7]?></td>
                        <td><?php echo $ver[8]?></td>
                        <td><?php echo $ver[9]?></td>
                        <td><?php echo $ver[10]?></td>

                        <td style="font-size:8px">
                            <button class="btn btn-warning">Editar</button>
                        </td>
                        <td style="font-size:8px">
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>       
            <?php
                }
            ?>           
        </table>
    </div>
</div>