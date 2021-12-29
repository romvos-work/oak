<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%currency}}".
 *
 * @property int $id
 * @property int $code
 * @property string $codeText
 * @property string $name
 * @property string $createdAt
 * @property string $updatedAt
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%currency}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'codeText', 'name'], 'required'],
            [['code'], 'integer'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['codeText', 'name'], 'string', 'max' => 255],
            [['code'], 'unique'],
            [['codeText'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'codeText' => 'Code Text',
            'name' => 'Name',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
