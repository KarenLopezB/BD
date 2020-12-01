<?php
    //Incluir la conexion a BD
    require_once('conexion.php');

    class CrudLibro{
        //Constructo de la clase
        public function __construct(){}

        //Metodo para insertar, recibe como parametro un objeto de tipo libro
        public function insertar($libro){
            $db=Bd::conectar();
            $insert=$db->prepare('INSERT INTO libros values(NULL,:nombre, :autor, :edicion)');
            $insert->bindValue('nombre', $libro->getNombre());
            $insert->bindValue('autor', $libro->getAutor());
            $insert->bindValue('edicion', $libro->getEdicion());
            $insert->execute();
        }
        
        function mostrar(){
			$db=Bd::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM libros');

			foreach($select->fetchAll() as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setNombre($libro['Nombre']);
				$myLibro->setAutor($libro['Autor']);
				$myLibro->setEdicion($libro['Edicion']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}
    }

?>
