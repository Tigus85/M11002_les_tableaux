<?php

/**
 * @module Back-end
 * @exercise  M11002
 * @author  anthonymerlier
 **/

$gafamArray = [
    "GAFAM001" => [
        "lastname" => "Gates",
        "firstname" => "Bill",
        "company" => "Microsoft",
        "salary" => "1000000",
        "country" => "United States",
        "city" => "Redmond"
    ],
    "GAFAM002" => [
        "lastname" => "Bezos",
        "firstname" => "Jeff",
        "company" => "Amazon",
        "salary" => "2000000",
        "country" => "United States",
        "city" => "Bellevue"
    ],
    "GAFAM003" =>  [
        "lastname" => "Jobs",
        "firstname" => "Steve",
        "company" => "Apple",
        "salary" => "3000000",
        "country" => "United States",
        "city" => "Cupertino"
    ],
    "GAFAM004" => [
        "lastname" => "Zuckerberg",
        "firstname" => "Mark",
        "company" => "Facebook",
        "salary" => "4000000",
        "country" => "United States",
        "city" => "Menlo Park"
    ],
    "GAFAM005" => [
        "lastname" => "Pichai",
        "firstname" => "Sundar",
        "company" => "Google",
        "salary" => "5000000",
        "country" => "United States",
        "city" => "Mountain View"
    ]
];


//- Le salaire de Bill Gates
echo "Le salaire de Bill Gates est de ". $gafamArray["GAFAM001"]["salary"]. "$". "<br>";
//- La société de Jeff Bezos
echo "La société de Jeff Bezos est " . $gafamArray["GAFAM002"]["company"]. "<br>";
//- La ville du siège Social d'Apple
echo "La ville du siège Social d'Apple est a " . $gafamArray["GAFAM003"]["city"]. "<br>";
//- Le prénom du patron de Google
echo "Le prénom du patron de Google est " . $gafamArray["GAFAM005"]["firstname"]. "<br>";
//- Le nom du Patron de Facebook
echo "Le nom du Patron de Facebook est " . $gafamArray["GAFAM004"]["lastname"]. "<br>";


