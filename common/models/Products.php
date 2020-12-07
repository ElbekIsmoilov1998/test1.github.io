<?php

namespace common\models;
use dosamigos\fileupload\FileUploadUI;
use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property int|null $number
 * @property string $price
 * @property string|null $image
 * @property string $status
 * @property int $category_id
 */
class Products extends \yii\db\ActiveRecord
{
    public $img_file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['name', 'status'], 'string'],
            [['number', 'category_id'], 'integer'],
            [['price'], 'string', 'max' => 255],
            [['img_file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg, gif'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Названия',
            'number' => 'Код продукта',
            'price' => 'Цена',
            'image' => 'Фото',
            'status' => 'Статус',
            'category_id' => 'Category ID',
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            $fileName = $this->img_file->baseName . '_' . Yii::$app->security->generateRandomString(10);
            $path = Yii::getAlias('@frontend') . '/web/img/' . $fileName . '.' . $this->img_file->extension;
            $this->image = $fileName . '.' . $this->img_file->extension;
            $this->save();
            return $this->img_file->saveAs($path);
        } else {
            return false;
        }
    }
}
