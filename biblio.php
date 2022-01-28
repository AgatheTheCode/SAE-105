<?php

include('include/twig.php');
$twig = init_twig();

include('include/datacatbiblio.php');
include('include/dataindex.php');

echo $twig->render('catbiblio.twig',[

    'tableau' =>$tableau,
    'index' => $index,
    'nav' => $nav
    
]);