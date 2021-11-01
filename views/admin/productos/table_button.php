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
            <th class="cHead">Nombre Producto</th>
            <th colspan="6" class="cHead">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($dataProd AS $result):?>
            <tr>
                <td class="cHead"><?php echo $result['nombre_producto'];?></td>
                <td class="cHead">
                    <?php if($result['estado'] == 1):?>
                        <a href="" class="btn btn-Warning btnHDProd" id-prod="<?php echo $result['id_producto'];?>" estado="0"><i class="fas fa-user-lock"></i></a>
                    <?php else:?>
                        <a href="" class="btn btn-Warning btnHDProd" id-prod="<?php echo $result['id_producto'];?>" estado="1"><i class="fas fa-user-check" ></i></a>
                    <?php endif?>    
                </td>
                <td class="cHead">
                    <a href="" class="btn btn-Info updateProd" id-prod="<?php echo $result['id_producto'];?>" data-toggle="modal" ><i class="fas fa-user-edit"></i></a>
                </td>
                <td class="cHead">
                <a href="" class="btn btn-danger BtnDrop-prod" id-prod="<?php echo $result['id_producto'];?>"><i class="fas fa-user-times"></i></a>
                </td>
            </tr>
        <?php endforeach?>
    </tbody>
</table>