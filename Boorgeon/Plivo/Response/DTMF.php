<?php

/**
 * The <DTMF> element is used to send digits from the current call.
 * <br><br>
 * Digits are sent in the background, so the call is going to the next element
 * when first digit is sent. Use the character 'w' for a 0.5 second delay and
 * the character 'W' for a 1 second delay. Allowed values: 1234567890*#wW
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_DTMF extends Boorgeon_Plivo_Response_Element
{

    public function __construct($digits)
    {
        parent::__construct();

        $this->setValue($digits);
    }

    /**
     * Get async
     *
     * @return boolean
     */
    public function getAsync()
    {
        return $this->async;
    }

    /**
     * Set async
     *
     * @param boolean $async Proceed to next element after the first digit is sent.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_DTMF
     */
    public function setAsync($async)
    {
        $this->async = $async;
        return $this;
    }

}
