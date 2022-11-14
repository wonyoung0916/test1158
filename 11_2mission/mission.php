<?php
$n = !empty($_GET['nValue']) ? $_GET['nValue'] : 0;
$k = !empty($_GET['kValue']) ? $_GET['kValue'] : 0;
function mission($n, $k){
    $array = array();
    $result = array();
    for ($i = 1; $i <= $n; $i++){
        array_push($array,$i);
    }
    $cnt = count($array);
    while ($cnt > 1) {
        $cnt = count($array);
        for ($i = 1; $i < $k + 1; $i++) {
            $delete = $array[0];
            array_splice($array,0,1);
            if ($i != $k) {
                array_push($array, $delete);
            }else{
                array_push($result,$delete);
            }
        }
    }
    return $result;
}
$result = mission($n, $k);
echo "<pre>";
var_dump($result);
echo "<pre>";
?>
<form method="get" action="mission.php">
    n값을 입력하세요<input type="text" name="nValue"><br>
    k값을 입력하세요<input type="text" name="kValue">    
    <button type="submit">전송</button>
</form>
예상 기대값
3,6,2,7,5,1,4