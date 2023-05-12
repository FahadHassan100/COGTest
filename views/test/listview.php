<?php 
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\data\ArrayDataProvider;
?>


<?php

$provider = new ArrayDataProvider([
    'allModels' => $listData->data,
    'sort' => [
        'attributes' => ['id', 'username', 'email'],
    ],
    'pagination' => [
        'pageSize' => 10,
    ],
]);
// get the posts in the current page
//$posts = $provider->getModels();
?>

<table>
    <thead>
        <tr>
            <td>Date/Tuesday</td>
            <td>hour</td>
            <td>start</td>
            <td>number of lines</td>
            <td>result</td>
        </tr>
    </thead>
    <tbody>
    


<?php
echo ListView::widget([
    'dataProvider' => $provider,
    'layout' => "{items}",
    'itemView' => function ($model, $key, $index, $widget) { ?>
        
        <tr>
            <td><?= Html::encode($model['tempDate']) ."-<b>". Html::encode($model['tempTuesday']).'</b>'; ?></td>
            <td><?= Html::encode($model['tempHour']); ?></td>
            <td><p class=<?php echo $model['tempStart'] == 0 ? "redCircle" : "blueCircle"; ?>><?php echo $model['tempStart'] == 0 ? "우" : "좌"; ?></p></td>
            <td><p style="margin: 0 auto;" class=<?php echo $model['tempNOL'] == 3 ? "redCircle" : "blueCircle"; ?>><?php echo $model['tempNOL'] == 3 ? "3" : "4"; ?></p></td>
            <td><p class=<?php echo $model['tempResult'] == 0 ? "redCircle" : "blueCircle"; ?>><?php echo $model['tempResult'] == 0 ? "짝" : "홀"; ?></p></td>
            
        </tr>

        <?php
    },
]);

?>
    </tbody>
</table>

<h3><?php //var_dump($listData); ?></h3>