<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
    <h1>Водители!</h1>

<? //это для одной таблицы
foreach($cats as $s) {
echo '<ul>';
    foreach ($s as $k) {
    echo ' '.$k.' ';
    }
    echo '</ul>';
}
?>


<?php //debug($cats) ?>
<?php //echo count($cats[0]->cars)?>
<?php //debug($cats)?>


<?php
//foreach ($cats as $cat) {
//    echo '<ul>';
//    echo '<li>' . $cat->name . '</li>';
//    $cars = $cat->cars;
//    foreach ($cars as $ca) {
//        echo '<ul>';
//        echo '<li>' . $ca->marka . '</li>';
//        echo '</ul>';
//    }
//    echo '</ul>';
//}



?>
