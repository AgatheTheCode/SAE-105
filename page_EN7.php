<?php

include('include/twig.php');
$twig = init_twig();

include('include/datacat2.php');
include('include/dataindex.php');

echo $twig->render('cat2.twig',[

    'cat2' => $moyenage_en,
    'tableau' =>$tableaumoy_en,
    'index' => $index,
    'nav' => $nav
    
]);