<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?>!!!</h1>

    <p>
        <div class="row masonry" data-columns>
                <div class="item">
                    <div class="thumbnail">
                        <img src="/images/12.jpg" alt="" class="img-responsive">
                        <!--img-responsive отвечает за подстройку масштаба изображения-->
                        <div class="caption">
                            <h3><a href="https://www.abw.by/novosti/">Новости авто мира!!!</a></h3>
                        <p>Самые свежие новости автомира!.</p>
                        <p>Доска бесплатных <a href="https://www.abw.by/allpublic/">объявлений</a>!.</p>
                        <a href="https://www.abw.by/" class="btn btn-success">Подробнее <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </p>

<!--    <code>--><?//= __FILE__ ?><!--</code>-->
</div>


