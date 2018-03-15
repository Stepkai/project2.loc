<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 14.03.2016
 * Time: 21:17
 */

namespace app\controllers;

use app\models\Car;
use Yii;
use app\models\TestForm;
use app\models\Driver;
use yii\data\Pagination;


class PostController extends AppController{

    public $layout = 'basic';


    // отключает проверку если index
    public function beforeAction($action){
        if( $action->id == 'index' ){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }
// Ajax запросы
    public function actionIndex()
    {
        if (Yii::$app->request->isAjax) {
//            debug($_POST);
            debug(Yii::$app->request->post());
            return 'test';
        }


//      $post = TestForm::findOne(13);     //внесение данных в таблицу
//        $post->email = 'sasha@tut.by';
//        $post->save();
//        $post->delete(); //удаление из таблицы БД
//      debug($post);


// выводим Testform
        $model = new TestForm();

//        $model->surname = 'Автор';
//        $model->name = 'Автор';
//        $model->middlename = 'Автор';
//        $model->email = 'sasha@tut.by';
//        $model->save();

        if( $model->load(Yii::$app->request->post()) ){
            if( $model->save() ){
                Yii::$app->session->setFlash('success', 'Данные приняты');
                return $this->refresh();
            }else{
                Yii::$app->session->setFlash('error', 'Ошибка');
            }
        }

        $this->view->title = 'Обратная связь';
        return $this->render('test', compact('model'));
    }

    public function actionShow(){
        $this->view->title = 'Авто';
        $car = Car::find();

        $pagination = new Pagination([
           'defaultPageSize' =>  6,
            'totalCount' => $car->count()
        ]);

        $car = $car->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();


        return $this->render('car', [
            'car' => $car,
            'pagination' => $pagination
        ]);
//        return $this->render('car', compact('avto'));
    }

    public function actionDriv()
    {
        $this->view->title = 'Водители';

        //$cats = Driver::findOne(2);
        $cats = Driver::find()->with('cars')->where('id_avto=3')->all();
       // debug($cats);

        return $this->render('driv', compact('cats'));
    }


}