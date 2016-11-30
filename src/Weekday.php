<?php

namespace GLS;

class Weekday
{

    /**
     * @var Day $day
     */
    protected $day = null;

    /**
     * @var Hour $openAt
     */
    protected $openAt = null;

    /**
     * @var ArrayOfBreak $breaks
     */
    protected $breaks = null;

    /**
     * @param Day $day
     * @param Hour $openAt
     */
    public function __construct($day, $openAt)
    {
      $this->day = $day;
      $this->openAt = $openAt;
    }

    /**
     * @return Day
     */
    public function getDay()
    {
      return $this->day;
    }

    /**
     * @param Day $day
     * @return \GLS\Weekday
     */
    public function setDay($day)
    {
      $this->day = $day;
      return $this;
    }

    /**
     * @return Hour
     */
    public function getOpenAt()
    {
      return $this->openAt;
    }

    /**
     * @param Hour $openAt
     * @return \GLS\Weekday
     */
    public function setOpenAt($openAt)
    {
      $this->openAt = $openAt;
      return $this;
    }

    /**
     * @return ArrayOfBreak
     */
    public function getBreaks()
    {
      return $this->breaks;
    }

    /**
     * @param ArrayOfBreak $breaks
     * @return \GLS\Weekday
     */
    public function setBreaks($breaks)
    {
      $this->breaks = $breaks;
      return $this;
    }

}
