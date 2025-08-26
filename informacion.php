<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura de datos
    $producto1 = $_POST['producto1'];
    $precio1 = (float)$_POST['precio1'];
    
    $producto2 = $_POST['producto2'];
    $precio2 = (float)$_POST['precio2'];
    
    $producto3 = $_POST['producto3'];
    $precio3 = (float)$_POST['precio3'];

    // Suma de precios
    $sumaPrecios = $precio1 + $precio2 + $precio3;

    // Aplicar descuento del 16%
    $descuento = 0.16;
    $totalAPagar = $sumaPrecios * (1 - $descuento);

    // Mostrar resultados
    echo "<h1>Resultados</h1>";
    echo "<p>Producto 1: $producto1 - Precio: $$precio1</p>";
    echo "<p>Producto 2: $producto2 - Precio: $$precio2</p>";
    echo "<p>Producto 3: $producto3 - Precio: $$precio3</p>";
    echo "<p>Suma de precios: $$sumaPrecios</p>";
    echo "<p>Total a pagar después del descuento del 16%: $$totalAPagar</p>";
} else {
    echo "<p>Por favor, envía el formulario.</p>";
}
?>

