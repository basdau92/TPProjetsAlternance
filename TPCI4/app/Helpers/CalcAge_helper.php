<?php
//Création de la fonction CalculAge
    function CalculAge($date){
        //Déclaration date à comparer
        $birthdate = new DateTime($date);
        $currentdate = new DateTime();
    
        //Calcul de la différence
        $calcdiff = $birthdate->diff($currentdate);
    
        //Retourner le résultat en années
        return $calcdiff->format('%Y');
    }