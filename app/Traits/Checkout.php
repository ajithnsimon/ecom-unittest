<?php

namespace App\Traits;

trait Checkout
{

    public function total($items)
    {
        $total = 0;

        foreach ($items as $item) {

            if($item['code'] == 'PF1') {
                $quantity = $item['quantity'];
                $discountQuantity = floor($quantity / 2);
                if($discountQuantity >= 1){
                    $price = $discountQuantity * $product['price'];
                }
                else{
                    $price = 1 * $product['price'];
                }
            }

            else if($item['code'] == 'PF2') {
                $quantity = $item['quantity'];
                if($quantity >= 3){
                    $price = $quantity * ($product['price'] - 5);
                }
                else{
                    $price = $quantity * $product['price'];
                }
            }

            else{
                $price = $quantity * $product['price'];
            }


            $total += $price;
        }

        return $total;
    }
}