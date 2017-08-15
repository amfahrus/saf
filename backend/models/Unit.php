<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "p_master_unit".
 *
 * @property integer $p_master_unit_id
 * @property string $unit_name
 * @property string $unit_code
 * @property integer $unit_status
 * @property integer $unit_parent
 *
 * @property TUserUnit[] $tUserUnits
 */
class Unit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'p_master_unit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unit_name', 'unit_code', 'unit_status'], 'required'],
            [['unit_status', 'unit_parent'], 'integer'],
            [['unit_name', 'unit_code'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_master_unit_id' => 'P Master Unit ID',
            'unit_name' => 'Unit Name',
            'unit_code' => 'Unit Code',
            'unit_status' => 'Unit Status',
            'unit_parent' => 'Unit Parent',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTUserUnits()
    {
        return $this->hasMany(TUserUnit::className(), ['p_master_unit_id' => 'p_master_unit_id']);
    }
}
