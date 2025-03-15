<?php

$crime_genre = new Genre('Crime', 'A genre of fiction that deals with crimes, their detection, criminals, and their motives.');

$movies = [
    new Movie('The Godfather', '9.2', '1972', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', $crime_genre),
    new Movie('The Shawshank Redemption', '9.3', '1994', 'Two lorem ipsum dolor sit amet, consectetur adipiscing elit.', $crime_genre),
    new Movie('The Dark Knight', '9.0', '2008', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.', $crime_genre),
];

$movies[0]->description = 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.';
$movies[1]->description = 'lorem ipsum dolor sit amet, consectetur adipiscing elit.';
$movies[2]->description = 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.';      


?>