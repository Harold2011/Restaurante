<?php include 'base.php'; ?>
<?php include 'nav.php'; ?>

<main>
    <h1>Agregar Tipo</h1>
    <p>Este formulario nos permite agregar tipos de productos</p>
    <?php
        $conexion = mysqli_connect("localhost", "harold", "12345678", "restaurante") or
        die("Problemas con la conexión");

        mysqli_query($conexion, "insert into tipo(Nombre) values 
                            ('$_REQUEST[tipo]')")
            or die("Problemas en el select" . mysqli_error($conexion));

        mysqli_close($conexion);

        echo "<p>Tipo de producto agregado correctamente.</p>";
    ?>
    <p><a href="admin.php">Volver a la administración</a></p>
</main>

<?php include 'footer.php'; ?>