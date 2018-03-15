<?php
use yii\widgets\ActiveForm;
use yii\widgets\LinkPager;
use yii\helpers\Html;

?>
<h1>Автомобили!</h1>



<?php
//foreach ($car as $a) {
//echo  "$a[marka]"." "."$a[year]".'<br>';
//}
?>
<ul>
<?php foreach ($car as $a) {?>
    <b><a href="<?=YII::$app->urlManager->createUrl(['post/driv'])?>"><?=$a->marka?></a></b> <?=$a->year?></li><br>
<?php } ?>

</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>