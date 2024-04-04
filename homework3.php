//1번------------------------------------------------------------------
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


//2번------------------------------------------------------------------
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

//3번------------------------------------------------------------------

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


//4번------------------------------------------------------------------

// 마지막 항 출력 (비율 계산 없음)
echo "$n  " . $fibonacci[$n - 1] . "<br>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>도형 면적과 체적 계산기</title>
</head>
<body>
    <h1>도형 면적과 체적 계산기</h1>
    <h2>삼각형 면적</h2>
    <form method="post" action="">
        <label for="tri-base">밑변:</label>
        <input type="number" name="tri-base" id="tri-base" required>
        <br>
        <label for="tri-height">높이:</label>
        <input type="number" name="tri-height" id="tri-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['tri-base']) && isset($_POST['tri-height'])) {
            $base = $_POST['tri-base'];
            $height = $_POST['tri-height'];
            $area = $base * $height / 2;
            echo "<p>삼각형의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>직사각형 면적</h2>
    <form method="post" action="">
        <label for="rect-width">가로:</label>
        <input type="number" name="rect-width" id="rect-width" required>
        <br>
        <label for="rect-height">세로:</label>
        <input type="number" name="rect-height" id="rect-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['rect-width']) && isset($_POST['rect-height'])) {
            $width = $_POST['rect-width'];
            $height = $_POST['rect-height'];
            $area = $width * $height;
            echo "<p>직사각형의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>원 면적</h2>
    <form method="post" action="">
        <label for="cir-radius">반지름:</label>
        <input type="number" name="cir-radius" id="cir-radius" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
        if(isset($_POST['cir-radius'])) {
            $radius = $_POST['cir-radius'];
            $area = pi() * pow($radius, 2);
            echo "<p>원의 면적은 $area 입니다.</p>";
        }
    ?>


    <h2>직육면체 체적</h2>
    <form method="post" action="">
        <label for="rectp-width">가로:</label>
        <input type="number" name="rectp-width" id="rectp-width" required>
        <br>
        <label for="rectp-length">세로:</label>
        <input type="number" name="rectp-length" id="rectp-length" required>
        <br>
        <label for="rectp-height">높이:</label>
        <input type="number" name="rectp-height" id="rectp-height" required>
        <br>
        <input type="submit" value="계산">
    </form>
    <?php
    if(isset($_POST['rectp-width']) && isset($_POST['rectp-length']) && isset($_POST['rectp-height'])) {
        $width = $_POST['rectp-width'];
        $length = $_POST['rectp-length'];
        $height = $_POST['rectp-height'];
        $volume = $width * $length * $height;
        echo "<p>직육면체의 체적은 $volume 입니다.</p>";
    }
?>


<h2>원통 체적</h2>
<form method="post" action="">
    <label for="cyl-radius">반지름:</label>
    <input type="number" name="cyl-radius" id="cyl-radius" required>
    <br>
    <label for="cyl-height">높이:</label>
    <input type="number" name="cyl-height" id="cyl-height" required>
    <br>
    <input type="submit" value="계산">
</form>
<?php
    if(isset($_POST['cyl-radius']) && isset($_POST['cyl-height'])) {
        $radius = $_POST['cyl-radius'];
        $height = $_POST['cyl-height'];
        $volume = pi() * pow($radius, 2) * $height;
        echo "<p>원통의 체적은 $volume 입니다.</p>";
    }
?>


<h2>구 체적</h2>
<form method="post" action="">
    <label for="sph-radius">반지름:</label>
    <input type="number" name="sph-radius" id="sph-radius" required>
    <br>
    <input type="submit" value="계산">
</form>
<?php
    if(isset($_POST['sph-radius'])) {
        $radius = $_POST['sph-radius'];
        $volume = 4/3 * pi() * pow($radius, 3);
        echo "<p>구의 체적은 $volume 입니다.</p>";
    }
?>
</body>
</html>

//5번------------------------------------------------------------------

<!DOCTYPE html>
<html>
<head>
    <title>달력</title>
</head>
<body>
<form action="calendar.php" method="post">
년(年)을 입력하세요 : <input type="number" name="y" /><br />
월(月)을 입력하세요 : <input type="number" name="m" /><br />
<input type="submit" value="확인" />
</form>
<?PHP
if(isset($_POST['y']) && strlen($_POST['y']) > 0 && isset($_POST['m']) && strlen($_POST['m']) > 0) {
    $m = $_POST["m"];
    $y = $_POST["y"];
    if(checkdate($m,1,$y)) {
        $firstweekday = getDate(mktime(0,0,0,$m,1,$y)); //해당 월 1일의 요일
        $firstweekday = $firstweekday['wday'];
        $lastday = date("t", mktime(0,0,0,$m,1,$y)); //t = 주어진 월의 총 일 수(ex : 2014년 1월 = "31" 일)
        $fc = ceil(($firstweekday+$lastday)/7); //총 주의 수
        $count = $fc*7; //for 문 count
        $j=1;
        echo "<table border='1' width=\"1000\" bordercolor=\"#07F27F2\">";
        echo "<tr bgcolor=\"#7F27F2\" align=\"center\"><td colspan=\"7\">". $y."년 ".$m."월 달력</td></tr>";
        echo "<tr align=\"right\" bgcolor=\"#7F27F2\"><td>일</td><td>월</td><td>화</td><td>수</td><td>목</td><td>금</td><td>토</td></tr>";
        for($i=1; $i<=$count; $i++){
            if($i%7==1){
                echo "<tr>";
            }
            echo "<td>";
            if($i>$firstweekday && $j<=$lastday){
                echo $j;
                $j++;
            }
            else {
                echo "&nbsp;";
            }
            echo "</td>";
            if($i%7==0){
                echo "</tr>";
            }
        }
        echo "</table>";
        echo "<br/>";        
    }
}
else {  
    echo "<script>alert(\"올바른 날짜형식을 입력해 주세요\");</script>";  
}
?>
</body>
</html>