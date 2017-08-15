<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->registerCss(".navbar-default {
  background-color: #3c85e7;
  border-color: #c0392b;
}
.navbar-default .navbar-brand {
  color: #000000;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #e2f006;
}
.navbar-default .navbar-text {
  color: #000000;
}
.navbar-default .navbar-nav > li > a {
  color: #000000;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #e2f006;
}
.navbar-default .navbar-nav > li > .dropdown-menu {
  background-color: #3c85e7;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a {
  color: #000000;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:hover,
.navbar-default .navbar-nav > li > .dropdown-menu > li > a:focus {
  color: #e2f006;
  background-color: #c0392b;
}
.navbar-default .navbar-nav > li > .dropdown-menu > li.divider {
  background-color: #c0392b;
}
.navbar-default .navbar-nav .open .dropdown-menu > .active > a,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
.navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
  color: #e2f006;
  background-color: #c0392b;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #e2f006;
  background-color: #c0392b;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #e2f006;
  background-color: #c0392b;
}
.navbar-default .navbar-toggle {
  border-color: #c0392b;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #c0392b;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #000000;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #000000;
}
.navbar-default .navbar-link {
  color: #000000;
}
.navbar-default .navbar-link:hover {
  color: #e2f006;
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #000000;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #e2f006;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #e2f006;
    background-color: #c0392b;
  }
}");
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Beranda', 'url' => ['/site/index']],
        ['label' => 'Tentang Kami', 'url' => ['/site/about']],
        ['label' => 'Fasilitas', 'url' => ['/site/facility']],
        ['label' => 'Program', 'url' => ['/site/program']],
        //['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Daftar', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Masuk', 'url' => ['/site/login']];
    } else {
        $menuItems[] = ['label' => 'Pesan', 'url' => ['/order/create']];
        $menuItems[] = ['label' => 'Status', 'url' => ['/order/index']];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Keluar (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Yii::$app->name ?> <?= date('Y') ?></p>

        <p class="pull-right">Info Lebih Lanjut Hubungi Kantor : 021-22145461, Bunda Lisa : 081319134916, 08568522526 (WA)</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
