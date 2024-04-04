<?php
$n = 100; // 문제에서 주어진 n의 값

// 최소 2개의 항이 필요하기 때문에, 초기 두 항을 1로 설정
$fibonacci[0] = 1;
$fibonacci[1] = 1;

for ($i = 2; $i < $n; $i++) {
    // 피보나치 수열의 다음 항을 계산 (fi+2 = fi+1 + fi)
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

echo "i  fi  fi+1/fi<br>";
for ($i = 0; $i < $n - 1; $i++) { // n-1까지 반복, fi+1/fi 계산을 위해
    if ($i > 0) { // 첫 번째 항에서는 비례를 계산할 수 없음
        // 앞과 뒤 항의 비례를 계산하여 출력
        $ratio = $fibonacci[$i + 1] / $fibonacci[$i];
        echo ($i + 1) . " " . $fibonacci[$i] . " " . number_format($ratio, 6) . "<br>";
    } else {
        // 첫 번째 항 출력
        echo ($i + 1) . " " . $fibonacci[$i] . " 1<br>";
    }
    // 100 이하의 정수 숫자 n을 입력받았으므로, fi가 100을 초과하는 순간 반복 종료
    if ($fibonacci[$i] > 100) break;
}
?>
