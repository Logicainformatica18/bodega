<?php
include('head_cordinador.php');

$cordinador->personSelectOne2($_SESSION["login"]);

?>
<div class="container">
    <h3>
        <p class="blue-text"> <?php echo "Bienvenido"; ?></p>
    </h3>
</div>
<div class="container">



    <div class="caja">
        <div class="portada">
            <form action="alumno.php" method="post" enctype="multipart/form-data" id="perfil">

                <p></p>
        </div>
        <?php
        //////////    
        echo "<h4><b>" . $cordinador->nombre . "</b></h4>";
        echo "<h4><b>" . $cordinador->paterno . "</b></h4>";
        echo "<h4><b>" . $cordinador->materno . "</b></h4>";
        echo "<img src='imagenes/dni.png' alt='celular' width='50px' height='30px'> ";
        echo $cordinador->dni . "<p></p>";
        echo "<img src='imagenes/cumpleaños.png' alt='celular' width='50px' height='30px'> ";
        echo $cordinador->fec_nac . "<p></p>";
        echo "<img src='imagenes/celular.png' alt='celular' width='35px' height='30px'> ";
        echo $cordinador->celular . "<p></p>";
        echo "<img src='imagenes/email.png' alt='email' width='35px' height='20px'> ";
        echo $cordinador->email;

echo "<p></p>";
    
        ?>
        <p></p>
        <!-- Modal Trigger cambiar contraseña -->
        <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Cambiar Contraseña</a>
      
      <button type="button" class="btn" onclick="envioWhatsapp('<?php echo $cordinador->nombre ?>')"> boton whatsapp</button>
      
      
        </form>
    </div>

</div>

<p></p>


<p></p>
<!-- Modal Structure -->
<div id="modal2" class="modal">
    <div class="modal-content">
        <div class="center">
            <form method="POST" action="" id="person">

                <img src="imagenes/messenger.png" alt="messenger" width="100">
                <h6><b>Cambiar Contraseña</b></h6>
                <input type="password" class="txt" name="password" placeholder="  password Actual" class="txt" requerid>
                <p></p>
                <input type="password" class="txt" name="new_password" placeholder=" Nueva Contraseña" class="txt" requerid>
                <p></p>
                <input type="password" class="txt" name="repetir_password" placeholder="  Repetir Contraseña" class="txt" requerid>
                <p></p>
                <p></p>
                <input type="button" value="Guardar" name="btn" class="btn" onclick="personChangePassword(); return false;">
            </form>
        </div>
    </div>
</div>
<div id="resultado">


</div>

</script>
<?php
include "footer.php";
?>