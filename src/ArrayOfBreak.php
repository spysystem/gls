<?php

namespace GLS;

class ArrayOfBreak implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Break[] $Break
     */
    protected $Break = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Break[]
     */
    public function getBreak()
    {
      return $this->Break;
    }

    /**
     * @param Break[] $Break
     * @return \GLS\ArrayOfBreak
     */
    public function setBreak(array $Break = null)
    {
      $this->Break = $Break;
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
      return isset($this->Break[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Break
     */
    public function offsetGet($offset)
    {
      return $this->Break[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Break $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Break[] = $value;
      } else {
        $this->Break[$offset] = $value;
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
      unset($this->Break[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Break Return the current element
     */
    public function current()
    {
      return current($this->Break);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Break);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Break);
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
      reset($this->Break);
    }

    /**
     * Countable implementation
     *
     * @return Break Return count of elements
     */
    public function count()
    {
      return count($this->Break);
    }

}
