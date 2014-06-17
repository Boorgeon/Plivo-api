<?php

require __DIR__ . '/plivo-php/plivo.php';

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Helper extends Boorgeon_Plivo_Object
{

    /**
     * Plivo API
     *
     * @var PlivoRestAPI
     */
    protected $_plivo;

    public function __construct()
    {
        if (null === ($plivo = Boorgeon_Plivo::getInstance())) {
            throw new Boorgeon_Plivo_Exception('');
        }

        $this->_plivo = new PlivoRestAPI($plivo->getAuthId(), $plivo->getAuthToken());
    }

}
