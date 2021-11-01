<?php
/*
    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';

    $dataUser = CRUD("SELECT * FROM usuarios;", "s");
    $cont = 0;
*/    
?>

<table class="table table-borderless table-responsive-xl">
    <thead class="bg-dark text-white">
        <tr>
            <th class="cHead">N°</th>
            <th class="cHead">Código</th>
            <th class="cHead">Nombre</th>
            <th class="cHead">Descripción</th>
            <th class="cHead">Precio Compra</th>
            <th class="cHead">Precio Venta</th>
            <th class="cHead">Fecha Ingreso</th>
            <th class="cHead">Fecha Vencimiento</th>
            <th class="cHead">Descuento</th>
            <th class="cHead">Estado</th>
        <!--<th class="cHead">Imagen</th>-->
            <th colspan="4" class="cHead">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($dataProd AS $result):?>
            <tr>
                <td class="cHead"><?php echo $cont +=1;?></td>
                <td class="cHead"><?php echo $result['cod_producto'];?></td>
                <td class="cHead"><?php echo $result['nombre_producto'];?></td>
                <td class="cHead"><?php echo $result['descripcion'];?></td>
                <td class="cHead"><?php echo $result['precio_compra'];?></td>
                <td class="cHead"><?php echo $result['precio_venta'];?></td>
                <td class="cHead"><?php echo $result['fecha_ingreso'];?></td>
                <td class="cHead"><?php echo $result['fecha_vencimiento'];?></td>
                <td class="cHead"><?php echo $result['descuento'];?></td>
                <td class="cHead">
                    <?php 
                        if($result['estado'] == 1)
                        {
                            echo "Habilitado";
                        }
                        else
                        {
                            echo "Deshabilitado";
                        }
                    ?> 
                </td>
                <td class="cHead"></td>
                <td class="cHead">
                    <?php if($result['estado'] == 1):?>
                        <a href="" class="btn btn-info btnHDProd" id-prod="<?php echo $result['id_producto'];?>" estado="0"><i class="fas fa-user-lock"></i></a>
                    <?php else:?>
                        <a href="" class="btn btn-info btnHDProd" id-prod="<?php echo $result['id_producto'];?>" estado="1"><i class="fas fa-user-check" ></i></a>
                    <?php endif?>    
                </td>
                <td class="cHead">
                    <a href="" class="btn btn-success updateProd" id-prod="<?php echo $result['id_producto'];?>" data-toggle="modal" ><i class="fas fa-user-edit"></i></a>
                </td>
                <td>
                <a href="" class="btn btn-danger BtnDrop-prod" id-prod="<?php echo $result['id_producto'];?>"><i class="fas fa-user-times"></i></a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>