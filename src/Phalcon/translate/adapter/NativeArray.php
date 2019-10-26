<?php

namespace Phalcon\Translate\Adapter;

/**
 * Phalcon\Translate\Adapter\NativeArray
 *
 * Allows to define translation lists using PHP arrays
 */
class NativeArray extends AbstractAdapter implements \ArrayAccess
{
    /**
     * @var array
     */
    private $translate;

    /**
     * @var bool
     */
    private $triggerError = false;


    /**
     * Phalcon\Translate\Adapter\NativeArray constructor
     *
     * @param \Phalcon\Translate\InterpolatorFactory $interpolator
     * @param array $options
     */
    public function __construct(\Phalcon\Translate\InterpolatorFactory $interpolator, array $options)
    {
    }

    /**
     * Check whether is defined a translation key in the internal array
     *
     * @param string $index
     * @return bool
     */
    public function exists(string $index): bool
    {
    }

    /**
     * Whenever a key is not found this medhod will be called
     *
     * @param string $index
     * @return string
     */
    public function notFound(string $index): string
    {
    }

    /**
     * Returns the translation related to the given key
     *
     * @param string $index
     * @param array $placeholders
     * @return string
     */
    public function query(string $index, array $placeholders = array()): string
    {
    }

}
