<?php

include('include/twig.php');
$twig = init_twig();

include('include/datacat2.php');

echo $twig->render('cat2.twig',[

    'histoire' => $histoire
    
]);