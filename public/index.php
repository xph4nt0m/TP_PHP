<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Entity\Card;
use App\Entity\ListCards;

    $listCards = new ListCards();

    echo "Combien de cartes voulez-vous ajouter ? : ";

    $input = trim(fgets(STDIN));

    // Boucle qui vérifie que l'entrée utilisateur est un nombre entier

    while (!is_numeric($input) || $input <= 0) {
        echo "Veuillez entrer un nombre entier et positif : ";
        $input = trim(fgets(STDIN));
    }

    $nbCards = (int)$input;

    echo "Vous avez choisi d'ajouter $nbCards cartes.\n";

    // Boucle qui va générer un script à l'utilisateur pour chaque carte qu'il a décidé de créer en lui demandant
    // de répondre et faire de ces données une instance de la classe Card que l'on va ensuite ajouter au tableau
    // $listCards

    for ($i = 1; $i <= $nbCards; $i++) {
        echo "Entrez la question pour la carte $i : ";
        $question = trim(fgets(STDIN));

        echo "Entrez la réponse pour la carte $i : ";
        $answer = trim(fgets(STDIN));

        $card = new Card($question, $answer);
        $listCards->addCard($card);
    }

    // Affichage de la liste des cartes du tableau $listCards

$listCards->printCardsInfo();
