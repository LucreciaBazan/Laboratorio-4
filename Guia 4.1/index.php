<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Special Greet</title>
</head>
<body>
    <form action="Process/greetProcess.php" method="post">
        <table align="center">
            <thead>Práctico N° 4.1</thead>
            <tr>
                <th>
                    <h3>Saludando</h3>
                </th>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione un idioma</b></p>
                    <input type="radio" name="language"> Argentino
                    <input type="radio" name="language"> Ingles
                    <input type="radio" name="language"> Portugues
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>Seleccione una acción</b></p>
                    <input type="radio" name="optionGreet"> Saludar
                    <input type="radio" name="optionGreet"> Despedirse
                    <input type="radio" name="optionGreet"> Otro Mensaje
                    <textarea name="" placeholder="Mensaje|Message|Mensagem"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Procesar</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>