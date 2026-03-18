<?php
// tableau indexé contenant des tableaux associatifs qui contiennent d'autres tableaux associatifs
$stagiaires = [
   "web01" => [
        "Nom" => "Dakir",
        "Prenom" => "Badr",
        "Sites" => [
            "SitePerso" => "https://dakirbadr49-coder.github.io/TI-Prefo/",
            "github" => "https://github.com/dakirbadr49-coder",
        ],
    ],
    "web02" => [
        "Nom" => "Dmytruk",
        "Prenom" => "Yuliia",
        "Sites" => [
            "SitePerso" => "https://julia-dm.github.io/TP-Prefo/",
            "github" => "https://github.com/julia-dm",
        ],
    ],

];

// Accéder au github de Bader
echo $stagiaires["web01"]["Sites"]["github"];
// https://github.com/dakirbadr49-coder

var_dump($stagiaires);

$json = json_encode($stagiaires);

$array = json_decode($json,true);

var_dump($json,$array);