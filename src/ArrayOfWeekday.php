<?php

namespace GLS;

class ArrayOfWeekday implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Weekday[] $Weekday
     */
    protected $Weekday = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Weekday[]
     */
    public function getWeekday()
    {
      return $this->Weekday;
    }

    /**
     * @param Weekday[] $Weekday
     * @return \GLS\ArrayOfWeekday
     */
    public function setWeekday(array $Weekday = null)
    {
      $this->Weekday = $Weekday;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->Weekday[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Weekday
     */
    public function offsetGet($offset)
    {
      return $this->Weekday[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Weekday $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Weekday[] = $value;
      } else {
        $this->Weekday[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->Weekday[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Weekday Return the current element
     */
    public function current()
    {
      return current($this->Weekday);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Weekday);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Weekday);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->Weekday);
    }

    /**
     * Countable implementation
     *
     * @return Weekday Return count of elements
     */
    public function count()
    {
      return count($this->Weekday);
    }

}
