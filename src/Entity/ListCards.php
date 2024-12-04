<?php

namespace App\Entity;

class ListCards {

    public function __construct(private array $listCards = [])
    {}

    /**
     * @return mixed
     */
    public function getListCards():array
    {
        return $this->listCards;
    }

    /**
     * @param mixed $listCards
     */
    public function setListCards(array $listCards) :void
    {
        $this->listCards = $listCards;
    }

    // Fonction addCard qui ajoute une instance de la classe Card dans un tableau $listCards
    public function addCard(Card $card) :void {
        $this->listCards[] = $card;
    }

    // Fonction printCardsInfo qui pour chaque instance de la classe Card qui se trouve dans le tableau $listCards,
    // affiche un script de présentation qui représente une carte avec sa question et sa réponse
    public function printCardsInfo() :void {

        echo "\nListing des cartes contenues dans la liste : \n\n";

        foreach ($this->listCards as $index => $card) {
            echo "Infos sur la carte #". ($index + 1). " :\n\n";
            echo "--------------------\n";
            echo "Question : " . $card->getQuestion() . "\n";
            echo "Réponse : " . $card->getAnswer() . "\n";
            echo "--------------------\n";
        }
    }
}