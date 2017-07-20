<?php

use yii\Helpers\Url;
use yii\Helpers\Html;

?>
<!-- header -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
           
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Gadget Jungle</a>
            </div>



<div class="col-sm-8">
                        <div>
                            <ul class="nav navbar-nav">
                                <li><a href="<?=Url::to(['/site/login']) ?>"><i class="fa fa-lock"></i> Account</a></li>
                                
                                

                                <?php if(Yii::$app->user->isGuest) { ?>


                                <li><a href="<?=Url::to(['/site/login']) ?>"><i class="fa fa-lock"></i> Login</a></li>
                                <li><a href="<?=Url::to(['/site/signup']) ?>"><i class="fa fa-lock"></i> Signup</a></li>

                                <?php } else {

                                  echo Html::beginForm(['/site/logout'], 'post')
                                  . Html::submitButton(
                                   'Logout (' . Yii::$app->user->identity->username . ')',
                                   ['class' => 'btn btn-link logout']
                                   )
                                  . Html::endForm();

                                    } ?>
                            </ul>
                        </div>
                    </div>


           
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   <li><a href="<?=Url::to(['/site/index']) ?>">Home</a></li>
				   <li><a href="<?=Url::to(['/site/about']) ?>">About</a></li>
					<li><a href="<?=Url::to(['/site/contact']) ?>">Contact</a></li>

                </ul>
            </div>
           
        </div>
       
    </nav>