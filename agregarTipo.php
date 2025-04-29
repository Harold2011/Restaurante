<?php include 'base.php'; ?>
<?php include 'nav.php'; ?>

<main>
    <h1>Agregar Tipo</h1>
    <p>Este formulario nos permite agregar tipos de productos</p>
    <form action="procesarTipo.php" method="POST">
        <label for="tipo">Tipo de Producto:</label>
        <input type="text" id="tipo" name="tipo" required>
        <button type="submit">Agregar</button>
    </form>
</main>

<?php include 'footer.php'; ?>