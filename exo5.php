<?php
    $occitanie= array(
        "9"=>"Ariège" ,
        "11"=>"Aude",
        "12"=>"Aveyron",
        "30"=>"Gard",
        "31"=>"Haute-Garonne" ,
        "32"=>"Gers",
        "46"=>"Lot",
        "34"=>"Hérault",
        "48"=>"Lozère" ,
        "65"=>"Haute-Pyrénées" ,
        "66"=>"Pyrénées-orientales" ,
        "81"=>"Tarn",
        "82"=>"Tarn-et-garonne");
    echo $occitanie["30"]."<br>";
    foreach ($occitanie as $element){
        echo $element."<br>";
    }
    foreach ($occitanie as $cle=>$element2) {
        echo 'Le département '. $element2.'  à le numéro ['. $cle .']<br>';
    }
?>