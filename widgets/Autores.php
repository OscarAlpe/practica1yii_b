<?php

namespace app\widgets;

/**
 * Description of Libros
 *
 * @author Oscar
 */
class Autores extends \yii\bootstrap\Widget {
    public $id;
    public $nombre;
    public $apellidos;
    
    public function init() {
        parent::init();
    }
    
    public function run() {
        $salida = '';
        
        $salida .= "<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellidos</td></tr>";
        
        return $salida;
    }
}
