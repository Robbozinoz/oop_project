<?php

class BattleResult {
    private $usedJediPowers;

    private $winningShip;

    private $losingShip;

    public function __construct($usedJediPowers, Ship $winningShip = null, Ship $losingShip = null)
    {
        $this->usedJediPowers = $usedJediPowers;
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
    }

    /**
     * Get the value of losingShip
     * @return Ship|null
     */ 
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * Get the value of winningShip
     * @return Ship|null
     */ 
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * Get the value of usedJediPowers
     * @return boolean
     */ 
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    }
}