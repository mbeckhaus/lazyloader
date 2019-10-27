<?php


namespace lazyloader;


class LazyLoader
{
    /**
     * @var callable $_loadingFunction function to resolve the object
     */
    private $_loadingFunction;

    /**
     * @var bool true if the value has already been loaded, false otherwise
     */
    private bool $_loaded;

    /**
     * @var object the resolved value
     */
    private object $_objectValue;

    public function __construct(callable $loadingFunction)
    {
        $this->_loaded = false;
        $this->_loadingFunction = $loadingFunction;
    }

    public function __invoke()
    {
        if ($this->_loaded) {
            return $this->_objectValue;
        }

        $this->_loaded = true;
        $callable = $this->_loadingFunction;
        $this->_objectValue = $callable();

        return $this->_objectValue;
    }
}