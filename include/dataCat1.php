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



$lesbienne =[

    'title' => 'L',

    'imagesappho' => './images/sapphosmall.jpg',
    
    'flaglesbienne' => './images/Lflag.png',

    'corpslesbienne' => 'La première lettre de l\’anagramme LGBT / LGBTQIA décrit le lesbianisme ou l\’attirance sexuel ou
    romantique entre deux femmes cisgenre ou transgenre. Les termes saphique et lesbien
    viennent de la poétesse antique Sappho qui vivait entre le IIVème et IVème siècle av.J.C sur
    l\’île de Lesbos et à décrit son attirance pour les femmes.',

    'asidelesbienne' => 'Le L de lesbien est au début de l\'anagramme en hommage à la contribution des lesbiennes
    lors de l\'épidémie de SIDA',

    'titrelesbienne' => 'L comme Lesbiennes'
];