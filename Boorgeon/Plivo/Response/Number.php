<?php

/**
 * The <Number> element is used to specify a phone number to dial.
 * <br><br>
 * You can use multiple <Number> elements within a <Dial> element to
 * simultaneously call multiple numbers. The first call to pick up is connected
 * to the current call and the rest are hung up.
 * <br><br>
 * Note: when dialing multiple numbers simultaneously, if confirmSound and
 * confirmKey are specified for the Dial element, the number which confirms the
 * key correctly will be bridged while all others will fail.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Number extends Boorgeon_Plivo_Response_Element
{

    public function __construct($phonenumber)
    {
        parent::__construct();

        $this->setValue($phonenumber);
    }

    /**
     * Get send Digits
     *
     * @return string
     */
    public function getSendDigits()
    {
        return $this->sendDigits;
    }

    /**
     * Set send Digits
     *
     * @param string $sendDigits The sendDigits attribute tells the API to play
     * DTMF tones when the call is answered. This is useful when dialing a
     * phone number and an extension. The API will dial the number, and when
     * the automated system picks up, the DTMF tones are sent to connect to the
     * extension.
     * <br>
     * <b>Allowed Values : </b>any digits
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_Number
     */
    public function setSendDigits($sendDigits)
    {
        $this->sendDigits = $sendDigits;
        return $this;
    }

    /**
     * Get send On Preanswer
     *
     * @return boolean
     */
    public function getSendOnPreanswer()
    {
        return $this->sendOnPreanswer;
    }

    /**
     * Set send On Preanswer
     *
     * @param boolean $sendOnPreanswer If sendOnPreanswer attribute is ‘true’,
     * sendDigits is executed when the called party is in early media instead
     * of answer state.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Number
     */
    public function setSendOnPreanswer($sendOnPreanswer)
    {
        $this->sendOnPreanswer = $sendOnPreanswer;
        return $this;
    }

    /**
     * Get send Digits Mode
     *
     * @return string
     */
    public function getSendDigitsMode()
    {
        return $this->sendDigitsMode;
    }

    /**
     * Set send Digits Mode
     *
     * @param string $sendDigitsMode
     *
     * @return Boorgeon_Plivo_Response_Number
     */
    public function setSendDigitsMode($sendDigitsMode)
    {
        $this->sendDigitsMode = $sendDigitsMode;
        return $this;
    }

}
