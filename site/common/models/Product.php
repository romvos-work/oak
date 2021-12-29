<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property int $id
 * @property string $name
 * @property string $measureType
 * @property float $measureValue
 * @property string|null $image
 * @property string $createdAt
 * @property string $updatedAt
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'measureType'], 'required'],
            [['measureValue'], 'number'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['name', 'measureType', 'image'], 'string', 'max' => 255],
            [['name'], 'unique'],
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
            'measureType' => 'Measure Type',
            'measureValue' => 'Measure Value',
            'image' => 'Image',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
