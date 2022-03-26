<?php

namespace Fabulous\Banking;

/**
 * Class Parent Object
 *
 */
class Fab
{
    /**
     * Returns the object as array
     *
     * @return mixed
     */
    public function toArray()
    {
        return get_object_vars($this);
    }
}