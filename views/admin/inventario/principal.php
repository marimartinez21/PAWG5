<script src="../../public/js/funciones-navbar.js"></script>
<script src="../../public/js/funciones-inventario.js"></script>
<script src="../../public/js/js_funciones.js"></script>

<?php
    session_start();
    include '../../../models/conexion.php';
    include '../../../controllers/procesos.php';
    include '../../../models/procesos.php';

    $cont = 0;
    $pagina = 0; 

    if(isset($_GET['num']))
    {
        $pagina = $_GET['num'];
    }

    if(isset($_GET['num_reg']))
    {
        $registros = $_GET['num_reg'];
    }
    else
    {
        $registros = 5;
    }

    if(!$pagina)
    {
        $inicio = 0;
        $pagina = 1;
    }
    else
    {
        $inicio = ($pagina -1)* $registros;
    }

    $query = "SELECT * FROM productos";

    if(isset($_GET['like']))
    {
        $valor = $_GET['valor'];
        $queryLike = "SELECT * FROM productos WHERE id_producto LIKE '%$valor%' OR cod_producto LIKE '%$valor%'";
        $dataProd = CRUD($queryLike,"s");
    }
    else
    {
        $dataProd = CRUD("SELECT * FROM productos ORDER BY id_producto LIMIT $inicio,$registros", "s");
    }
        
    $num_registro = CountReg($query);

    /*ceil es una función de PHP sirve para redondear un numerero mayor por ejemplo: 2.5 lo redondea a
    un numero maximo a 3*/
    $paginas = ceil($num_registro / $registros);

?>

<div class="card">
    <div class="card-header bg-dark text-white">
        <b>Panel Inventario</b>
    </div>
    <div class="card-body">
        <div id="result-form">
            <div class="row">
                <div class="col-xs-12">
                    <div style="margin-bottom:10px;">
                        <div class="row">
                            <div class="col-md-6">
                                <select id="select-reg" class="custom-select" style="width:210px">
                                    <option value="0" disabled selected>Seleccione Nº Registros</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</3option>
                                    <option value="6">6</option>
                                    <option value="12">12</option>
                                    <option value="1000">Mostrar todos los datos</option>
                                </select>
                            </div> <!--
                            <div class="col-md-6">
                                <input type="search" class="form-control" placeholder="Busca Producto" 
                                id="like-prod" autocomplete="off">
                            </div> -->
                        </div>
                    </div>

                    <?php if($dataProd):?>
                        <?php include '../productos/table_productos.php'; ?>
                        <?php if($num_registro > $registros): ?>
                            <?php if($pagina == 1):?>
                                <div style="text-align: center;">
                                    <a href="#" class="btn pagina" v-num="<?php echo ($pagina - 0);?>" 
                                    num-reg="<?php echo $registros;?>">
                                        <i class="fas fa-arrow-alt-circle-left fa-2x"></i>
                                    </a>
                                    <a href="" class="btn pagina" v-num="<?php echo ($pagina + 1);?>" 
                                    num-reg="<?php echo $registros;?>">
                                        <i class="fas fa-arrow-alt-circle-right fa-2x"></i>
                                    </a>
                                </div>
                            <?php elseif($pagina == $paginas): ?>
                                <div style="text-align: center;">
                                    <a href="" class="btn pagina" v-num="<?php echo ($pagina - 1);?>" 
                                    num-reg="<?php echo $registros;?>">
                                        <i class="fas fa-arrow-alt-circle-left fa-2x"></i>
                                    </a>
                                    <a href="#" class="btn pagina" v-num="<?php echo ($pagina - 0);?>" 
                                    num-reg="<?php echo $registros;?>">
                                        <i class="fas fa-arrow-alt-circle-right fa-2x"></i>
                                    </a>
                                </div>
                            <?php else:?>
                                <div style="text-align: center;">
                                    <a href="" class="btn pagina" v-num="<?php echo ($pagina - 1);?>" 
                                    num-reg="<?php echo $registros;?>">
                                        <i class="fas fa-arrow-alt-circle-left fa-2x"></i>
                                    </a>
                                    <a href="" class="btn pagina" v-num="<?php echo ($pagina + 1);?>" 
                                    num-reg="<?php echo $registros;?>">
                                        <i class="fas fa-arrow-alt-circle-right fa-2x"></i>
                                    </a>
                                </div>
                            <?php endif ?>
                        <?php else:?>
                            
                        <?php endif?>
                    <?php else:?>
                        
                    <?php endif?>
                </div>
            </div>
        </div>
    </div>
</div>