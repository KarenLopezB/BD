<html>
    <head>
    <title></title>
    </head>
    <body>
        <!--Libros-->
        <header><h1>Ingresar datos del libro</h1></header>
        <form action="administrar_libro.php" method="post">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Autor</td>
                    <td><input type="text" name="autor"></td>
                </tr>
                <tr>
                    <td>Fecha de edicion</td>
                    <td><input type="text" name="edicion"></td>
                </tr>
                <input type="hidden" name="insertar" value="insertar">
            </table>
            <input type="submit" value="Guardar">
            <a href="index.php">Volver</a>
        </form>


        <!--Autores-->
        <header><h1>Ingresar datos del Autor</h1></header>
        <form action="administrar_autor.php" method="post">
            <table>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="apellido"></td>
                </tr>
                <tr>
                    <td>Nacionalidad</td>
                    <td><input type="text" name="nacionalidad"></td>
                </tr>
                <tr>
                    <td>Nacimiento</td>
                    <td><input type="text" name="nacimiento"></td>
                </tr>
                <input type="hidden" name="insertar" value="insertar">
            </table>
            <input type="submit" value="Guardar">
            <a href="index.php">Volver</a>
        </form>
    </body>
</html>
