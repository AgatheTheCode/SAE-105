<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/dataindex.php');


echo $twig->render('index.twig',[

    'index' => $index_en,
    'carrousel' => $carrousel_en,
    'nav' => $nav_en,
    
]);