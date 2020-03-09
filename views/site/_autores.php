<?php
use app\widgets\Autores;
?>

<div>
    <?= Autores::widget([
        'id' => $model->id,
        'nombre' => $model->nombre,
        'apellidos' => $model->apellidos,
    ]) ?>
</div>