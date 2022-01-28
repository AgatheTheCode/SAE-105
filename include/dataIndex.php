<?php
//la base et l'index repose sur la même database pour simplifier le code des pages suivante qui ne call pas tout l'index
$index =[
    'titre' => 'Présentation : ',
    
    'apropos' => 'A propos',

    'titre2' => 'Dans ce site vous découvrirez l\'histiore du mouvement de LGBT ainsi que
    leurs luttes',

    'presentation' => 'Ce site à pour objectifs : de présenter l\'anagramme "LGBT / LGBTQIA", l\'état des droits et des
    luttes LGBT+ dans le monde et leur présence historique.',
    
    'href' =>'index.php', 
    
    'nom' => 'Menu',

    'footer' => 'footertwigger'
];

$nav =[
     //Href2 et nom2 correspondent à des pages intermédiaire qui ne sont pas utilisé ici mais devraient l'être si j'avais eu plus de temps
    ['href2' => 'index.php', 'nom2' => 'LGBTQIA+', 'sous_menu' => [
        ['hrefsm' => 'page1.php', 'nomsm' => 'L'],
        ['hrefsm' => 'page2.php', 'nomsm' => 'G'],
        ['hrefsm' => 'page3.php', 'nomsm' => 'B'],
        ['hrefsm' => 'page4.php', 'nomsm' => 'T'],
        ['hrefsm' => 'page5.php', 'nomsm' => 'QIA+'],
    ] ],
    ['href2' => 'index.php', 'nom2' => 'Histoire','sous_menu' =>[
    
        ['hrefsm' => 'page6.php', 'nomsm' => 'Antiquité'],
        ['hrefsm' => 'page7.php', 'nomsm' => 'Moyen Age+'],
        ['hrefsm' => 'page8.php', 'nomsm' => 'Renaissance'],
        ['hrefsm' => 'page9.php', 'nomsm' => 'Guerres Mondiales'],
        ['hrefsm' => 'page10.php', 'nomsm' => 'Contemporain'],
    ] ],
    ['href2' => 'index.php', 'nom2' => 'Luttes','sous_menu' =>[

        ['hrefsm' => 'page11.php', 'nomsm' => 'Luttes'],
        ['hrefsm' => 'page12.php', 'nomsm' => 'Droits en Europe'],
        ['hrefsm' => 'page13.php', 'nomsm' => 'Droits dans le monde'],
        ['hrefsm' => 'page14.php', 'nomsm' => 'Associations'],

    ]],
    ['href2' => 'biblio.php', 'nom2' => 'Bibliographie'],
    ['href2' => 'contact.php', 'nom2' => 'Contactez-nous']
];


$carrousel =[
    ['flag' => './images/Lflag.png','alt'=> 'Drapeau des lesbiennes', 'infol' => 'Le drapeau des lesbiennes'],
    ['flag' => './images/Gflag.png','alt'=> 'Drapeau des gays', 'infol' => 'Drapeau des gays'],
    ['flag' => './images/Bflag.png','alt'=> 'Drapeau des bi', 'infol' => 'Drapeau des bi'],
    ['flag' => './images/Tflag.png','alt'=> 'Drapeau des transgenres', 'infol' => 'Drapeau des transgenres'],
    ['flag' => './images/Iflag.png','alt'=> 'Drapeau des personnes intersexe', 'infol' => 'Drapeau des personnes intersexe'],
    ['flag' => './images/OGPflag.png','alt'=> 'Drapeau de la pride original', 'infol' => 'Drapeau de la pride original'],
    ['flag' => './images/Pflag.png','alt'=> 'Drapeau de la pride actuel', 'infol' => 'Drapeau de la pride actuel'],
    ['flag' => './images/NPflag.png','alt'=> 'Le drapeau de la pride revisité avec Black Lives Matters & les couleurs Transgenre', 'infol' => 'Le drapeau de la pride revisité avec Black Lives Matters & les couleurs Transgenre']

];


$index_en =[
    'titre' => 'Présentation : ',
    
    'apropos' => 'A propos',

    'titre2' => 'Dans ce site vous découvrirez l\'histiore du mouvement de LGBT ainsi que
    leurs luttes',

    'presentation' => 'Ce site à pour objectifs : de présenter l\'anagramme "LGBT / LGBTQIA", l\'état des droits et des
    luttes LGBT+ dans le monde et leur présence historique.',
    
    'href' =>'index.php', 
    
    'nom' => 'Menu',
];

$nav_en =[
     //Href2 et nom2 correspondent à des pages intermédiaire qui ne sont pas utilisé ici mais devraient l'être si j'avais eu plus de temps
    ['href2' => 'index.php', 'nom2' => 'LGBTQIA+', 'sous_menu' => [
        ['hrefsm' => 'page1.php', 'nomsm' => 'L'],
        ['hrefsm' => 'page2.php', 'nomsm' => 'G'],
        ['hrefsm' => 'page3.php', 'nomsm' => 'B'],
        ['hrefsm' => 'page4.php', 'nomsm' => 'T'],
        ['hrefsm' => 'page5.php', 'nomsm' => 'QIA+'],
    ] ],
    ['href2' => 'index.php', 'nom2' => 'Histoire','sous_menu' =>[
    
        ['hrefsm' => 'page6.php', 'nomsm' => 'Antiquité'],
        ['hrefsm' => 'page7.php', 'nomsm' => 'Moyen Age+'],
        ['hrefsm' => 'page8.php', 'nomsm' => 'Renaissance'],
        ['hrefsm' => 'page9.php', 'nomsm' => 'Guerres Mondiales'],
        ['hrefsm' => 'page10.php', 'nomsm' => 'Contemporain'],
    ] ],
    ['href2' => 'index.php', 'nom2' => 'Luttes','sous_menu' =>[

        ['hrefsm' => 'page11.php', 'nomsm' => 'Luttes'],
        ['hrefsm' => 'page12.php', 'nomsm' => 'Droits en Europe'],
        ['hrefsm' => 'page13.php', 'nomsm' => 'Droits dans le monde'],
        ['hrefsm' => 'page14.php', 'nomsm' => 'Associations'],

    ]],
    ['href2' => 'biblio.php', 'nom2' => 'Bibliographie'],
    ['href2' => 'contact.php', 'nom2' => 'Contactez-nous']
];


$carrousel_en =[
    ['flag' => './images/Lflag.png','alt'=> 'Drapeau des lesbiennes', 'infol' => 'Le drapeau des lesbiennes'],
    ['flag' => './images/Gflag.png','alt'=> 'Drapeau des gays', 'infol' => 'Drapeau des gays'],
    ['flag' => './images/Bflag.png','alt'=> 'Drapeau des bi', 'infol' => 'Drapeau des bi'],
    ['flag' => './images/Tflag.png','alt'=> 'Drapeau des transgenres', 'infol' => 'Drapeau des transgenres'],
    ['flag' => './images/Iflag.png','alt'=> 'Drapeau des personnes intersexe', 'infol' => 'Drapeau des personnes intersexe'],
    ['flag' => './images/OGPflag.png','alt'=> 'Drapeau de la pride original', 'infol' => 'Drapeau de la pride original'],
    ['flag' => './images/Pflag.png','alt'=> 'Drapeau de la pride actuel', 'infol' => 'Drapeau de la pride actuel'],
    ['flag' => './images/NPflag.png','alt'=> 'Le drapeau de la pride revisité avec Black Lives Matters & les couleurs Transgenre', 'infol' => 'Le drapeau de la pride revisité avec Black Lives Matters & les couleurs Transgenre']

];
