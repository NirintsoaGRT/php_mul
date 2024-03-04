<?php
require 'fonction.php'; // appelle de la fonction a partire de sont en tete 
$dim=3;
$matrice=[
    [3,8,12],
    [2,8,13],
    [1,9,29]
];



//affichage($matrice,$dim);
$tabs=transfo($matrice,$dim);
affichage($tabs,$dim);
?>