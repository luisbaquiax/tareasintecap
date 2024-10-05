<?php
class Juego
{
    private $jugador1;
    private $jugador2;
    const PIEDRA = "piedra";
    const TIJERA = "tijera";
    const PAPEL = "papel";

    const OPCIONES = [self::PIEDRA, self::TIJERA, self::PAPEL];

    /**
     * @param $jugador1
     * @param $jugador2
     */
    public function __construct($jugador1, $jugador2)
    {
        $this->jugador1 = $jugador1;
        $this->jugador2 = $jugador2;
    }

    public function establecerGanador($opcion1, $opcion2)
    {
        switch ($opcion1) {
            case self::TIJERA:
                switch ($opcion2) {
                    case self::TIJERA:
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Han empatado con la computadora";
                    case self::PIEDRA:
                        $this->jugador1->setGano(false);
                        $this->jugador2->setGano(true);
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Haz perdido, ganó la computadora";
                    case self::PAPEL:
                        $this->jugador1->setGano(true);
                        $this->jugador2->setGano(false);
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Haz ganado, perdió la computadora";
                }
                break;
            case self::PIEDRA:
                switch ($opcion2) {
                    case self::TIJERA:
                        $this->jugador1->setGano(false);
                        $this->jugador2->setGano(true);
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Haz ganado, ganó la computadora";
                    case self::PIEDRA:
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Han empatado con la computadora";
                    case self::PAPEL:
                        $this->jugador1->setGano(true);
                        $this->jugador2->setGano(false);
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Haz perdido, ganó la computadora";
                }
                break;
            case self::PAPEL:
                switch ($opcion2) {
                    case self::TIJERA:
                        $this->jugador1->setGano(false);
                        $this->jugador2->setGano(true);
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Haz perdido, ganó la computadora";
                    case self::PIEDRA:
                        $this->jugador1->setGano(true);
                        $this->jugador2->setGano(false);
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Haz ganado, perdió la computadora";
                    case self::PAPEL:
                        return "Elegiste: $opcion1, Computadora: $opcion2<br> Han empatado con la computadora";
                }
                break;
            default:
                return "Opcion invalida";
        }
        return "";
    }

    public function getOpcionBoot(){
        $random = rand(0,sizeof(self::OPCIONES)-1);
        return self::OPCIONES[$random];
    }
}