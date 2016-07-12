<?php
class usuario
{
	public $id;
	public $correo;
	public $nombre;
	public $clave;
	public $tipo;
	public $foto;

	/**************** CONSTRUCTOR *****************/
	public function __construct()
	{
	}

	/************** MÉTODOS ESTÁTICOS (DE CLASE) *************/
	
//**
	public static function TraerUnUsuarioPorId($id)
		{
			$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();

			$consulta = $objetoAccesoDatos->RetornarConsulta("SELECT id, correo, nombre, clave, tipo, foto from misusuarios WHERE id='$id'");
			$consulta->execute();
			$filaBuscada = $consulta->fetchObject("usuario");
			return $filaBuscada; //retorna false si no hay coincidencia
		}

	public static function TraerUnUsuarioPorDatos($user,$clave)
		{
			$objetoAccesoDatos = AccesoDatos::dameUnObjetoAcceso();

			$consulta = $objetoAccesoDatos->RetornarConsulta(
				"SELECT id, correo, nombre, clave, tipo, foto
				from misusuarios WHERE correo='$user' AND clave='$clave'");
			$consulta->execute();
			$filaBuscada = $consulta->fetchObject("usuario");
			return $filaBuscada;
		}
//**
	public static function TraerTodosLosUsuarios()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select id, nombre, clave, correo, tipo, foto from misusuarios");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");		
	}

	public static function VerificarUsuario($mail, $clave) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select correo,nombre,clave,tipo from misusuarios where correo=? AND clave=?");
		$consulta->execute(array($mail, $clave));
		$usuarioBuscado= $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");
			return $usuarioBuscado;				
	}

	
	public static function BorrarUsuarioPorNombre($nombre)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("delete from misusuarios WHERE nombre=:name");	
		$consulta->bindValue(':name',$nombre, PDO::PARAM_STR);		
		$consulta->execute();
		return $consulta->rowCount();

	}	
//**
	public static function TraerUsuario($id) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select id, nombre, clave, correo, tipo from misusuarios where id = $id");
		$consulta->execute();
		$cdBuscado= $consulta->fetchObject('usuario');
		return $cdBuscado;			
	}

	public static function TraerUsuarioIdNombre($id,$nombre) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select id, nombre, clave, correo,tipo from misusuarios where id=:id AND nombre=:name");
		$consulta->bindValue(':id', $id, PDO::PARAM_INT);
		$consulta->bindValue(':name', $nombre, PDO::PARAM_STR);
		$consulta->execute();
		$cdBuscado= $consulta->fetchObject('usuario');
		return $cdBuscado;		
	}

	/************* MÉTODOS DE INSTANCIA	 **************/
//**	
	public function BorrarUsuario()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("delete from misusuarios	WHERE id=:id");	
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
		$consulta->execute();
		return $consulta->rowCount();

	}
//**
	public function InsertarUsuario()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("insert into misusuarios (correo,nombre,clave,tipo,foto) values(:correo,:nombre,:clave,:tipo,:foto)");
		$consulta->bindValue(':correo', $this->correo, PDO::PARAM_STR);
		$consulta->bindValue(':nombre', $this->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':clave', $this->clave, PDO::PARAM_STR);		
		$consulta->bindValue(':tipo', $this->tipo, PDO::PARAM_STR);
		$consulta->bindValue(':foto', $this->foto, PDO::PARAM_STR);
		$consulta->execute();		
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}
//**	
	public function ModificarUsuario()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("update misusuarios set correo=:correo,nombre=:name,clave=:clave1 WHERE id=:id");
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
		$consulta->bindValue(':correo', $this->correo, PDO::PARAM_STR);
		$consulta->bindValue(':name',$this->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':clave1', $this->clave, PDO::PARAM_STR);
		
		$consulta->execute();
	}



	public function mostrarDatos()
	{
		return "Metodo mostar: (".$this->nombre.") ; (".$this->clave .")";
	}


	public function InsertarPersona($persona)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		//$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into persona (nombre,apellido,dni,foto)values(:nombre,:apellido,:dni,:foto)");
		$consulta =$objetoAccesoDato->RetornarConsulta("insert into misusuarios (correo,nombre,clave,tipo,foto) values(:correo,:nombre,:clave,:tipo,:foto)");
		$consulta->bindValue(':correo',$persona->correo, PDO::PARAM_STR);
		$consulta->bindValue(':nombre', $persona->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':clave', $persona->clave, PDO::PARAM_STR);
		$consulta->bindValue(':tipo', $persona->tipo, PDO::PARAM_STR);
		$consulta->bindValue(':foto', $persona->foto, PDO::PARAM_STR);
		$consulta->execute();		
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	
				
	}	

	public function ModificarPersona()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("update misusuarios set correo=:correo,nombre=:nombre,clave=:clave,foto=:foto WHERE id=:id");
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
		$consulta->bindValue(':correo',$this->correo, PDO::PARAM_STR);
		$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':clave', $this->clave, PDO::PARAM_STR);
		$consulta->bindValue(':foto', $this->foto, PDO::PARAM_STR);
		$consulta->execute();
	}

}
?>