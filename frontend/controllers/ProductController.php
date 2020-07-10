<?php

namespace frontend\controllers;

use frontend\models\rest\Product;
use frontend\service\PayService;

class ProductController extends BaseApiController
{
	public $modelClass = Product::class;


    /**
     * @param $price
     * @param $purposePay
     * @return mixed
     */
	public function actionPay($price, $purposePay){
        $registerSail = new PayService();
        return $registerSail->register($price, $purposePay);

	}
}
