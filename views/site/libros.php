<?php

/* @var $this yii\web\View */
use yii\widgets\ListView;

$this->title = 'Práctica 1 Yii b';
?>
<div class="site-index">
    <div class="panel panel-default">
        <div class="panel-heading">Listado de Libros</div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr><th>ID</th><th>ISBN</th><th>Titulo</th><th>Fecha publicación</th></tr>
                </thead>
                <tbody>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_libros',
                        'layout' => '{items}',
                    ]); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>