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
        
        $salida .= "<tr><th>$this->id</th><th>$this->nombre</th><th>$this->apellidos</th></tr>";
        
        return $salida;
    }
}
