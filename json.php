<?php
    $file = './data/pok.json';
    $data = file_get_contents($file);
    $obj = json_decode($data);
    echo $obj[0]->name;
    echo $obj[0]->type1;
    ?>