<?php

namespace app\models\testData;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "test_data".
 *
 * @property int $id
 * @property string $name Название данных
 * @property int $value Значение
 * @property int $created_at Дата создания записи
 * @property int $updated_at Дата обновления записи
 */
class TestData extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test_data';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class'      => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'value', 'created_at', 'updated_at'], 'required'],
            [['value', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'         => Yii::t('test-data', 'ID'),
            'name'       => Yii::t('test-data', 'Название данных'),
            'value'      => Yii::t('test-data', 'Значение'),
            'created_at' => Yii::t('test-data', 'Дата создания записи'),
            'updated_at' => Yii::t('test-data', 'Дата обновления записи'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TestDataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TestDataQuery(get_called_class());
    }
}
