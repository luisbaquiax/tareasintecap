<?php
class Producto
{
    protected $nombre;
    protected $precio;
    protected $cantidad;
    protected $descripcion;

    /**
     * @param $nombre
     * @param $precio
     * @param $cantidad
     * @param $descripcion
     */
    public function __construct($nombre, $precio, $cantidad, $descripcion)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->descripcion = $descripcion;
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
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function mostrarInformacion(){}

}

class Alimento extends Producto
{
    private $fechaExpiracion;
    private $tipoAlimento;

    /**
     * @param $fechaExpiracion
     * @param $tipoAlimento
     */
    public function __construct(
        $nombre,
        $precio,
        $cantidad,
        $descripcion,
        $fechaExpiracion,
        $tipoAlimento)
    {
        parent::__construct($nombre,$precio,$cantidad,$descripcion);
        $this->fechaExpiracion = $fechaExpiracion;
        $this->tipoAlimento = $tipoAlimento;
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
    public function getTipoAlimento()
    {
        return $this->tipoAlimento;
    }

    /**
     * @param mixed $tipoAlimento
     */
    public function setTipoAlimento($tipoAlimento)
    {
        $this->tipoAlimento = $tipoAlimento;
    }

    public function mostrarInformacion()
    {

    }

}

class Libro extends Producto
{
    private $nombreAutor;
    private $editorial;

    /**
     * @param $nombreAutor
     * @param $editorial
     */
    public function __construct($nombre, $precio, $cantidad, $descripcion, $nombreAutor, $editorial)
    {
        parent::__construct($nombre, $precio, $cantidad, $descripcion);
        $this->nombreAutor = $nombreAutor;
        $this->editorial = $editorial;
    }


    /**
     * @return mixed
     */
    public function getNombreAutor()
    {
        return $this->nombreAutor;
    }

    /**
     * @param mixed $nombreAutor
     */
    public function setNombreAutor($nombreAutor)
    {
        $this->nombreAutor = $nombreAutor;
    }

    /**
     * @return mixed
     */
    public function getEditorial()
    {
        return $this->editorial;
    }

    /**
     * @param mixed $editorial
     */
    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

}
class Electronico extends Producto {
    private $marca;
    private $modelo;

    public function __construct($nombre, $precio, $cantidad, $descripcion, $marca, $modelo) {
        parent::__construct($nombre, $precio, $cantidad, $descripcion);
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }


    public function getDetails() {
        return "Electrónico: {$this->nombre}, Marca: {$this->marca}, Modelo: {$this->modelo}, Precio: {$this->precio}, Cantidad: {$this->cantidad}, Descripción: {$this->descripcion}";
    }
}

class Ropa extends Producto {
    private $talla;
    private $color;

    public function __construct($nombre, $precio, $cantidad, $descripcion, $talla, $color) {
        parent::__construct($nombre, $precio, $cantidad, $descripcion);
        $this->talla = $talla;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getTalla()
    {
        return $this->talla;
    }

    /**
     * @param mixed $talla
     */
    public function setTalla($talla)
    {
        $this->talla = $talla;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getDetails() {
        return "Ropa: {$this->nombre}, Talla: {$this->talla}, Color: {$this->color}, Precio: {$this->precio}, Cantidad: {$this->cantidad}, Descripción: {$this->descripcion}";
    }
}

class ControlProductos
{
    private $productos;
    public function __construct($productos) {
        $this->productos = $productos ;
    }

    public function addProduct(Producto $producto) {
        $this->productos[] = $producto;
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
        if($productoBuscado!=null){
            /*$productoBuscado->setNombre($producto->getNombre());
            $productoBuscado->setPrecio($producto->getPrecio());
            $productoBuscado->setCantidad($producto->getCantidad());
            $productoBuscado->setDescripcion($producto->getDescripcion());*/
            foreach ($productoBuscado as $p) {
                if($nombre == $p->getNombre()){
                    $p->setNombre($producto->getNombre());
                    return;
                }
            }
        }else{
            echo "El producto ".$productoBuscado->getNombre()." no existe";
        }
    }
    public function deleteProduct($nombre) {
        $productoBuscado = $this->searchProduct($nombre);
        if($productoBuscado!=null){
            for ($i = 0; $i < sizeof($this->productos); $i++) {
                if($this->productos[$i]->getNombre() == $nombre){
                    unset($this->productos[$i]);
                    break;
                }
            }
        }else{
            echo "El producto ".$nombre." no existe";
        }
    }
    public function showTableProductos() {
        echo "<table>";
        echo "    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Descripcion</th>
                        <th>Informacion extra</th>
                    </tr>
                </thead>";
        echo "    <tbody>";
        foreach ($this->productos as $producto) {
            $auxi="";
            if($producto instanceof Electronico){
                $auxi = "Marca: ".$producto->getMarca()." Modelo: ".$producto->getModelo();
            }elseif ($producto instanceof Ropa){
                $auxi = "Talla: ".$producto->getTalla()." Color: ".$producto->getColor();
            }elseif ($producto instanceof Libro){
                $auxi = "Nombre autor: ".$producto->getAutor()." Editorial: ".$producto->getEditorial();
            }elseif ($producto instanceof Alimento){
                $auxi = "Fecha de expiración: ".$producto->getFechaExpiracion()." Tipo: ".$producto->getTipoAlimento();
            }
            echo "    <tr>
                        <td>".$producto->getNombre()."</td>
                        <td>".$producto->getPrecio()."</td>
                        <td>".$producto->getCantidad()."</td>
                        <td>".$producto->getDescripcion()."</td>
                        <td>${auxi}</td>
                    </tr>";
        }
        echo "    </tbody>";
        echo "</table>";
    }
    /**
     * @return array
     */
    public function getProductos()
    {
        return $this->productos;
    }

    /**
     * @param array $productos
     */
    public function setProductos($productos)
    {
        $this->productos = $productos;
    }

}
$productos = [];
$camisa = new Ropa("Camisa", 75, 12,"Camisa para varones","M","Negro");
$leche = new Alimento("Leche", 45,12,"Leche en polvo", "12-12-2021","BASICA");

$controlProducto = new ControlProductos($productos);
$controlProducto->addProduct($camisa);
$controlProducto->addProduct($leche);
$controlProducto->showTableProductos();
echo "<hr>";

echo "<h4>Eliminar producto</h4>";
$controlProducto->deleteProduct($camisa->getNombre());
echo "LISTADO  PRODUCTOS";
$controlProducto->showTableProductos();
/*
echo "<hr>";
echo "<h4>Actualizar producto</h4>";
$controlProducto->editProduct($camisa,$camisa->getNombre());
echo "LISTADO  PRODUCTOS";
$controlProducto->showTableProductos();*/
echo "<hr>";
echo "<h4>Agregar producto</h4>";
$television = new Electronico("TV",455,12,"Tv a color","Samsung","2022");
$controlProducto->addProduct($television);
echo "LISTADO  PRODUCTOS";
$controlProducto->showTableProductos();

