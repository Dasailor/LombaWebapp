<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisNilai */

$this->title = 'Update Jenis Nilai: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jenis Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'jenis_nilai' => $model->jenis_nilai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-nilai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
