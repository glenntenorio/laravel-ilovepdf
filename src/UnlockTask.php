<?php

namespace GlennTenorio\LaravelIlovepdf;
/**
 * Class UnlockTask
 *
 * @package GlennTenorio\LaravelIlovepdf
 */
class UnlockTask extends Task
{

    /**
     * UnlockTask constructor.
     * @param string $publicKey
     * @param string $secretKey
     */
    function __construct($publicKey, $secretKey)
    {
        $this->tool = 'unlock';
        parent::__construct($publicKey, $secretKey, true);
    }
}
