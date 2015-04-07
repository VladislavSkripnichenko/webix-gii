<?php
echo "<?php\n";
?>
use yii\helpers\Html;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */


AppAsset::register($this);
?>
<?="<?php";?> $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?="<?=";?>  Yii::$app->language ?>">
    <head>
        <meta charset="<?="<?=";?> Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?="<?=";?> Html::csrfMetaTags() ?>
        <title><?="<?=";?> Html::encode($this->title) ?></title>
        <?="<?=";?> $this->head() ?>

    </head>
    <body>
    <?="<?php";?> $this->beginBody() ?>
    <?="<?=";?> $content ?> ?>
    <?="<?php";?> $this->endBody() ?>
    </body>
    </html>
    <?="<?php";?> $this->endPage() ?>
?>