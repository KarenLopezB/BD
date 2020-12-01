<?php
//incluir las clases libro y crudlibro

require_once('crud_libro.php'); //Obtener clase crudlibro
require_once('libro.php'); //Obtener clase libro

$crud = new CrudLibro();
$libro = new Libro();

//Si el elemento a insertar no viene nulo, llamar al crud a insertar un libro

if (isset($_POST['insertar'])) {
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST['autor']);
    $libro->setEdicion($_POST['edicion']);
    //Llama a la funcion insertar definida en el CRUD si todo se obtuvo correctamente
    $crud->insertar($libro);
    header('Location: index.php');
}
?>