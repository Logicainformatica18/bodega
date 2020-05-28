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




class categorias extends connection
{


  public function categoriasSelect()
  {
    //consulta todos los empleados
    $sql = mysqli_query($this->open(), "SELECT * FROM categorias");
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
        $categoriasid = $row[0];
        echo "<td>" .  $categoriasid . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
      ?>
        <!-- Button trigger modal -->
        <td><button type="button" class="btn btn-primary icon_pencil-edit"data-toggle="modal" data-target="#exampleModal" onclick="categoriasSelectOne('<?php echo $categoriasid ?>'); categoriasEditar();  return false"></button></td>
        <!-- <button class="icon_pencil-edit" ></button> -->
        <td><button class="btn btn-danger  icon_pencil_alt" onclick="categoriasDelete('<?php echo $categoriasid ?>');  return false"></button></td>
      <?php
        echo "</tr>";
      }
      ?>
    </table>
<?php
  }
  public function categoriasDelete($codigo)
  {
    //registra los datos del empleados
    $sql = "DELETE FROM categorias where idcategoria='$codigo';";
    if (mysqli_query($this->open(), $sql)) {
    } else {
    }
    $this->categoriasSelect();
  }
  public function categoriasInsert($nombre,$descripcion)
  {
    //registra los datos del categorias
    $sql = "INSERT INTO categorias (nombrecategoria,descripcion) VALUES ('$nombre','$descripcion')";
    mysqli_query($this->open(), $sql) or die('Error. ' . mysqli_error($sql));
    $this->categoriasSelect();
  }
  public function categoriasSelectOne($codigo)
  {
    //registra los datos del empleados
    $sql = mysqli_query($this->open(), "SELECT * from categorias where idcategoria ='$codigo'");
    $r = mysqli_fetch_assoc($sql);
    $codigo = $r["IdCategoria"];
    $nombre = $r["NombreCategoria"];
    $descripcion = $r["Descripcion"];
    echo "<script>
      categorias.codigo.value='$codigo';
      categorias.nombre.value='$nombre';
      categorias.descripcion.value='$descripcion';
      </script>";
    $this->categoriasSelect();
  }
  public function categoriasUpdate($codigo,$nombre, $descripcion)
  {
    $sql = "UPDATE categorias set nombrecategoria='$nombre' ,descripcion='$descripcion'where idcategoria='$codigo'";
    mysqli_query($this->open(), $sql) or die('Error. ' . mysqli_error($sql));
    echo "<script>	
    categorias.codigo.value='$codigo';
    categorias.nombre.value='$nombre';
    categorias.descripcion.value='$descripcion';
        </script>";
    $this->categoriasSelect();
  }
  public function categoriasSearch($criterio)
	{
  $query= "SELECT * FROM categorias c where nombrecategoria like '%$criterio%'";
    //consulta todos los categorias
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
      $categoriasid = $row[0];
      echo "<td>" .  $categoriasid . "</td>";
      echo "<td>" . $row[1] . "</td>";
      echo "<td>" . $row[2] . "</td>";
    ?>
      <!-- Button trigger modal -->
      <td><button type="button" class="btn btn-primary icon_pencil-edit"data-toggle="modal" data-target="#exampleModal" onclick="categoriasSelectOne('<?php echo $categoriasid ?>'); categoriasEditar();  return false"></button></td>
      <!-- <button class="icon_pencil-edit" ></button> -->
      <td><button class="btn btn-danger  icon_pencil_alt" onclick="categoriasDelete('<?php echo $categoriasid ?>');  return false"></button></td>
    <?php
      echo "</tr>";
    }
    ?>
  </table>
  <?php
  }
 

}

$categorias = new categorias();
if ($metodo == "delete") {
  $categorias->categoriasDelete($codigo);
} elseif ($metodo == "insert") {
  $categorias->categoriasInsert($nombre,$descripcion);
} elseif ($metodo == "select") {
  $categorias->categoriasSelectOne($codigo);
} elseif ($metodo == "update") {
  $categorias->categoriasUpdate($codigo,$nombre, $descripcion);
}
elseif ($metodo == "search") {
  $categorias->categoriasSearch($criterio);
}
