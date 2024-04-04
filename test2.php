<?php
$n = 30; // 배열에 저장할 랜덤 숫자의 개수
$data = array(); // 랜덤 숫자를 저장할 배열

// n개의 10 이상 100 이하 랜덤 숫자를 생성하여 배열에 저장
for ($i = 0; $i < $n; $i++) {
    $data[$i] = rand(10, 100);
}

echo "생성된 랜덤 숫자: ";
foreach ($data as $value) {
    echo $value . " "; // 생성된 랜덤 숫자 출력
}
echo "<br>";

// 배열을 올림차순으로 정렬
sort($data);

echo "올림차순으로 정렬된 숫자: ";
foreach ($data as $value) {
    echo $value . " "; // 정렬된 숫자 출력
}
?>