<?php

    $landen = array("Japan"=>"tokyo", "mexico"=>"mexico city", "USA"=>"washington D.C.", "india"=>"new delhi", "zuid-korea"=>"seoul", "china"=>"peking", "nigeria"=>"abuja", "argentina"=>"buenos aires", "egypt"=>"cairo", "UK"=>"london");


    echo("hoeveel landen wilt u toevoegen");
    $hoeveel = readline();

    for( $i = 1; $i <= $hoeveel; $i++){

        echo("welk land wilt u toevoegen");
        $toeland = readline();
    
        echo("wat is de hoofdstad van $toeland");
        $nieuwstad = readline();
    
        $totaal[$toeland]=$nieuwstad;
        array_push($landen, $totaal);
    }





    foreach($landen as $land => $val){
        echo("Wat is de hoofdstad van ".$land.PHP_EOL);
        $hoofdstad = readline();

        if ($hoofdstad == $val){
            echo("dat klopt".PHP_EOL);
        } else {
            echo("helaas $hoofdstad is niet de hoofdstad van $land");
            exit;
        }
    }
?>