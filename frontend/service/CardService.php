<?php
/**
 * Created by PhpStorm.
 * User: asv
 * Date: 10.07.2020
 * Time: 16:31
 */

namespace frontend\service;


class CardService
{
    /**
     * @param $card
     * @return bool
     */
    public function checkCard($card) {
        $card = str_split($card);
        foreach ($card as $k => $val){
            if ($k%2 === 0){
                $card[$k] = $card[$k] * 2;
                if ($card[$k] > 9){
                    $card[$k] -= 9;
                }
            }
        }
        $sumCard = array_sum($card);
        return ($sumCard%10 === 0);
    }
}