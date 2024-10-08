<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<?php
class Producto
{
    protected $nombre;
    protected $precio;
    protected $cantidad;
    protected $descripcion;

    public function __construct($nombre, $precio, $cantidad, $descripcion)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->descripcion = $descripcion;
    }

    public function getNombre() { return $this->nombre; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function getPrecio() { return $this->precio; }
    public function setPrecio($precio) { $this->precio = $precio; }
    public function getCantidad() { return $this->cantidad; }
    public function setCantidad($cantidad) { $this->cantidad = $cantidad; }
    public function getDescripcion() { return $this->descripcion; }
    public function setDescripcion($descripcion) { $this->descripcion = $descripcion; }

    public function getDetails()
    {
        return "Nombre: ".$this->nombre."<br>";
    }

    public function calcularDescuento($porcentaje) {
        return $this->precio - ($this->precio * $porcentaje / 100);
    }
}

class Alimento extends Producto
{
    private $fechaExpiracion;
    private $tipoAlimento;

    public function __construct($nombre, $precio, $cantidad, $descripcion, $fechaExpiracion, $tipoAlimento)
    {
        parent::__construct($nombre, $precio, $cantidad, $descripcion);
        $this->fechaExpiracion = $fechaExpiracion;
        $this->tipoAlimento = $tipoAlimento;
    }

    public function getFechaExpiracion() { return $this->fechaExpiracion; }
    public function setFechaExpiracion($fechaExpiracion) { $this->fechaExpiracion = $fechaExpiracion; }
    public function getTipoAlimento() { return $this->tipoAlimento; }
    public function setTipoAlimento($tipoAlimento) { $this->tipoAlimento = $tipoAlimento; }
    public function getDetails()
    {
        return "Fecha de expiración: ".$this->fechaExpiracion."<br>Tipo de alimento: ".$this->tipoAlimento;
    }
}

class Libro extends Producto
{
    private $nombreAutor;
    private $editorial;

    public function __construct($nombre, $precio, $cantidad, $descripcion, $nombreAutor, $editorial)
    {
        parent::__construct($nombre, $precio, $cantidad, $descripcion);
        $this->nombreAutor = $nombreAutor;
        $this->editorial = $editorial;
    }

    public function getNombreAutor() { return $this->nombreAutor; }
    public function setNombreAutor($nombreAutor) { $this->nombreAutor = $nombreAutor; }
    public function getEditorial() { return $this->editorial; }
    public function setEditorial($editorial) { $this->editorial = $editorial; }
    public function getDetails()
    {
        return "Autor: ".$this->nombreAutor."<br>Editorial: ".$this->editorial;
    }
}

class Electronico extends Producto
{
    private $marca;
    private $modelo;

    public function __construct($nombre, $precio, $cantidad, $descripcion, $marca, $modelo)
    {
        parent::__construct($nombre, $precio, $cantidad, $descripcion);
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca() { return $this->marca; }
    public function setMarca($marca) { $this->marca = $marca; }
    public function getModelo() { return $this->modelo; }
    public function setModelo($modelo) { $this->modelo = $modelo; }
    public function getDetails()
    {
        return "Modelo: ".$this->modelo."<br>Marca: ".$this->marca;
    }
}

class Ropa extends Producto
{
    private $talla;
    private $color;

    public function __construct($nombre, $precio, $cantidad, $descripcion, $talla, $color)
    {
        parent::__construct($nombre, $precio, $cantidad, $descripcion);
        $this->talla = $talla;
        $this->color = $color;
    }

    public function getTalla() { return $this->talla; }
    public function setTalla($talla) { $this->talla = $talla; }
    public function getColor() { return $this->color; }
    public function setColor($color) { $this->color = $color; }

    public function getDetails()
    {
        return "Talla: ".$this->talla."<br>Color: ".$this->color;
    }
}

class ControlProductos
{
    private $productos;

    public function __construct() {
        $this->productos = [];
    }

    public function addProduct(Producto $producto) {
        $aux = $producto->getNombre();
        foreach ($this->productos as $p) {
            if ($producto->getNombre() == $p->getNombre()) {
                echo "<legend style='color: blue'><strong>El producto ${aux} ya existe, no se puede agregar producto que ya exista.</strong></legend>.<br>";
                return;
            }
        }
        $this->productos[] = $producto;
        echo "<legend style='color: blue'><strong>El producto ${aux} fue agregado con éxito.</strong></legend>.<br>";
    }

    private function searchProduct($nombre)
    {
        foreach ($this->productos as $producto) {
            if ($producto->getNombre() == $nombre) {
                return $producto;
            }
        }
        return null;
    }

    public function editProduct(Producto $producto, $nombre) {
        $productoBuscado = $this->searchProduct($nombre);
        if ($productoBuscado) {
            $productoBuscado->setNombre($producto->getNombre());
            $productoBuscado->setPrecio($producto->getPrecio());
            $productoBuscado->setCantidad($producto->getCantidad());
            $productoBuscado->setDescripcion($producto->getDescripcion());
            echo "<legend style='color: green'><strong>El producto ${nombre} fue actualizad con éxito</strong></legend>.<br>";
        } else {
            echo "<legend style='color: red'><strong>El producto ${nombre} no existe</strong></legend>.<br>";
        }
    }

    public function deleteProduct($nombre) {
        foreach ($this->productos as $index => $producto) {
            if ($producto->getNombre() == $nombre) {
                echo "<legend style='color: green'><strong>El producto ${nombre} fue eliminado con éxito</strong></legend>.<br>";
                unset($this->productos[$index]);
                return;
            }
        }
        echo "<legend style='color: red'><strong>El producto ${nombre} no existe</strong></legend>.<br>";
    }

    public function showTableProductos() {
        echo "<table>";
        echo "<thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Descripción</th>
                    <th>Detalles</th>
                </tr>
              </thead><tbody>";

        foreach ($this->productos as $producto) {
            /*$auxi = "";
            if ($producto instanceof Electronico) {
                $auxi = "Marca: ".$producto->getMarca().", Modelo: ".$producto->getModelo();
            } elseif ($producto instanceof Ropa) {
                $auxi = "Talla: ".$producto->getTalla().", Color: ".$producto->getColor();
            } elseif ($producto instanceof Libro) {
                $auxi = "Autor: ".$producto->getNombreAutor().", Editorial: ".$producto->getEditorial();
            } elseif ($producto instanceof Alimento) {
                $auxi = "Fecha de expiración: ".$producto->getFechaExpiracion().", Tipo: ".$producto->getTipoAlimento();
            }*/
            echo "<tr>
                    <td>".$producto->getNombre()."</td>
                    <td>Q.".$producto->getPrecio()."</td>
                    <td>".$producto->getCantidad()."</td>
                    <td>".$producto->getDescripcion()."</td>
                    <td>".$producto->getDetails()."</td>
                  </tr>";
        }

        echo "</tbody></table>";
    }
}

$productos = [];
$camisa = new Ropa("Camisa", 75, 12,"Camisa para varones","M","Negro");
$leche = new Alimento("Leche", 45,12,"Leche en polvo", "12-12-2021","BASICA");

$controlProducto = new ControlProductos();
$controlProducto->addProduct($camisa);
$controlProducto->addProduct($leche);
$controlProducto->showTableProductos();
echo "<hr>";

echo "<h4>Eliminar producto</h4>";
$controlProducto->deleteProduct($camisa->getNombre());
echo "LISTADO  PRODUCTOS";
$controlProducto->showTableProductos();

echo "<hr>";
echo "<h4>Actualizar producto</h4>";
$leche->setDescripcion("Leche en polvo Nido");
$controlProducto->editProduct($camisa,$camisa->getNombre());
echo "LISTADO  PRODUCTOS";
$controlProducto->showTableProductos();

echo "<hr>";
echo "<h4>Agregar producto</h4>";
$television = new Electronico("TV",455,12,"Tv a color","Samsung","2022");
$controlProducto->addProduct($television);
echo "LISTADO  PRODUCTOS";
$controlProducto->showTableProductos();

$descuentoPorcentaje = 20; // 20%
echo "<br>Precio con descuento de la camisa: Q." . $camisa->calcularDescuento($descuentoPorcentaje) . "<br>";
echo "Precio con descuento de la leche: Q." . $leche->calcularDescuento($descuentoPorcentaje) . "<br>";
?>

</body>
</html>
