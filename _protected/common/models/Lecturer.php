<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lecturer".
 *
 * @property int $id
 * @property string $name
 * @property string $nip
 * @property string $email
 */
class Lecturer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lecturer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'nip', 'email'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['nip', 'email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'nip' => 'Nip',
            'email' => 'Email',
        ];
    }
}
