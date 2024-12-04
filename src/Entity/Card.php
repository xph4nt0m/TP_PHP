<?php

namespace App\Entity;

class Card {

    /**
     * @return mixed
     */
    public function getQuestion() :string
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion(string $question) :void
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getAnswer() :string
    {
        return $this->answer;
    }

    /**
     * @param mixed $answer
     */
    public function setAnswer(string $answer) :void
    {
        $this->answer = $answer;
    }
    public function __construct(private string $question, private string $answer) {
    }
}