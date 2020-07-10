<?php
/**
 * Created by PhpStorm.
 * User: asv
 * Date: 10.07.2020
 * Time: 15:13
 */

namespace frontend\service;


use Yii;

class PayService
{
    public function register($price, $purposePay){
        $session = Yii::$app->session;
        if (!$session->isActive) {
            $session->open();
        }
        $session->set('price', $price);
        $session->set('purpose', $purposePay);
        $url =  "http://rest/payments/card/form?sessionId=$session->id";
        $session->close();
        return $url;
    }

}