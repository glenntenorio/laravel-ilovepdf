<?php

namespace GlennTenorio\LaravelIlovepdf;
/**
 * Class RepairTask
 *
 * @package GlennTenorio\LaravelIlovepdf
 */
class RepairTask extends Task
{

    /**
     * RepairTask constructor.
     * @param string $publicKey
     * @param string $secretKey
     */
    function __construct($publicKey, $secretKey)
    {
        $this->tool = 'repair';
        parent::__construct($publicKey, $secretKey, true);
    }
}
