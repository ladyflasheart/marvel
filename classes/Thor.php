<?php

/**
 * Hero Thor class
 */
class Classes_Thor implements Interfaces_MarvelSuperhero
{
    private $phrases = ['I am the god of thunder and lightning' , 'Villain, yield, I will not order you again',
                        'Avengers assemble!'];

    private $clothing = ['breastplate', 'cape', 'horned helmet'];

    private $powers = ['mighty strength', 'mystical hammer Mjolnir', 'ability to control the weather'];


    public function talk()
    {
        if ($this->phrases) {
            $phrase = '<p>' . htmlspecialchars($this->chooseRandom($this->phrases)) . '</p>';
            echo $phrase;
        }
    }

    public function useSpecialSkill()
    {
        if ($this->powers) {
            $action = '<p>I am using my ' . htmlspecialchars($this->chooseRandom($this->powers)) . '</p>';
            echo $action;
        }
    }

    public function getKitOn()
    {
        $dressingCommentary = '<p>I am putting on my ';

        $dressingCommentary .= htmlspecialchars(implode(' and my ', $this->clothing));

        $dressingCommentary .= '. I\'m ready to go save the world!</p>';

        echo $dressingCommentary;
    }

    private function chooseRandom(array $array)
    {
        $index = array_rand($array);
        return $array[$index];
    }
}
