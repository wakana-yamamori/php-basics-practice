<?php
 $product_name = "ノートパソコン";
 $price = 80000;//価格
 $quantity = 2;//数量
 $tax_rate = 0.1;//10%を少数で表記している
 //計算
 $subtotal = $price * $quantity;
 $tax_amount = $subtotal * $tax_rate;
 $total = $subtotal + $tax_amount;
 //画面に表記する
 echo "商品名: " . $product_name . "<br>";
 echo "単価: " . $price . "円<br>";
 echo "数量: " . $quantity . "個<br>";
 echo "小計: " . $subtotal . "円<br>";
 echo "消費税(" . ($tax_rate * 100) . "%): " .$tax_amount . "円<br>" ;
 echo "<strong>合計金額: " .$total . "円</strong><br>";