<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


include('include/datacat1.php');
include('include/dataindex.php');

echo $twig->render('cat1.twig',[

    'cat1' => $qia_en,
    'index' => $index_en,
    'nav' => $nav_en
    
]);