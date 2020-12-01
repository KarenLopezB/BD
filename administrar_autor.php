<?php
require_once('crud_autor.php');
require_once('autor.php'); 

$crud = new CrudAutor();
$autor = new Autor();

if (isset($_POST['insertar'])) {
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setNacionalidad($_POST['nacionalidad']);
    $autor->setNacimiento($_POST['nacimiento']);
    $crud->insertar($autor);
    header('Location: index.php');
}
?>