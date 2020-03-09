<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libros".
 *
 * @property int $id
 * @property string|null $ISBN
 * @property string|null $titulo
 * @property string|null $fecha_publicacion
 */
class Libros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_publicacion'], 'safe'],
            [['ISBN', 'titulo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ISBN' => 'Isbn',
            'titulo' => 'Titulo',
            'fecha_publicacion' => 'Fecha Publicacion',
        ];
    }
}
