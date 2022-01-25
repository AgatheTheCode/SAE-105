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
     
    'capt' => 'Portrait de Sappho',

  ];

$gay =[


  'altflag' => 'Gay Pride Flag',

  'title' => 'G',

  'imagepers' => './images/atsmall.jpg',
  
  'flag' => 'images/Gflag.png',

  'corps' => 'L\'hommosexualité masculine n\'est plus considéré comme une maladie mentale depuis le 17 mai 1990!
  ',

  'aside' => ' 90% des jeunes LGBT pensent que l\environement est plus accueillant pour eux de nos jours',

  'titre' => 'G comme Gay',
  
  'figure' =>'',
     
  'capt' => 'Photo d\'Alan Turing, mathématicien gay.',
];

$bi =[


  'altflag' => 'Bisexual pride flag',
  'title' => 'B',

  'imagepers' => './images/FMsmall.jpg',
  
  'flag' => './images/Bflag.png',

  'corps' => 'La bisexualité est une attraction romantique, une attraction sexuelle ou un comportement sexuel envers les hommes et les femmes. Le terme est principalement utilisé dans le contexte de l\'attraction humaine pour désigner des sentiments romantiques ou sexuels envers les hommes et les femmes. ',

  'aside' => 'D\'aprés certaine étude 80% de la population serait à tendance bisecuelle',

  'titre' => 'B comme Bi',

  
  'figure' =>'',
     
  'capt' => 'Photo de Freddi Mercury',
];

$trans =[


  'altflag' => 'Transgender pride flag',
  'title' => 'T',

  'imagepers' => './images/MPJ.jpeg',
  
  'flag' => './images/Tflag.png',

  'corps' => 'Dans certaine culture des notions proche de la transidéntité exitaient. Ces personnes étaient considérer comme un lien précieux entre la divinité et l\'humainité (au lieu de faire vos commande Starbucks...)',

  'aside' => 'Les émeutes de Stonewall qui ont donné naissance à la pride ont été déclanché par une femme transgenre de couleur',

  'titre' => 'T comme Transgenre',

  
  'figure' =>'',
     
  'capt' => 'Photo de Marsha P.Johnson, femme transgenre',
];

$qia = [

  'altflag' => 'Orginam pride flag',
  'title' => 'QIA+',

  'imagepers' => './images/I.jpg',
  
  'flag' => './images/OGPflag.png',

  'corps' => 'Le "Q", "I" et "A" ont pour signification Queer, Intersexe et Asexuel.
  Queer mot signifiant "étrange dérangeant" dans la langue de Shakespear à été utilisé comme insulte envers les LGBT qui se sont réaproprié l\'insulte.
  Intersexe définie une personne dont le genre ne peux pas étre déterminé par son phénotype, voir par son génotype.
  Asexuel définie une catégorie de personne qui ne ressent pas d\'exisation sexuel envers les autres.',

  'aside' => 'La France est condamné tout les ans à payer des amendes pour avoir pratiquer des opération de chirurgie sur des nouevaux nés intersexe.
  Ces opérations consistent en la création d\'un appareil génital fonctionnel.',

  'titre' => 'QIA comme?',

  
  'figure' =>'',
     
  'capt' => 'Photo de Hanne Gaby Odiele est un mannequin belge intersexe.',

];
?>