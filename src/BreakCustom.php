<?php

namespace GLS;

class BreakCustom
{

    /**
     * @var string $Start
     */
    protected $Start = null;

    /**
     * @var string $End
     */
    protected $End = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStart()
    {
      return $this->Start;
    }

    /**
     * @param string $Start
     * @return \GLS\Break
     */
    public function setStart($Start)
    {
      $this->Start = $Start;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnd()
    {
      return $this->End;
    }

    /**
     * @param string $End
     * @return \GLS\Break
     */
    public function setEnd($End)
    {
      $this->End = $End;
      return $this;
    }

}
