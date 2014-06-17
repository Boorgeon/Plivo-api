<?php

/**
 * Send digits on a call
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_CallDtmf extends Boorgeon_Plivo_Object
{

    /**
     * Get digits
     *
     * @return string
     */
    public function getDigits()
    {
        return $this->digits;
    }

    /**
     * Set digits
     *
     * @param string $digits Digits to be sent.
     *
     * @return Boorgeon_Plivo_CallDtmf
     */
    public function setDigits($digits)
    {
        $this->digits = $digits;
        return $this;
    }

    /**
     * Get leg
     *
     * @return string
     */
    public function getLeg()
    {
        return $this->leg;
    }

    /**
     * Set leg
     *
     * @param string $leg The leg to be used, can be aleg (the current call) or
     * bleg (the other party in a Dial). Defaults to aleg.
     *
     * @return Boorgeon_Plivo_CallDtmf
     */
    public function setLeg($leg)
    {
        $this->leg = $leg;
        return $this;
    }

}
