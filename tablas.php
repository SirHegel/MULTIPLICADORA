<!DOCTYPE html>
<html lang="es"> <!-- Declara el tipo de documento como HTML5 y el idioma como español -->

<head>
    <meta charset="UTF-8"> <!-- Especifica el conjunto de caracteres utilizado: UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Asegura que el sitio sea responsivo en dispositivos móviles -->
    <title>Tabla de Multiplicar</title> <!-- Título de la página que se muestra en la pestaña del navegador -->
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <?php
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { // Verifica si el formulario fue enviado
            $number = intval($_POST['number']); // Convierte el valor ingresado a un número entero
            if ($number > 0) { // Comprueba que el número sea positivo
                echo "<table>"; // Inicia la tabla HTML
                echo "<tr><th>Multiplicando</th><th>Multiplicador</th><th>Resultado</th></tr>"; // Encabezado de la tabla
                for ($i = 1; $i <= 10; $i++) { // Itera del 1 al 10 para crear la tabla de multiplicar
                    $result = $number * $i; // Calcula el producto
                    echo "<tr>"; // Abre una fila
                    echo "<td>$number</td>"; // Celda para el número ingresado
                    echo "<td>$i</td>"; // Celda para el multiplicador
                    echo "<td>$result</td>"; // Celda para el resultado
                    echo "</tr>"; // Cierra la fila
                }
                echo "</table>"; // Finaliza la tabla
            } else {
                echo "<p class='error'>El número debe ser mayor a 0.</p>"; // Muestra un mensaje de error si el número no es válido
            }
        }
        echo "<a href='index.html' style='display: inline-block; margin-top: 20px; text-decoration: none; color: white; background-color: #007BFF; padding: 10px 20px; border-radius: 5px;'>Volver</a>";
        ?>
    </div>
    
</body>

</html>