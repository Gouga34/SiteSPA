<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="../web/images/logo.png" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png',['alt'=>Yii::$app->name, 'style' => 'width:30%;margin-top:-10%;']),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);

    ///Mise en place du menu:///
    $menuItems[]=['label' => 'Accueil', 'url' => ['/site/index']];

    //Menu des membres connectés : 
        ////TODO
    //Menu des utilisateurs consultants :
   // if(Yii::$app->user->isGuest){
        $menuItems[]=[
            'label' => 'Nos animaux',
            'items' => [
                ['label' => "Chiens à l'adoption", 'url' => ['/animal/index-chiens']],
                ['label' => "Chats à l'adoption", 'url' => ['/animal/index-chats']],
                ['label' => 'Ils ont trouvé le bonheur', 'url' => ['/photo/nouvelles-adoptes']]
            ]
        ];
        $menuItems[]=[
            'label' => 'Perdus / Trouvés',
            'items' => [
                ['label' => 'Perdus', 'url' => ['/perdu/index']],
                ['label' => 'Trouvés', 'url' => ['/trouve/index']],
                ['label' => "J'ai perdu mon chat, que faire ?", 'url' => ['/site/perdu-chat']],
            ]
        ];
        $menuItems[]=[
            'label' => 'Nous aider',
            'items' => [
                ['label' => 'Devenir Bénévole', 'url' => ['/site/devenir-benevole']],
                ['label' => 'Faire un Don', 'url' => ['/site/faire-un-don']],
            ]
        ];
        $menuItems[]=[
            'label' => 'Contact',
            'items' => [
                ['label' => 'FAQ', 'url' => ['/faq/index']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ]
        ];
   // }

    

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
