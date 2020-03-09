<?php
use app\widgets\Libros;
?>

<div>
    <?= Libros::widget([
        'id' => $model->id,
        'isbn' => $model->isbn,
        'titulo' => $model->titulo,
        'fecha_publicacion' => $model->fecha_publicacion,
    ]) ?>
</div>