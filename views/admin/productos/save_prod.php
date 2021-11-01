<?php
    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';

    $objeto = new ConexionBD();
    $conexion = $objeto->get_conexion();

    $id_producto = $_POST['id_producto'];
    $cod_producto = $_POST["cod_producto"];
    $nombre_producto = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion'];
    $precio_compra = $_POST['precio_compra'];
    $precio_venta = $_POST['precio_venta'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $estado = $_POST['estado'];
    $descuento = $_POST['descuento'];
        
    //Obtener los atributos del archivo.
    $imgFile = $_FILES['imagen']['name'];
    $tmp_dir = $_FILES['imagen']['tmp_name'];
    $tmpSize = $_FILES['imagen']['size'];

    $path = "../../../public/img/productos/";
    
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));

    $newName = $id_producto.".".$imgExt;

    $carga_img = CargaIMG($tmp_dir,$newName,$path);

    $tabla ="productos";
    $campos = " id_producto, cod_producto, nombre_producto, descripcion, precio_compra, precio_venta, fecha_ingreso, fecha_vencimiento, estado, descuento, imagen";
    $valores = " '$id_producto','$cod_producto', '$nombre_producto','$descripcion','$precio_compra','$precio_venta','$fecha_ingreso','$fecha_vencimiento','1','$descuento','$newName'";

    $query1 = "SELECT *FROM productos WHERE id_producto = '$id_producto'";

    //$insertData = $conexion->query("INSERT INTO $tabla($campos) VALUES($valores)");
?>
    <?php if(CountReg($query1)!= 0):?>
        <script>
            alertify.error("producto ya existe...");
            $("#contenido").load("productos/principal.php");
        </script>
    <?php else:?>
        <?php switch($carga_img)
        {
            case 0;
                echo'<script>
                        alertify.error("Datos registrados...");
                        $("#contenido").load("productos/principal.php");
                    </script>';
                break;
            case 1:
                $query2 = "INSERT INTO $tabla($campos) VALUES($valores)";
                if(CRUD($query2,"i"))
                {
                    echo ' <script>
                        alertify.success("Datos registrados...");
                        $("#contenido").load("productos/principal.php");
                    </script>';
                }
                else
                {
                    echo '<script>
                        alert("Error al registrar datos...");
                        $("#contenido").load("productos/principal.php");
                    </script>';
                }
            break;
        }
        ?>
    <?php endif?>