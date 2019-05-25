<?php

namespace GlennTenorio\LaravelIlovepdf;

/**
 * Class OfficepdfTask
 *
 * @package GlennTenorio\LaravelIlovepdf
 */
class OfficepdfTask extends Task
{

    /**
     * OfficepdfTask constructor.
     * @param string $publicKey
     * @param string $secretKey
     */
    function __construct($publicKey, $secretKey)
    {
        $this->tool = 'officepdf';
        parent::__construct($publicKey, $secretKey, true);
    }

    /**
     * @param null $processData
     * @return mixed
     */
    public function execute($processData=null){
        return parent::execute(get_object_vars($this));
    }


}
