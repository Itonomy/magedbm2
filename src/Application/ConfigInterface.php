<?php

namespace Meanbee\Magedbm2\Application;

interface ConfigInterface
{

    /**
     * Get a config option value.
     *
     * @param string $option
     *
     * @return mixed
     */
    public function get($option);

    /**
     * Get the path to the temporary directory.
     *
     * @return string
     */
    public function getTmpDir();

    /**
     * Set a config option value.
     *
     * @param string $option
     * @param mixed  $value
     *
     * @return void
     */
    public function set($option, $value);
}
