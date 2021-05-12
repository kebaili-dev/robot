<?php
                      //====================   Amelioration de l'affichage du nom de robot

     /**
     * Génère le nom du robot aléatoirement
     * 
     * @param string $letters Le nombre de lettres dans le nom du robot
     * @param int $numbers Le nombre de nombres aléatoires dans le nom du robot
     * @param string $separator Le séparateur entre les lettres et les nombres
     * @return string Le nom du robot généré
     */   
            
function makeRobotName(int $letters, int $numbers, string $separator): string // : string precise ce qu'il ya en sorti !
                        // (int $letters = 2, int $numbers = 4, string $separator = '-'): string
    {
        $robotName = '';
    
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        
        /* 1ère solution avec mt_rand */
        
        // Génération des lettres aléatoires
        
        for ($l = 1; $l <= $letters; $l++) {
            $robotName .= $chars[mt_rand(0, 25)];
        }
        
        // - entre les lettres et les nombres
        $robotName .= $separator;
        
        // Génération des nombres aléatoires
        for ($n = 1; $n <= $numbers; $n++) {
            $robotName .= mt_rand(0, 9);
        }
        
        return $robotName;
    }
            