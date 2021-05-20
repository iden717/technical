<?php 
$nilai = 0;
// $nilai_array = array(0, -1, 2, -3, 1);
$nilai_array = array(1, -2, 1, 0, 5);
// echo -1 + -1;
check($nilai, $nilai_array);
function check($nilai, $nilai_array){
        $data = [];
        for ($i=0; $i < count($nilai_array); $i++) {
            for ($a=count($nilai_array) - 1; $a >= 0; $a--) { 
                $test = $nilai_array[$i] + $nilai_array[$a];
                if ($test == $nilai && $nilai_array[$i] != $nilai_array[$a]) {
                    $data = array($nilai_array[$i],$nilai_array[$a]);
                }
            }
        }
        // print_r($data);
        if (!$data) {
            echo "tidak ada solusi";
        }
        foreach($data as $value){
           echo $value."\n";
        }

}
?>