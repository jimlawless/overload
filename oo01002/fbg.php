<!DOCTYPE html>
<html><head><title>Jim's FizzBuzzGrid</title></head><body style="background-color: black; font-size: 48px; font-family: Courier New; ">
<?php
    $count=1;
    $shade=15;
    for($y=0;$y<13;$y++) {
        for($x=0;$x<13;$x++) {
            if(($count%15)==0) {
                $color="green";
            }
            elseif(($count%5)==0) {
                $color="yellow";
            }
            elseif(($count%3)==0) {
                $color="blue";
            }
            else {
                $color="rgb(" . $shade . "," . $shade . "," . $shade . ")";
                $shade+=1;
            }
            echo  "<div style=\"position: absolute; left: " . strval($x*75+10) . "px; top: " . strval($y*75+10) . "px; background-color: " . $color . "; color: " . $color . "; \">XX</div>\n";
            $count++;
        }
    }
?>
</body></html>