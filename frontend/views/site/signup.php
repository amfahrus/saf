<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Daftar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        
        <div class="col-lg-6">
               <p><ul>
<li>Silahkan melakukan pendaftaran /pemesanan terlebih dahulu untuk mengetahui availabilty (ketersediaan) ruangan, sebagai informasi Bunda bahwa sementara ini kami membatasi sampai dengan Maks. 20 Anak Asuh.</li>
<li>Jam Operasional kami dibuka mulai Pukul: 06.00 s/d 18.00 Wib (Hari Senin s/d Minggu), kelebihan per jam akan dihitung sebagai biaya Over Time.</li>
<li>Orang Tua/Wali wajib menunjukkan kepada Petugas <strong>Member Card</strong> pada saat menitipkan dan mengambil Anaknya (jika tidak mengikuti Fasilitas Antar-Jemput).</li>
</ul>
<ul style="list-style-type: square;">
<li>Kami bersedia dengan tulus dan ikhlas mengemban amanah yang Bunda berikan kepada Kami.</li>
</ul></p>
        </div>
        
        <div class="col-lg-6">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                
                <?= $form->field($model, 'customer_name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'customer_phone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'customer_address')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
        
    </div>
</div>
