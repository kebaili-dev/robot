<?php

    
    
    // Pour faire en sorte de respecter strictement les types indiqués
    // Par exemple
    declare(strict_types=1);
    
    //============================Separation de nos page avec le REQUIRE =============================================
    // Inclure le fichier contenant l'affichage (html + un peu de php)
    require 'fonctions.php';


//==============   Affichage Nom du Robot (2lettre aléatoire + 4 chiffre aléatoire) =========================


    // Votre traitement (logique) php (les différents calculs)
    
    /* Etape 1 : Générer le nom du robot
     * Le nom doit respecter le format suivant : XX-1234
     * Il faudra utiliser les différents outils vus en php
     * mt_rand(min, max) génère un nombre aléatoire compris entre min et max
     */
     
     // ================ MA Solution trouver avec array_rand 
    $robotName = makeRobotName(3,4, '-'); // makeRobotName est la fonction le parametrages sont different sur php 
    
    //nombre aléatoire
    // $random = str_pad(mt_rand(0, 9999), 4, 0); // 
    // str_pad permet de prendre en compte les zéro, 
    //le 4 dire qu'on veut afficher 4 chiffre 
    //et le 0 dire que si il y a pas 4 ombre bah d'afficher un Zéro à la place
    
    // var_dump($random);
    
    //lettre Aléatoire
    // $lettre = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    // $lettre = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // Transformer la chaîne de caractères en tableau
   // $charsArray = str_split($chars);
    // $rand_keys = array_rand($lettre, 2);
    
    
    // echo $lettre[$rand_keys[0]];
    // echo $lettre[$rand_keys[1]];
    // Génération des lettres aléatoires
    //    for ($l = 1; $l <= 2; $l++) {
    //        $robotName .= $lettre[mt_rand(0, 25)];
    //    }
    
    // echo "$random";
    
    // $robotName = $lettre[$rand_keys[0]] . $lettre[$rand_keys[1]] . " - " . $random;
    // echo $robotName;
    
    /*
    ================= CORRECTION : 2ème solution avec mt_rand "MEILLEUR SOLUTION !!!!"
    <?php      
        $robotName = '';
    
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        // Génération des lettres aléatoires
        for ($l = 1; $l <= 2; $l++) {
            $robotName .= $chars[mt_rand(0, 25)];
        }
        
        // - entre les lettres et les nombres
        $robotName .= '-';
        
        // Génération des nombres aléatoires
        for ($n = 1; $n <= 4; $n++) {
            $robotName .= mt_rand(0, 9);
        }
        
        var_dump($robotName);
    ?>
    */
    
    /* 2ème solution avec array_rand  (que j'ai fait mais en Cédric)*/
    /*
    var_dump($chars);
    
    // Transformer la chaîne de caractères en tableau
    $charsArray = str_split($chars);
    
    // Tableau avec les index des lettres aléatoires
    $randomChars = array_rand($charsArray, 2);
    
    for ($i = 0; $i <= 1; $i++) {
        $robotName .= $charsArray[$randomChars[$i]];
    }
    
    $robotName .= '-';
    
    // Nombre aléatoire entre 0 et 9999
    $random = mt_rand(0, 9999);
    
    // Nombre complété jusqu'à 4 chiffres par des 0 si moins de 4 chiffres
    $robotName .= str_pad($random, 4, 0, STR_PAD_LEFT);
    
    var_dump($robotName);

    */
    

                //====================   Affichage de l'heure et la date =========================
                
// Définit le fuseau horaire par défaut à utiliser
date_default_timezone_set('Europe/Paris');


 

$date = date("d-m-Y");  // Majuscules pour date et heures en francais 
$heure = date("H:i:s");


            //====================   Affichage nombre aléatoire compris entre 1 et 10, et dire si c'est un nombre pair ou impair. =========================
            
// Nombre aléatoire compris entre 1 et 10
    $randomNumber = mt_rand(1, 10);

            
            




            //====================   Affichage de son nom à l'envers, le nom à l'envers s'écrit 5432-XV. =========================
            
// Nom à l'envers
    $reverseRobotName = strrev($robotName);
    

            //====================   Affichage Deux fois sur trois, le robot dira « Vous voulez un café ? 

              //                     Une fois sur trois, le robot dira « Extermination ! Extermination ! 
            
// 1 chance sur 3 de devenir diabolique
    $random = mt_rand(1, 3);
    


// Inclure le fichier contenant l'affichage (html + un peu de php)
    require 'robot.phtml';