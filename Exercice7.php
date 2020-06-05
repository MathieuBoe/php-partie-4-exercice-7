<?php
$age = 16;
$gender = 'Homme';
$title = 'Exercice7';

include 'header.php';
function compare($age, $gender){
    if ($age >=18 && $gender == 'Homme')
    {
        echo 'Vous etes un homme et vous etes majeur';
    }
    else if ($age >=18 && $gender == 'Femme')
    {
        echo 'Vous etes une femme et vous etes majeure';
    }
    else if ($age <=18 && $gender == 'Homme')
    {
        echo 'Vous etes un homme et vous etes mineur';
    }
    else 
    {
        echo 'Vous etes une femme et vous etes mineur';
    }
}
echo compare($age, $gender);
include 'footer.php';?>