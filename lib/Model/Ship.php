<?php

class Ship extends AbstractShip
{
    private $jediFactor = 0;

    private $underRepair;

    //Override the parent constrcut function from Abstract ship to calculate underrepair value
    public function __construct($name)
    {
        parent::__construct($name);

        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }
    
    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

        
    public function isFunctional()
    {
        return !$this->underRepair;
    }
        
    public function getType()
    {
        return 'Empire';
    }
}
