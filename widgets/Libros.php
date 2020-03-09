<?php

namespace app\widgets;

/**
 * Description of Libros
 *
 * @author Oscar
 */
class Libros extends \yii\bootstrap\Widget {
    public $id;
    public $isbn;
    public $titulo;
    public $fecha_publicacion;
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        $salida = '';
        
        $fechaFormateada = strtotime($this->fecha_publicacion);
        $fechaFormateada = date("d/m/Y", $fechaFormateada);
        $salida .= "<tr><td>$this->id</td><td>$this->isbn</td><td>$this->titulo</td><td>$fechaFormateada</td></tr>";
        
        return $salida;
    }
}
