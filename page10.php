<?php

include('include/twig.php');
$twig = init_twig();

include('include/datacat2.php');
include('include/dataindex.php');

echo $twig->render('cat2.twig',[

    'cat2' => $contemporain,
    'tableau' =>$tableaucmtp,
    'index' => $index,
    'nav' => $nav
    
]);