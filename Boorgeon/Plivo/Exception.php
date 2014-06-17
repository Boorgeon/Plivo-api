<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Exception extends Exception
{

    /**
     * Class constructor
     *
     * @param string $msg
     * @param int $code
     * @param Exception $previous Default null
     * @return void
     */
    public function __construct($msg, $code = 0, Exception $previous = null)
    {
        parent::__construct($msg, $code, $previous);
    }

}
