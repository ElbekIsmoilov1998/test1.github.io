<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property string $product_id
 * @property string $date
 * @property int|null $payed_by
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number', 'product_id'], 'required'],
            [['name'], 'string'],
            [['date'], 'safe'],
            [['payed_by'], 'integer'],
            [['number'], 'string', 'max' => 10],
            [['product_id'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'number' => Yii::t('app', 'Number'),
            'product_id' => Yii::t('app', 'Product ID'),
            'date' => Yii::t('app', 'Date'),
            'payed_by' => Yii::t('app', 'Payed By'),
        ];
    }
}
