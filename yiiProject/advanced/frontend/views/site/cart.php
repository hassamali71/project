<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = 'Cart';
$this->params['breadcrumbs'][] = $this->title;
?>





<section>
		<div class="container">
			<!-- <div class="breadcrumbs"> -->
				<ol class="breadcrumb">
				  <li><a href="<?=Url::to(['/site/cart']) ?>">Cart</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

					<?php foreach ($carts as $cart) { ?>
						
					
						<tr>
							<td >
								<?= Html::img('/yiiProject/advanced/backend/web/uploads/'.$cart->image,['width' => '307px','height' => '250px']);?>
							</td>
							<td class="cart_description">
								<h4><a href=""><?=$cart->name?></a></h4>
							</td>
							<td class="cart_price">
								<p>$<?=$cart->amount?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?=$cart->amount?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> 