<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\Helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\categoryWidget;
use frontend\widgets\brandsproductsWidget;
use frontend\widgets\pricerangeWidget;
use frontend\widgets\shippingWidget;
use yii\data\ActiveDataProvider;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Gadget Jungle',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
        

    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
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
        <?=$this->render('header.php')?>
        <?= $content ?>
        <?=$this->render('footer.php')?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; GadgetJungle <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<div class="modal fade" tabindex="-1" role="dialog" id="shoppingcart">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Shopping Cart</h4>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <img src="" id="imgPreview" width="307px" height="250px">
            </div>
            <div class="col-md-6">
                <p align="middle"> Product's Name: <span id="productName"></span> </p>
                <p align="middle"> Price: <span id="txtprice"></span> </p>
            </div> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<?php $this->endBody() ?>
<script>
    function addCart(id)
    {
        img = $("#img_"+id).attr("src");
        $("#imgPreview").attr
        ({
            'src': img,

        })
        txtProduct = $("#txtProduct_"+id).text();  // txtProduct Product name ki id show karay ga
       $("#productName").text(txtProduct);   // Product Name Show karay ga Add to Cart mai
       $("#txtprice").text($("#txtPrice_"+id).text());  // Price show karay ga  Add to cart mai
       $('#shoppingcart').modal(); 

      
    }
</script>
</html>
<?php $this->endPage() ?>
