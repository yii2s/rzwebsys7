<?php
use common\widgets\admin\ExtFilter;

/**
 * @var yii\web\View $this
 * @var app\modules\main\models\Comments $model
 */

echo ExtFilter::widget(["model" => $model]);