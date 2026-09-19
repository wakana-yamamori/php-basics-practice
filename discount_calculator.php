<?php //計算を設定する
$original_price = 5000; //商品の価格
$discount_rate = 0.20; //割引率20%
$discount_amount = $original_price * $discount_rate; //5000*0.20を計算
$final_price = $original_price - $discount_amount; //割引後の価格
//ここからは画面に表示したい
echo"商品の価格: " . $original_price . "円<br>";
echo"割引率: ". $discount_rate*100 . "%<br>";