<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\JenisNilai */

$this->title = 'Create Jenis Nilai';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Nilais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-nilai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
