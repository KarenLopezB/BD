<?php
    require_once('conexion.php');

    class CrudAutor{
        public function __construct(){}

        public function insertar($autor){
            $db=Bd::conectar();
            $insert=$db->prepare('INSERT INTO autores values(NULL,:nombre, :apellido, :nacionalidad, :nacimiento)');
            $insert->bindValue('nombre', $autor->getNombre());
            $insert->bindValue('apellido', $autor->getApellido());
            $insert->bindValue('nacionalidad', $autor->getNacionalidad());
            $insert->bindValue('nacimiento', $autor->getNacimiento());
            $insert->execute();
        }

        function mostrar(){
			$db=Bd::conectar();
			$listaAutores=[];
			$select=$db->query('SELECT * FROM autores');

			foreach($select->fetchAll() as $autor){
				$myAutor= new Autor();
				$myAutor->setId($autor['id']);
				$myAutor->setNombre($autor['nombre']);
                $myAutor->setApellido($autor['apellido']);
                $myAutor->setNacionalidad($autor['nacionalidad']);
				$myAutor->setNacimiento($autor['nacimiento']);
				$listaAutores[]=$myAutor;
			}
			return $listaAutores;
		}
    }
?>