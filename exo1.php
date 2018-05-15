<?php
    $month= array('Janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre',
        'novembre','décembre');
    echo $month[2]."<br>";
    echo $month[5]. "<br>";
    $nombre=count($month);
    $i=0;
    do{
        echo $month[$i]."<br>";
        $i++;
    }
    while ($i<$nombre);
?>