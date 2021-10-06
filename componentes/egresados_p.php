<?php
require_once "../conexion.php";
$conexion=conexion();
?>
<div class="row">
    <div class="col-sm-12">
        <p><h2>Egresados</h2></p>
        <table class="table">
            
            <tr style="font-size:12px">
                <td>Generacion</td>
                <td>Alunmos ingresados</td>
                <td>Alunmos egresados</td>
                <td>Eficiencia Terminal</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php
                $consulta="SELECT * from egresados_p_generacion";
                $result = mysqli_query($conexion,$consulta);
                while($ver=mysqli_fetch_row($result)){

                    $datos=$ver[0]."||".
                        $ver[1]."||".
                        $ver[2]."||".
                        $ver[3]."||".
                        $ver[4];          
            ?>
                    <tr style="font-size:12px">
                        <td><?php echo $ver[1]?></td>
                        <td><?php echo $ver[2]?></td>
                        <td><?php echo $ver[3]?></td>
                        <td><?php echo $ver[4]?></td>
                        

                        <td style="font-size:12px">
                            <button class="btn btn-warning">Editar</button>
                        </td>
                        <td style="font-size:12px">
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>       
            <?php
                }
            ?>           
        </table>
    </div>
</div>