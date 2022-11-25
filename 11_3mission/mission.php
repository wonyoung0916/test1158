<?php
$n = !empty($_GET['nValue']) ? $_GET['nValue'] : 0;

function mission($n){
    $array = array();

    for ($i = 1; $i <= $n; $i++){
        array_push($array,$i);
    }
    $cnt = count($array);

    while ($cnt > 2) {
        $cnt = count($array);
        array_splice($array,0,1);
        $value = $array[0];
        array_splice($array,0,1);
        array_push($array, $value);
    }
    return $array;
}
$result = mission($n);
echo "<pre>";
var_dump($result);
echo "<pre>";
?>
<form method="get" action="mission.php">
    n값을 입력하세요<input type="text" name="nValue"><br>
    <button type="submit">전송</button>
</form>