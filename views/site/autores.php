<?php

/* @var $this yii\web\View */
use yii\widgets\ListView;

$this->title = 'Práctica 1 Yii b';
?>
<div class="site-index">
    <div class="panel panel-default">
        <div class="panel-heading">Listado de Autores</div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr><th>ID</th><th>Nombre</th><th>Apellidos</th></tr>
                </thead>
                <tbody>
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_autores',
                        'layout' => '{items}',
                    ]); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>