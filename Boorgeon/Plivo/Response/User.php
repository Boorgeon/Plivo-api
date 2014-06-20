<?php

/**
 * he <User> element is used to specify a SIP endpoint (user) to dial.
 * <br><br>
 * You can use multiple <User> elements within a <Dial> element to simultaneously
 * call multiple sip endpoint users. The first user to answer is connected to
 * the current call and the rest of the dialed users are hung up.
 * <br><br>
 * Note: When dialing multiple numbers simultaneously, if confirmSound and
 * confirmKey are specified for the Dial element, the phone which confirms the
 * key correctly will be bridged while all others will fail.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_User extends Boorgeon_Plivo_Response_Element
{

    public function __construct($sip)
    {
        parent::__construct();

        $this->setValue($sip);
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
     * @return Boorgeon_Plivo_Response_User
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
     * @return Boorgeon_Plivo_Response_User
     */
    public function setSendOnPreanswer($sendOnPreanswer)
    {
        $this->sendOnPreanswer = $sendOnPreanswer;
        return $this;
    }

    /**
     * Get sip Headers
     *
     * @return string
     */
    public function getSipHeaders()
    {
        return $this->sipHeaders;
    }

    /**
     * Set sip Headers
     *
     * @param string $sipHeaders The SIP headers are always prefixed with
     * X-PH-. For every HTTP Request called by the dialed leg, the SIP headers
     * will be present. Only [A-Z], [a-z] and [0-9] characters are allowed for
     * SIP headers key. Only [A-Z], [a-z], [0-9] and '%' characters are allowed
     * for SIP headers value (so you can URL encode this value).
     * <br>
     * <b>Allowed Values : </b>List of SIP headers to send, separated by
     * commas. Sent as key=value pair.For e.g head1=val1,head2=val2,...,headN=valN.
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_User
     */
    public function setSipHeaders($sipHeaders)
    {
        $this->sipHeaders = $sipHeaders;
        return $this;
    }

}
