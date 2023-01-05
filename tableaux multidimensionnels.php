<?php
    $teams = [
        [
            'name' => 'Golden Guardians', 
            'members' => [
                ['firstName' => 'Kevin', 'lastName' => 'Yarnell'],
                ['firstName' => 'Can', 'lastName' => 'Çelik'],
                ['firstName' => 'Greyson', 'lastName' => 'Gilmer'],
                ['firstName' => 'Victor', 'lastName' => 'Huang'],
                ['firstName' => 'Choi', 'lastName' => 'Jae-hyun'],  
                ['firstName' => 'Yuri', 'lastName' => 'Jew'], 
            ]
        ],
        [
            'name' => 'Immortals', 
            'members' => [
                ['firstName' => 'Paul', 'lastName' => 'Boyer'],
                ['firstName' => 'Jake', 'lastName' => 'Puchero'],
                ['firstName' => 'Jérémy', 'lastName' => 'Valdenaire'],
                ['firstName' => 'Johnny', 'lastName' => 'Ru'],
                ['firstName' => 'Nickolas', 'lastName' => 'Surgent'],  
            ]
        ],
    ];

    //Ajout d'un tableau associatif pour les donnees de coach pour chaque equipe:
$teams[0]['coach'] =  ['firstName' => 'Nick', 'lastName' => 'Smith'];
$teams[1]['coach'] =  ['firstName' => 'Thomas', 'lastName' => 'Si-Hassen'];

echo $teams[0]['coach']['lastName'];
echo '<br>';
echo $teams[1]['coach']['lastName'];