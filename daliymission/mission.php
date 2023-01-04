<?php
// 배열 생성
$a = [1,-5,3,4,0,-10,-1,6,10000,-12345];
// 최대 값 설정
$result = 100000000;
// 배열만큼 반복
foreach ($a as $value){
    // 양수 & 최대값 보다 작은값 이면
    if ($value > 0 and $result > $value){
        // 결과값 = 해당값 + 1 저장
        $result = $value+1;
        // 결과값이 a배열에 있는지 체크
        if (in_array($result,$a)){
            // 있다면 결과값 = 배열중 가장큰 값 +1 저장
            $result = max($a)+1;
        }
    }
}
echo $result;