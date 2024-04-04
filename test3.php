<?php
$n = 54; // 피보나치 수열의 항 개수. 사용자 입력 또는 특정 조건에 따라 변경 가능합니다.

// 피보나치 수열의 첫 두 항 초기화
$fibonacci = [1, 1];

// 피보나치 수열의 다음 항을 계산하여 추가
for ($i = 2; $i < $n; $i++) {
    $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

echo "i  fi  fi+1/fi<br>";

// 첫 번째 항 출력
echo "1  1<br>";

// 두 번째 항부터 n-1까지의 피보나치 수열과 비율 계산 및 출력
for ($i = 1; $i < $n - 1; $i++) {
    // 비율 계산 및 출력
    $ratio = $fibonacci[$i + 1] / $fibonacci[$i];
    echo ($i + 1) . "  " . $fibonacci[$i] . "  " . number_format($ratio, 6) . "<br>";
}

// 마지막 항 출력 (비율 계산 없음)
echo "$n  " . $fibonacci[$n - 1] . "<br>";
?>
