<?php

namespace GLS;

class ArrayOfPakkeshopData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PakkeshopData[] $PakkeshopData
     */
    protected $PakkeshopData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PakkeshopData[]
     */
    public function getPakkeshopData()
    {
      return $this->PakkeshopData;
    }

    /**
     * @param PakkeshopData[] $PakkeshopData
     * @return \GLS\ArrayOfPakkeshopData
     */
    public function setPakkeshopData(array $PakkeshopData = null)
    {
      $this->PakkeshopData = $PakkeshopData;
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
      return isset($this->PakkeshopData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PakkeshopData
     */
    public function offsetGet($offset)
    {
      return $this->PakkeshopData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PakkeshopData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PakkeshopData[] = $value;
      } else {
        $this->PakkeshopData[$offset] = $value;
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
      unset($this->PakkeshopData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PakkeshopData Return the current element
     */
    public function current()
    {
      return current($this->PakkeshopData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PakkeshopData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PakkeshopData);
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
      reset($this->PakkeshopData);
    }

    /**
     * Countable implementation
     *
     * @return PakkeshopData Return count of elements
     */
    public function count()
    {
      return count($this->PakkeshopData);
    }

}
