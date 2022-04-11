<?php

// Vous ne devez pas toucher à ce tableau mais composez les lignes nécessaires avec la ou les méthodes de votre choix
$arrayEleves = [];

// Ici vos scripts PHP

$arrayEleves["Angela"] =[
  "Histoire" => 12,
  "Français" => 11,
  "Maths" => 13,
  "Anglais" => 6
];


$arrayEleves["Patrice"]=[
  "Histoire" => 16,
  "Français" => 9,
  "Maths" => 18,
  "Anglais" => 8
];

$arrayEleves["Adel"]=[
  "Histoire" => 18,
  "Français" => 16,
  "Maths" => 19,
  "Anglais" => 19
];

$arrayEleves["Cédric"]=[
  "Histoire" => 7,
  "Français" => 19,
  "Maths" => 13,
  "Anglais" => 13
];

$arrayEleves["Mathew"]=[
  "Histoire" => 9,
  "Français" => 12,
  "Maths" => 11,
  "Anglais" => 12
];

$arrayEleves["Issa"]=[
  "Histoire" => 12,
  "Français" => 11,
  "Maths" => 15,
  "Anglais" => 13
];

$arrayEleves["Zora"]=[
  "Histoire" => 17,
  "Français" => 15,
  "Maths" => 13,
  "Anglais" => 8
]
;
var_dump($arrayEleves);



// L'exercice 3 est sensiblement identique au précédent mais à la différent que la variable $arrayEleves n'est pas éditable à la ligne 4, ni même supprimable.

// |              | Angela | Patrice | Adel | Cédric | Mathew | Issa | Zora |
// | :----------: | :----: | :-----: | :--: | :----: | :----: | :--: | :--: |
// | **Histoire** |   12   |   16    |  18  |   7    |   9    |  12  |  17  |
// | **Français** |   11   |    9    |  16  |   19   |   12   |  11  |  15  |
// |  **Maths**   |   13   |   18    |  19  |   13   |   11   |  15  |  13  |
// | **Anglais**  |   6    |    8    |  19  |   13   |   12   |  13  |  8   |

