<?php
    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';

    //$objeto = new ConexionBD();
    //$conexion = $objeto->get_conexion();
    
    $id_producto = $_POST['id_producto'];
    $cod_producto = $_POST['cod_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $precio_compra = $_POST['precio_compra'];
    $precio_venta = $_POST['precio_venta'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $descuento = $_POST['descuento'];

?>

<?php if(CRUD("UPDATE productos SET id_producto= '$id_producto', cod_producto='$cod_producto',nombre_producto='$nombre_producto',descripcion='$descripcion',precio_compra='$precio_compra',
    precio_venta='$precio_venta',fecha_ingreso='$fecha_ingreso',fecha_vencimiento='$fecha_vencimiento',descuento='$descuento' WHERE id_producto ='$id_producto'", "u")):?>
    <script>
        alertify.success("Producto actualizado...");
        $('#ProdUpd').modal('hide');
        $("#contenido").load("productos/principal.php");
    </script>
<?php else:?>
    <script>
        alertify.error("Error al actualizar Producto...");
        $('#ProdUpd').modal('hide');
        $("#contenido").load("productos/principal.php");
    </script>
<?php endif?>
