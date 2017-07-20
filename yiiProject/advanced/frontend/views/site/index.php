<?php

/* @var $this yii\web\View */

$this->title = 'Online Store';
?>
<?php

use yii\Helpers\Url;
use yii\widgets\ActiveForm;
use yii\Helpers\Html;

?>

    <!--Slider Area-->


 <br> <br> <br> <br> <br>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/gadget1.jpg" alt="First slide">
                        <div class="carousel-caption">
                            
                            
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/gadget2.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/gadget3.jpg" alt="Third slide">
                        <div class="carousel-caption">
                           
                            
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        </span></a>
            </div>
            <div class="main-text hidden-xs">
               
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

  
  <!--/slider-->
    
    <div class="row text-center">

    <br> <br> <br> <br> <br> <br> <br> 

    <h1 style="color: black;font-family: 'Roboto', sans-serif;font-size: 35px;
                            font-weight: 700;  margin: 0 15px; text-transform: uppercase; margin-bottom: 30px;
                      position: relative; text-align:center;">Featured Gadgets</h1>


                        <?php foreach ($product as $product) { ?>

            <div class="col-md-3 col-sm-3 hero-feature">
                <div class="thumbnail"> 
                
                       <img id="img_<?= $product["id"]?>"  <?= Html::img('/yiiProject/advanced/backend/web/uploads/'.$product->image,['width' => '307px','height' => '250px']);  ?> 

                    <div class="caption">
                        <h3><?=$product->name?></h3>
                        <p><?=$product->description?></p>
                        <p><?=$product->amount?></p>

                         <form action="<?=Url::to(['/site/cart'])?>" method="post"> 
                                <input type="text" name="pid" value="<?=$product->id?>">
                                <br> <br>

                            <button class="btn btn-success ">Add to cart

                                </button>   

                            </form>

                    </div>

                </div>
            </div>

            
<?php } ?>
        </div>
    
    
    

  
