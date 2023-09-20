<?php
for($i=1; $i <= 50; $i++) {
    if ($i % 5 == 0){
        continue; //skip multiples of 5
    }
    echo $i . ",";
}