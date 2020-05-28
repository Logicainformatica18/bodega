<?php
include("head.php");
include('php/functionproductos.php');
?>

<!--overview start-->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><i class="fa fa-table"></i> Categorías</h3>
        <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-table"></i>Categorías</li>
        </ol>
    </div>
</div>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
    onclick="productosNuevo();">Agregar</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Editar productos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form accept-charset="utf-8" id="productos" name="productos" method="POST" action=""
                    enctype="multipart/form-data">
                    <div class="col s12 l6">
                        <input type="hidden" name="codigo">
                        Categoria <input name="nombre" type="text" class="form-control" />
                        Descripción <input name="descripcion" type="text" class="form-control" />
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" name="nuevo" value="Nuevo" class="btn btn-secondary"
                    onclick="productosNuevo(); return false" />

                <input type="button" name="btn" value="Grabar" class="btn btn-success"
                    onclick="productosInsert();    productosNuevo(); return false" />

                <input type="submit" name="modificar" value="Modificar" class="btn btn-primary"
                    onclick="productosUpdate(); return false" />
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<h6><b>Buscar</b></h6>
<input type="text" class="form-control" name="criterio" onkeypress="productosSearch();">

<p></p>

</form>




<div id="resultado">


    <?php

$productos->productosSelect();

?>

</div>


<?php
include "footer.php";
?>