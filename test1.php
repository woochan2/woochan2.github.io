<?php
$n = 30;
$sum = 0;
$prod = 1;

for($i=1; $i<=$n; $i++) {
    echo $i . " "; // 1부터 n까지 숫자 출력
    $sum += $i; // 합계 구하기
    $prod *= $i; // 곱셈 구하기
}

echo "<br>1부터 $n 까지의 합: $sum"; // 전체 합 출력
echo "<br>1부터 $n 까지의 곱: $prod"; // 전체 곱 출력
?>