<?php


/*connection à la bdd pour rechercher les infos 
$mysqli = new mysqli("localhost","root","admin","site_lgbt");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
$sql = "SELECT codepage, titre_page, aside_page FROM contenu_cat1";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["codepage"]. " " . $row["lastname"]. "<br>";
    }
  } else {
    echo "0 results";
  }*/



$lesbienne=[

    'altflag' => 'Lesbian pride flag',
    'title' => 'L',

    'imagepers' => './images/sapphospe.jpg',
    
    'flag' => './images/Lflag.png',

    'corps' => 'La première lettre de l\'anagramme LGBT / LGBTQIA décrit le lesbianisme ou l\'attirance sexuel ou
            romantique entre deux femmes cisgenre ou transgenre. Les termes "saphique" et "lesbien"
            viennent de la poétesse antique Sappho qui vivait entre le IIVème et IVème siècle av.J.C sur
            l\'île de Lesbos et à décrit son attirance pour les femmes.',

    'aside' => 'Le L de lesbien est au début de l\'anagramme en hommage à la contribution des lesbiennes
             lors de l\'épidémie de SIDA',

    'titre' => 'L comme Lesbiennes',

    'figure' =>'',
     
    'capt' => '',

  ];

$gay =[


  'altflag' => 'Gay Pride Flag',

  'title' => 'G',

  'imagepers' => './images/atsmall.jpg',
  
  'flag' => 'images/Gflag.png',

  'corps' => 'L\'hommosexualité masculine n\'est plus considéré comme une maladie mentale depuis le 17 mai 1990!',

  'aside' => ' 90% des jeunes LGBT pensent que l\environement est plus accueillant pour eux de nos jours',

  'titre' => 'G comme Gay',
  
  'figure' =>'',
     
  'capt' => '',
];

$bi =[


  'altflag' => 'Bisexual pride flag',
  'title' => 'B',

  'imagepers' => './images/FMsmall.jpg',
  
  'flag' => './images/Bflag.png',

  'corps' => 'Bi lingual??',

  'aside' => 'D\'aprés certaine étude 80% de la population serait à tendance bisecuelle',

  'titre' => 'B comme Bi',

  
  'figure' =>'',
     
  'capt' => '',
];

$trans =[


  'altflag' => 'Transgender pride flag',
  'title' => 'T',

  'imagepers' => './images/MPJ.jpeg',
  
  'flag' => './images/Tflag.png',

  'corps' => 'La première lettre de l\’anagramme LGBT / LGBTQIA décrit le lesbianisme ou l\’attirance sexuel ou
  romantique entre deux femmes cisgenre ou transgenre. Les termes saphique et lesbien
  viennent de la poétesse antique Sappho qui vivait entre le IIVème et IVème siècle av.J.C sur
  l\’île de Lesbos et à décrit son attirance pour les femmes.',

  'aside' => 'Les émeutes de Stonewall qui ont donné naissance à la pride ont été déclanché par une femme transgenre de couleur',

  'titre' => 'T comme Transgenre',

  
  'figure' =>'',
     
  'capt' => '',
];

$qia = [

  'altflag' => 'Orginam pride flag',
  'title' => 'QIA+',

  'imagepers' => './images/sapphosmall.jpg',
  
  'flag' => './images/OGPflag.png',

  'corps' => 'La première lettre de l\’anagramme LGBT / LGBTQIA décrit le lesbianisme ou l\’attirance sexuel ou
  romantique entre deux femmes cisgenre ou transgenre. Les termes saphique et lesbien
  viennent de la poétesse antique Sappho qui vivait entre le IIVème et IVème siècle av.J.C sur
  l\’île de Lesbos et à décrit son attirance pour les femmes.',

  'aside' => 'Le L de lesbien est au début de l\'anagramme en hommage à la contribution des lesbiennes
  lors de l\'épidémie de SIDA',

  'titre' => 'QIA comme?',

  
  'figure' =>'',
     
  'capt' => '',

];
?>