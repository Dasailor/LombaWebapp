<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nilai */

$this->title = 'Update Nilai: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'peserta_id' => $model->peserta_id, 'juri_id' => $model->juri_id, 'jenis_nilai_id' => $model->jenis_nilai_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nilai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
