<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


include('include/dataIndex.php');
include('include/datacontact.php');

echo $twig->render('contact.twig',[

    'index' => $index,
    'nav' => $nav,
    'comment' => $comment,
    'commentloop' => $commentloop
    
    
]);