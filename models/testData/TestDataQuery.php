<?php

namespace app\models\testData;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[TestData]].
 *
 * @see TestData
 */
class TestDataQuery extends ActiveQuery
{
    /**
     * Finds by name.
     *
     * @param $name
     * @return TestDataQuery
     */
    public function byName($name)
    {
        return $this->andWhere(['name' => $name]);
    }

    /**
     * {@inheritdoc}
     * @return TestData[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return TestData|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
