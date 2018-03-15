<?php

namespace app\models;

use yii\db\ActiveRecord;

class Car extends ActiveRecord{
    public static function tableName()
    {
        return 'car'; //объявляем с какой таблицей работой
    }

    public function getDrivers(){  //связь с таблицей продуктов
        return $this->hasOne(Driver::className(), ['id_avto' => 'id_avto']);
    }
	
}
?>