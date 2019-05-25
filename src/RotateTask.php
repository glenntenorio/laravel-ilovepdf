<?php

namespace GlennTenorio\LaravelIlovepdf;


/**
 * Class RotateTask
 *
 * @package GlennTenorio\LaravelIlovepdf
 */
class RotateTask extends Task
{

    /**
     * RotateTask constructor.
     * @param string $publicKey
     * @param string $secretKey
     */
    function __construct($publicKey, $secretKey)
    {
        $this->tool = 'rotate';
        parent::__construct($publicKey, $secretKey, true);
    }
}
