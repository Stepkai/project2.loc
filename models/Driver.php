<?php

namespace app\models;

use yii\db\ActiveRecord;

class Driver extends ActiveRecord{
    public static function tableName()
    {
        return 'driver'; //объявляем с какой таблицей работой
    }

    public function getCars(){  //связь с таблицей продуктов
        return $this->hasOne(Car::className(), ['id_avto' => 'id_avto']);
    }
	
}
?>