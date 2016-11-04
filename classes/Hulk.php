<?php

/**
 * Hero Incredible Hulk class
 */
class Classes_Hulk implements Interfaces_MarvelSuperhero
{
    private $phrases = ['Don\'t make me angry - you wouldn\'t like me when I\'m angry' , 'Grrrrrrrrrrr', 'Hulk Smash'];

    private $clothing = ['ripped trousers'];

    private $powers = ['massive strength', 'fighting rage'];


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
