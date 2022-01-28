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

    'footer' => '', //debug

    'aside' => 'Speaking english? Click me!',

    'href_lang' => 'index_en.php',

    'titreflag' => 'La collection de drapeaux'


];

$index_en =[
    'titre' => 'Presentation: ',
    
    'apropos' => 'Abstract',

    'titre2' => 'This website is meant to help users understand LGBT people ',

    'presentation' => 'This website is meant to help users understand the history of LGBT people and their fights for equal rights',
    
    'href' =>'index_en.php', 
    
    'nom' => 'Menu',

    'footer' => '',//debug

    'aside' => 'Vous parlez Français? Cliquez ici!',

    'href_lang' => 'index.php',

    'titreflag' => 'Flag collection'

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
        ['hrefsm' => 'page15.php', 'nomsm' => 'Discriminations'],
        ['hrefsm' => 'page12.php', 'nomsm' => 'Droits en Europe'],
        ['hrefsm' => 'page13.php', 'nomsm' => 'Droits dans le monde'],
        ['hrefsm' => 'page14.php', 'nomsm' => 'Associations'],


    ]],
    ['href2' => 'biblio.php', 'nom2' => 'Bibliographie'],
    ['href2' => 'contact.php', 'nom2' => 'Contactez-nous'],
    ['href2' => 'index_en.php', 'nom2' => 'English!']
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


$nav_en =[
     //Href2 et nom2 correspondent à des pages intermédiaire qui ne sont pas utilisé ici mais devraient l'être si j'avais eu plus de temps
    ['href2' => 'index.php', 'nom2' => 'LGBTQIA+', 'sous_menu' => [
        ['hrefsm' => 'page_EN1.php', 'nomsm' => 'L'],
        ['hrefsm' => 'page_EN2.php', 'nomsm' => 'G'],
        ['hrefsm' => 'page_EN3.php', 'nomsm' => 'B'],
        ['hrefsm' => 'page_EN4.php', 'nomsm' => 'T'],
        ['hrefsm' => 'page_EN5.php', 'nomsm' => 'QIA+'],
    ] ],
    ['href2' => 'index_en.php', 'nom2' => 'History','sous_menu' =>[
    
        ['hrefsm' => 'page_EN6.php', 'nomsm' => 'Antiquity'],
        ['hrefsm' => 'page_EN7.php', 'nomsm' => 'Middle Ages'],
        ['hrefsm' => 'page_EN8.php', 'nomsm' => 'Renaissance'],
        ['hrefsm' => 'page_EN9.php', 'nomsm' => 'World War I & II'],
        ['hrefsm' => 'page_EN10.php', 'nomsm' => 'Present day'],
    ] ],
    ['href2' => 'index_en.php', 'nom2' => 'Luttes','sous_menu' =>[

        ['hrefsm' => 'page_EN11.php', 'nomsm' => 'Fights'],
        ['hrefsm' => 'page_EN12.php', 'nomsm' => 'Rights in Europe'],
        ['hrefsm' => 'page_EN13.php', 'nomsm' => 'Rights in the world'],
        ['hrefsm' => 'page_EN14.php', 'nomsm' => 'Associations'],

    ]],
    ['href2' => 'biblio_en.php', 'nom2' => 'Sources'],
    ['href2' => 'contact_en.php', 'nom2' => 'Contact us'],
    ['href2' => 'index.php', 'nom2' => 'Français!']

];


$carrousel_en =[
    ['flag' => './images/Lflag.png','alt'=> 'Lesbian flag', 'infol' => 'Lesbian flag'],
    ['flag' => './images/Gflag.png','alt'=> 'Gay flag', 'infol' => 'Gay flag'],
    ['flag' => './images/Bflag.png','alt'=> 'bi flag', 'infol' => 'bi flag'],
    ['flag' => './images/Tflag.png','alt'=> 'Transgender flag', 'infol' => 'Transgender flag'],
    ['flag' => './images/Iflag.png','alt'=> 'Intersex flag', 'infol' => 'Intersex flag'],
    ['flag' => './images/OGPflag.png','alt'=> 'Original pride flag', 'infol' => 'Original pride flag'],
    ['flag' => './images/Pflag.png','alt'=> 'Actual pride flag', 'infol' => 'Actual pride flag'],
    ['flag' => './images/NPflag.png','alt'=> 'BLM & Trans pride flag', 'infol' => 'BLM & Trans pride flag']

];
