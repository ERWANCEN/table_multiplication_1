<?php

echo '<h1>Boucle while</h1>';

// attribution de la valeur 1 à la variable i
$i = 1;

// création de la boucle while
while ($i <= 10) { // condition : tant que $i inférieur ou égal à 10, la boucle se répète
    echo "<p>Table de multiplication de $i</p>"; // à chaque début de table de multiplication, la boucle affiche le nom de la table
    $j = 1; // attribution de la valeur 1 à la variable j pour que la boucle while ($j <= 10) puisse recommencer à chaque fois

    while ($j <= 10) { // boucle contenu des tables
        echo "<p>$i x $j = " . $i * $j . "</p>"; // afficher le chiffre de la table présentée, multiplié d'abord par le chiffre 1, puis 2, ... le tout égal au produit de la multiplication donc $i * $j calculé par php
        $j++; // incrémentation de 1 de la variable j à chaque itération pour atteindre les 10 multiplications
    }

    echo '<hr>'; // création de trait qui sépare chaque table
    $i++; // incrémentation de 1 de la variable i à chaque itération pour atteindre les 10 tables
};

echo '<h1>Boucle for</h1>';

for ($a = 1; $a <= 10; $a++) { // pour la variable a = 1; répéter jusqu'à ce que la variable a soit égale à 10; ajouter 1 à chaque recommencement
    echo "<p>Table de multiplication de $a</p>"; // afficher la table traitée

    for ($b = 1; $b <= 10; $b++) { // pour la variable b = 1; répéter jusqu'à ce que la variable b soit égale à 10; ajouter 1 à chaque recommencement
        echo "<p>$a x $b = " . $a * $b . "</p>";// afficher le chiffre de la table présentée, multiplié d'abord par le chiffre 1, puis 2, ... le tout égal au produit de la multiplication donc $a * $b calculé par php
    }

    echo '<hr>'; // création de trait qui sépare chaque table
}