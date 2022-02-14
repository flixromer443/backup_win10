<?php
class Usuario {
    // Nombre publico, apellido vacío y fecha de nacimiento sin establecer
    public $nombre = "Enrique";
    public $apellido = "";
    public $fechaNacimiento;
    // Direccion protected
    protected $direccion = "Calle Zapiola";
    // Pais private
    private $pais = "Argentina";
    // Funcion closure
//    public $funcion;
    // Constructor
//    public function __construct(){
//        $this->funcion = function(){
//            return "Hola!";
//        };
//    }
}
$usuario = new Usuario;
var_dump(json_encode($usuario));
/*
Devuelve:
string '{"nombre":"Enrique","apellido":"","fechaNacimiento":null,"funcion":{}}'
*/


$string = '{"nombre": "fabian", "apellido": "Lopez"}';
$resultado = json_decode($string, true);
// Vemos el resultado de la decodificación:
var_dump($resultado);
/*
* array (size=2)
  'nombre' => string 'fabian' (length=6)
  'apellido' => string 'Lopez' (length=5)
*/
echo $resultado['nombre']; // fabian
echo $resultado['apellido']; // Lopez