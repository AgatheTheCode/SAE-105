<?php

include('include/twig.php');
$twig = init_twig();

include('include/datacat3.php');
include('include/dataindex.php');

echo $twig->render('cat3.twig',[

    'cat3' => $asso_en,
    'index' => $index,
    'nav' => $nav,
    
    
]);