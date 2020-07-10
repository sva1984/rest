<?php

namespace frontend\controllers;

use frontend\models\Payment;
use frontend\service\CardService;
use Yii;

class PaymentsController extends BaseApiController
{
	public $modelClass = Payment::class;

    /**
     * @param $sessionId
     * @return mixed
     */
	public function actionCard($sessionId){
        $session = Yii::$app->session;
	    $model = new Payment();

        $model->price = $session->get('price');
        $model->purpose = $session->get('purpose');
//        $card = $session->get('card');
        $card = "1111222233334444";
        $cardService = new CardService();

        if($cardService->checkCard($card)){
            $model->card_num = $card;
            $model->date = 1324567;
            $model->save();
            return "Операция оплаты прошла успешно";
        }
        return "Ошибка. Проверьте номер карты";
	}
}
