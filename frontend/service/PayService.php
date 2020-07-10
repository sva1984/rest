<?php

namespace frontend\service;


use Yii;

class PayService
{
    public function register($price, $purposePay, $card){
        $session = Yii::$app->session;
        if (!$session->isActive) {
            $session->open();
        }
        $session->set('price', $price);
        $session->set('purpose', $purposePay);
        $session->set('card', $card);

        $url =  "http://rest/payments/card?sessionId=$session->id";
        $session->close();
        return $url;
    }

}