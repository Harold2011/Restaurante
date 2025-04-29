<?php include 'base.php'; ?>
<?php include 'nav.php'; ?>

<main>
    <h1>Tipos</h1>
    <p>En este espacio se encuentran los tipos de menu</p>
    <button><a href="agregarTipo.php">Agregar Tipo</a></button>
    <br><hr>
    <?php
    $conexion = mysqli_connect("localhost", "harold", "12345678", "restaurante") or
        die("Problemas con la conexión");

    $resultado = mysqli_query($conexion, "select * from tipo") or
        die("Problemas en el select" . mysqli_error($conexion));

    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>";
    while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['Nombre'] . "</td>";
        echo "<td> <button>Eliminar</button>";
        echo "<button>Actualizar</button></td>";
        echo "</tr>";
    }
    echo "</table>";
    
    ?>
</main>

<?php include 'footer.php'; ?>