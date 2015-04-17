<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nilai */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilai-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'peserta_id' => $model->peserta_id, 'juri_id' => $model->juri_id, 'jenis_nilai_id' => $model->jenis_nilai_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'peserta_id' => $model->peserta_id, 'juri_id' => $model->juri_id, 'jenis_nilai_id' => $model->jenis_nilai_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'peserta_id',
            'juri_id',
            'jenis_nilai_id',
            'nilai',
        ],
    ]) ?>

</div>
