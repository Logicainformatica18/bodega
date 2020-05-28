<?php
if (!class_exists("connection"))
{
  include ("conexion.php");
}
//variables POST
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : "";
$metodo = isset($_POST['metodo']) ? $_POST['metodo'] : "";

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
$descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : "";
$criterio = isset($_POST['criterio']) ? $_POST['criterio'] : "";
//filtro




class productos extends connection
{


  public function productosSelect()
  {
    //consulta todos los empleados
    $sql = mysqli_query($this->open(), "SELECT * FROM productos");
?>
    <table class="striped responsive-table">
      <tr>
        <th>Código</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Modificar</th>
        <th>Eliminar</th>
      </tr>
      <?php
      while ($row = mysqli_fetch_array($sql)) {
        echo "<tr>";
        $productosid = $row[0];
        echo "<td>" .  $productosid . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
      ?>
        <!-- Button trigger modal -->
        <td><button type="button" class="btn btn-primary icon_pencil-edit"data-toggle="modal" data-target="#exampleModal" onclick="productosSelectOne('<?php echo $productosid ?>'); productosEditar();  return false"></button></td>
        <!-- <button class="icon_pencil-edit" ></button> -->
        <td><button class="btn btn-danger  icon_pencil_alt" onclick="productosDelete('<?php echo $productosid ?>');  return false"></button></td>
      <?php
        echo "</tr>";
      }
      ?>
    </table>
<?php
  }
  public function productosDelete($codigo)
  {
    //registra los datos del empleados
    $sql = "DELETE FROM productos where idcategoria='$codigo';";
    if (mysqli_query($this->open(), $sql)) {
    } else {
    }
    $this->productosSelect();
  }
  public function productosInsert($nombre,$descripcion)
  {
    //registra los datos del productos
    $sql = "INSERT INTO productos (nombrecategoria,descripcion) VALUES ('$nombre','$descripcion')";
    mysqli_query($this->open(), $sql) or die('Error. ' . mysqli_error($sql));
    $this->productosSelect();
  }
  public function productosSelectOne($codigo)
  {
    //registra los datos del empleados
    $sql = mysqli_query($this->open(), "SELECT * from productos where idcategoria ='$codigo'");
    $r = mysqli_fetch_assoc($sql);
    $codigo = $r["IdCategoria"];
    $nombre = $r["NombreCategoria"];
    $descripcion = $r["Descripcion"];
    echo "<script>
      productos.codigo.value='$codigo';
      productos.nombre.value='$nombre';
      productos.descripcion.value='$descripcion';
      </script>";
    $this->productosSelect();
  }
  public function productosUpdate($codigo,$nombre, $descripcion)
  {
    $sql = "UPDATE productos set nombrecategoria='$nombre' ,descripcion='$descripcion'where idcategoria='$codigo'";
    mysqli_query($this->open(), $sql) or die('Error. ' . mysqli_error($sql));
    echo "<script>	
    productos.codigo.value='$codigo';
    productos.nombre.value='$nombre';
    productos.descripcion.value='$descripcion';
        </script>";
    $this->productosSelect();
  }
  public function productosSearch($criterio)
	{
  $query= "SELECT * FROM productos c where nombrecategoria like '%$criterio%'";
    //consulta todos los productos
    $sql = mysqli_query($this->open(),$query);
    ?>
    <table class="striped responsive-table">
    <tr>
      <th>Código</th>
      <th>Nombre</th>
      <th>Descripción</th>
      <th>Modificar</th>
      <th>Eliminar</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($sql)) {
      echo "<tr>";
      $productosid = $row[0];
      echo "<td>" .  $productosid . "</td>";
      echo "<td>" . $row[1] . "</td>";
      echo "<td>" . $row[2] . "</td>";
    ?>
      <!-- Button trigger modal -->
      <td><button type="button" class="btn btn-primary icon_pencil-edit"data-toggle="modal" data-target="#exampleModal" onclick="productosSelectOne('<?php echo $productosid ?>'); productosEditar();  return false"></button></td>
      <!-- <button class="icon_pencil-edit" ></button> -->
      <td><button class="btn btn-danger  icon_pencil_alt" onclick="productosDelete('<?php echo $productosid ?>');  return false"></button></td>
    <?php
      echo "</tr>";
    }
    ?>
  </table>
  <?php
  }
 

}

$productos = new productos();
if ($metodo == "delete") {
  $productos->productosDelete($codigo);
} elseif ($metodo == "insert") {
  $productos->productosInsert($nombre,$descripcion);
} elseif ($metodo == "select") {
  $productos->productosSelectOne($codigo);
} elseif ($metodo == "update") {
  $productos->productosUpdate($codigo,$nombre, $descripcion);
}
elseif ($metodo == "search") {
  $productos->productosSearch($criterio);
}
