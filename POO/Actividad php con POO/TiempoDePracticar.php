<?php
echo "<h3>Bicicleta</h3>";

class Bicicleta
{
    private $marca;
    private $modelo;
    private $color;

    public function __construct($marca, $modelo, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function mostrarInformacion()
    {
        echo "<strong>Marca:</strong> " . $this->marca . " ";
        echo "<strong>Modelo:</strong> " . $this->modelo . " ";
        echo "<strong>Color:</strong> " . $this->color . " ";
    }
}

$bicicleta = new Bicicleta("Merida", "BMX 2020", "Azul");
$bicicleta->mostrarInformacion();
echo "<h3>Factura</h3>";

class Factura
{
    private $numero;
    private $fecha;
    private $montoTotal;

    /**
     * @param $numero
     * @param $fecha
     * @param $montoTotal
     */
    public function __construct($numero, $fecha, $montoTotal)
    {
        $this->numero = $numero;
        $this->fecha = $fecha;
        $this->montoTotal = $montoTotal;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getMontoTotal()
    {
        return $this->montoTotal;
    }

    /**
     * @param mixed $montoTotal
     */
    public function setMontoTotal($montoTotal)
    {
        $this->montoTotal = $montoTotal;
    }

    public function mostrarResumen()
    {
        echo "<strong>Número de factura:</strong> " . $this->numero . " ";
        echo "<strong>Fecha:</strong> " . $this->fecha . " ";
        echo "<strong>Monto:</strong> Q. " . $this->montoTotal . " ";
    }

}

$factura = new Factura(1, "27/09/2024", 9920);
$factura->mostrarResumen();
echo "<h3>Libro</h3>";

class Libro
{
    private $titulo;
    private $autor;

    /**
     * @param $titulo
     * @param $autor
     */
    public function __construct($titulo, $autor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function mostrarDescripcion()
    {
        echo "<strong>Titulo:</strong> " . $this->titulo . " ";
        echo "<strong>Autor:</strong> " . $this->autor . " ";
    }
}

$libro = new Libro("El poder de decidir", "Marvin G. Solis");
$libro->mostrarDescripcion();
echo "<h3>Rectángulo</h3>";

class Rectangulo
{
    private $ancho;
    private $alto;

    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    /**
     * @return mixed
     */
    public function getAncho()
    {
        return $this->ancho;
    }

    /**
     * @param mixed $ancho
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }

    /**
     * @return mixed
     */
    public function getAlto()
    {
        return $this->alto;
    }

    /**
     * @param mixed $alto
     */
    public function setAlto($alto)
    {
        $this->alto = $alto;
    }

    public function calcularArea()
    {
        return $this->ancho * $this->alto;
    }

    public function mostrarInformacion()
    {
        echo "<strong>Ancho:</strong> " . $this->ancho . " ";
        echo "<strong>Alto:</strong> " . $this->alto . " ";
        echo "<strong>Área:</strong> " . $this->alto * $this->ancho . " unidades cuadradas.";
    }
}

$rectangulo = new Rectangulo(15, 15);
$rectangulo->mostrarInformacion();
echo "<h3>Curso</h3>";

class Estudiante
{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function mostrarInformacion()
    {
        echo "<strong>Nombre:</strong> " . $this->nombre . " ";
        echo "<strong>Apellido:</strong> " . $this->apellido . " ";
        echo "<br>";
    }

}

class Curso
{
    private $nombre;
    private $estudiantes;

    public function __construct($nombre){
        $this->nombre = $nombre;
        $this->estudiantes = [];
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEstudiantes()
    {
        return $this->estudiantes;
    }

    /**
     * @param mixed $estudiantes
     */
    public function setEstudiantes($estudiantes)
    {
        $this->estudiantes = $estudiantes;
    }

    public function agregarEstudiante($estudiante)
    {
        $this->estudiantes[] = $estudiante;
    }

    public function mostrarInformacion(){
        echo "<strong>Nombre del curso:</strong> " . $this->nombre . " ";
        echo "<strong>Cantidad de estudiantes:</strong> " . sizeof($this->estudiantes) . "<br> ";
        echo "<strong>Listado de estudiantes:</strong><br><br>";
        foreach ($this->estudiantes as $estudiante){
            $estudiante->mostrarInformacion();
        }
    }
}
$curso = new Curso("Matematica");
$estudiante1 = new Estudiante("Luis","Baquiax");
$estudiante2 = new Estudiante("Yeni","Gonzalez");
$estudiante3 = new Estudiante("Francisco","Sic");
$curso->agregarEstudiante($estudiante1);
$curso->agregarEstudiante($estudiante2);
$curso->agregarEstudiante($estudiante3);
$curso->mostrarInformacion();
echo "<h3>Tarjeta de crédito</h3>";
class TarjetaDeCredito
{
    private $numero;
    private $fechaExpiracion;
    private $limiteCredito;
    private $creditoAcumulado;

    /**
     * @param $numero
     * @param $fechaExpiracion
     * @param $limiteCredito
     */
    public function __construct($numero, $fechaExpiracion, $limiteCredito)
    {
        $this->numero = $numero;
        $this->fechaExpiracion = $fechaExpiracion;
        $this->limiteCredito = $limiteCredito;
        $this->creditoAcumulado = 0;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getFechaExpiracion()
    {
        return $this->fechaExpiracion;
    }

    /**
     * @param mixed $fechaExpiracion
     */
    public function setFechaExpiracion($fechaExpiracion)
    {
        $this->fechaExpiracion = $fechaExpiracion;
    }

    /**
     * @return mixed
     */
    public function getLimiteCredito()
    {
        return $this->limiteCredito;
    }

    /**
     * @param mixed $limiteCredito
     */
    public function setLimiteCredito($limiteCredito)
    {
        $this->limiteCredito = $limiteCredito;
    }
    public function mostrarInformacion(){
        echo "<strong># </strong> " . $this->numero . " ";
        echo "<strong>Fecha expiracion:</strong> " . $this->fechaExpiracion . " ";
        echo "<strong>Limite credito:</strong> " . $this->limiteCredito . "<br>";
    }
    public function validarTransaccion($monto)
    {
        if($this->creditoAcumulado >= $this->limiteCredito){
            echo "Ya no se puede realizar mas transacciones, haz llegado al limite. Limite de transacción: ".$this->limiteCredito;
            return;
        }
        if($monto> $this->limiteCredito){
            echo "El monto de la transacción no debe ser mayor a limite de crédito<br> {$this->limiteCredito}";
            return;
        }
        $this->creditoAcumulado += $monto;
        echo "Transaccion realizado con éxito<br>";
    }
}
$tarjetCredito = new TarjetaDeCredito(12,"12-12-2024",2500);
echo "Tarjeta de credito:<br>";
$tarjetCredito->mostrarInformacion();
$monto = 2000;
echo "Realizar transaccion con: ".$monto."<br>";
$tarjetCredito->validarTransaccion($monto);
$monto = 2000;
echo "Realizar transaccion con: ".$monto."<br>";
$tarjetCredito->validarTransaccion($monto);
$monto = 600;
echo "Realizar transaccion con: ".$monto."<br>";
$tarjetCredito->validarTransaccion($monto);
echo "<h3>Cliente</h3>";
class Cliente
{
    private $nombre;
    private $email;
    private $direccion;

    /**
     * @param $nombre
     * @param $email
     * @param $direccion
     */
    public function __construct($nombre, $email, $direccion)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function mostrarInformacion(){
        echo "<strong>Nombre:</strong> " . $this->nombre . " ";
        echo "<strong>Correo electrónico:</strong> " . $this->email . " ";
        echo "<strong>Direccion:</strong> " . $this->direccion . "<br>";
    }
}
$cliente = new Cliente("Luis","luis.baquiax1995@gamil.com","Totonicapán");
$cliente->mostrarInformacion();