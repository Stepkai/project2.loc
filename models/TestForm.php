<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 26.03.2016
 * Time: 9:32
 */

namespace app\models;
use yii\db\ActiveRecord;


class TestForm extends ActiveRecord{
    public $verifyCode;

    public static function tableName()
    {
        return 'users';
    }

    public function attributeLabels(){
        return [
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'middlename' => 'Отчество',
            'email' => 'E-mail',
            'verifyCode' => 'Verification Code',
            //'text' => 'Текст сообщения',
        ];
    }

    public function rules(){
        return [
            [ ['name', 'email', 'surname'], 'required' ], //обязательно заполнить
            [ 'email', 'email' ],
            [ ['name', 'surname'], 'string', 'length' => [3,20] ],
            ['middlename', 'safe'], //не валидирует поле
            ['verifyCode', 'captcha'],

           // [ 'text', 'trim' ],
        ];
    }

}