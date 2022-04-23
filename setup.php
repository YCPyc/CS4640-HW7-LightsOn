<?php
error_reporting(E_ALL);

        if(isset($_GET['width']) && isset($_GET['length'])){
            $width = $_GET['width'];
            $length = $_GET['length'];
            $prod = $width * $length;
            $ans = [];
            $ans['on'] = array();
            if($width * $length <= 5){
                for($x = 0; $x< $width; $x++){
                    for($y = 0; $y< $length; $y++){
                        array_push($ans['on'],[$x,$y]);
                    }
                }
            }
            else{
                while(count($ans['on']) < 5){
                    $item = [rand(0,$width-1),rand(0,$length-1)];
                    if(!in_array($item, $ans['on'])){
                        array_push($ans['on'],$item);
                    }
                }
            }

            $jsonAns = json_encode($ans);
            echo $jsonAns;
        }
        

?>


