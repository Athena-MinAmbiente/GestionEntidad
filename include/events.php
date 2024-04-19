<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;



//	onscreen events



		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["UID"]=$data["idusrglobal"]; // ID de usuario unico registrado en DB
$_SESSION["UEmail"]=$data["usr_email"]; // Session de correo electrónico
$_SESSION["UNombres"]=$data["usr_nombresfull"]; // Sesión de nombres y apellidos
$_SESSION["UDocumento"]=$data["usr_personalid"]; // Sesión de documento de identificación
$_SESSION["UDep"]=$data["usr_dep"]; // Sesión Dependencia FK dbedl (dependnecias)
$_SESSION["UCargo"]=$data["usr_cargo"]; // Sesión de cargo (Códido) FK dbedl (Cargos)


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
