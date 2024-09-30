<?php

class Equipo
{
    private $nombre;
    private $puntos;
    private $victorias;
    private $empates;
    private $derrotas;

    /**
     * @param $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->puntos = 0;
        $this->victorias = 0;
        $this->empates = 0;
        $this->derrotas = 0;
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
     * @return int
     */
    public function getPuntos()
    {
        return $this->puntos;
    }

    /**
     * @param int $puntos
     */
    public function setPuntos($puntos)
    {
        $this->puntos += $puntos;
    }

    /**
     * @return int
     */
    public function getVictorias()
    {
        return $this->victorias;
    }

    /**
     * @param int $victorias
     */
    public function setVictorias($victorias)
    {
        $this->victorias += $victorias;
        $this->puntos += 3;
    }

    /**
     * @return int
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * @param int $empates
     */
    public function setEmpates($empates)
    {
        $this->empates += $empates;
        $this->puntos += 1;
    }

    /**
     * @return int
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * @param int $derrotas
     */
    public function setDerrotas($derrotas)
    {
        $this->derrotas += $derrotas;
    }
}

class Liga
{
    private $nombre;
    private $equipos;

    /**
     * @param $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->equipos = [];
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
     * @return array
     */
    public function getEquipos()
    {
        return $this->equipos;
    }

    /**
     * @param array $equipos
     */
    public function setEquipos($equipos)
    {
        $this->equipos = $equipos;
    }

    public function agregarEquipo($equipo)
    {
        $this->equipos[] = $equipo;
    }

    public function buscarEquipo($nombre)
    {
        foreach ($this->equipos as $equipo) {
            if ($equipo->getNombre() == $nombre) {
                return $equipo;
            }
        }
        return null;
    }

    public function agregarResultado($nombreEquipo, $resultado)
    {
        $equipoBuscado = $this->buscarEquipo($nombreEquipo);
        if ($equipoBuscado) {
            switch ($resultado) {
                case 0: // empate
                    $equipoBuscado->setEmpates(1);
                    break;
                case 1://victoria
                    $equipoBuscado->setVictorias(1);
                    break;
                case 2://derrota
                    $equipoBuscado->setDerrotas(1);
                    break;
                default:
                    echo "Opcion invalida";
            };
        } else {
            echo "El equipo " . $nombreEquipo . " no existe<br>";
        }
    }

    public function mostrarTablaPosiciones()
    {
        echo "<table>
                <thead>
                    <tr>
                        <th>Nombre del quipo</th>
                        <th>Victorias</th>
                        <th>Empates</th>   
                        <th>Derrotas</th>   
                        <th>Puntos</th>    
                    </tr>
                </thead>
                <tbody>";
        foreach ($this->equipos as $equipo) {
            echo "
                    <tr>
                        <td>" . $equipo->getNombre() . "</td>
                        <td>" . $equipo->getVictorias() . "</td>
                        <td>" . $equipo->getEmpates() . "</td>
                        <td>" . $equipo->getDerrotas() . "</td>
                        <td>" . $equipo->getPuntos() . "</td>
                    </tr>";
        }
        echo "</tbody>
                </table>";
    }

    public function ordenarEquiposPorPuntos()
    {
        function orenar($equipo, $equipo2)
        {
            if($equipo->getPuntos() == $equipo2->getPuntos()) {
                return 0;
            }
            return ($equipo->getPuntos() > $equipo2->getPuntos()) ? 1 : -1;
        }
        usort($this->equipos, "orenar");
    }
}

$equpo1 = new Equipo("Bayer Munich");
$equpo2 = new Equipo("Celtic");
$equpo3 = new Equipo("Bayer Leverkusen");
$equpo4 = new Equipo("Aston Villa");
$liga = new Liga("UEFA Champions League");
$liga->agregarEquipo($equpo1);
$liga->agregarEquipo($equpo2);
$liga->agregarEquipo($equpo3);
$liga->agregarEquipo($equpo4);
$liga->ordenarEquiposPorPuntos();
echo "<h2>Tabla posiciones</h2>";
$liga->mostrarTablaPosiciones();
echo "<h4>Agregando resultados</h4>";
echo "<h2>Tabla posiciones</h2>";
$liga->agregarResultado("Bayer Munich", 1);
$liga->agregarResultado("Celtic", 0);
$liga->agregarResultado("Bayer Leverkusen", 0);
$liga->agregarResultado("Aston Villa", 2);
$liga->mostrarTablaPosiciones();
