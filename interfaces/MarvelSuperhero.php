<?php

/**
 * Interface for Marvel package superheroes
 */

namespace Marvel\Interfaces;

interface MarvelSuperhero
{
    public function talk();

    public function getKitOn();

    public function useSpecialSkill();
}
