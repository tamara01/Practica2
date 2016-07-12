<?php
class producto
{
	public $id;
	public $nombre;
	public $porcentaje;
	
	/**************** CONSTRUCTOR *****************/

	public function __construct()
	{
	}

	/************** MÉTODOS ESTÁTICOS (DE CLASE)*************/
	public static function TraerUnProducto($id) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from misproductos where id = $id");
		$consulta->execute();
		$cdBuscado= $consulta->fetchObject('usuario');
		return $cdBuscado;			
	}

	public static function TraerTodosLosProductos()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from misproductos");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "usuario");		
	}

	/************* MÉTODOS DE INSTANCIA	 **************/

	public function InsertarProducto()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("insert into misproductos(nombre,porcentaje) values(:name,:pass)");
		$consulta->bindValue(':name', $this->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':pass', $this->porcentaje, PDO::PARAM_STR);
		$consulta->execute();		
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public function BorrarProducto()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("delete from misproductos WHERE id=:id");	
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
		$consulta->execute();
		return $consulta->rowCount();
	}

	public function ModificarProducto()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("update misproductos set nombre=:nombre,porcentaje=:porcentaje WHERE id=:id");
		$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
		$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':porcentaje', $this->porcentaje, PDO::PARAM_STR);
		$consulta->execute();
	}

}
?>