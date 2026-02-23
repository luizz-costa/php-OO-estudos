<?php 

/**
 * Muitas vezes quando a gente desenvolve é necessario tomar decisoes no sentido de escolher uma opcao
 * que o programa deva seguir, entao essas escolhas e opcoes normalemnte nos fazemos atraves de Metodos.
 * 
 * Por exemplo:
 *  
 */
enum ZoomMode
{
    case Small;
    case Medium;
    case Big;
    case SuperBig;
}

class Calendar
{
    private ZoomMode $zoomMode;

    public function setZoomMode( ZoomMode $mode)
    {
        $this->zoomMode = $mode;
    }
    public function show()
    {
        if($this->zoomMode == ZoomMode::Small)
            {
                echo "Exibindo o modo pequeno";
            }
            else if ($this->zoomMode == ZoomMode::Medium)
                {
                    echo "Exibindo o modo medio";
                }
            else if ($this->zoomMode == ZoomMode::Big)
                {
                    echo "Exibindo o modo grande";
                }
            else if ($this->zoomMode == ZoomMode::SuperBig)
                {
                    echo "Exibindo o modo super grande";
                }
    }
}

$calendar = new Calendar;
$calendar->setZoomMode( ZoomMode::SuperBig );
$calendar->show();