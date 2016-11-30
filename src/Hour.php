<?php

namespace GLS;

class Hour
{

    /**
     * @var string $From
     */
    protected $From = null;

    /**
     * @var string $To
     */
    protected $To = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->From;
    }

    /**
     * @param string $From
     * @return \GLS\Hour
     */
    public function setFrom($From)
    {
      $this->From = $From;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->To;
    }

    /**
     * @param string $To
     * @return \GLS\Hour
     */
    public function setTo($To)
    {
      $this->To = $To;
      return $this;
    }

}
