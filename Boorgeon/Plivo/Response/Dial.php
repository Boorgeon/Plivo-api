<?php

/**
 * The <Dial> element is used for dialing a single number or multiple numbers.
 * If the called party does not answer, the <Dial> element will end.
 * After completion of the call, Plivo makes a GET or POST request to the
 * action URL if provided. Depending on the value of the redirect element,
 * the call flow will continue using the XML that is received.
 * <br><br>
 * Note: the <Number> or <User> elements must be present and nested inside
 * <Dial> for the <Dial> element to work.
 * <br>
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Dial extends Boorgeon_Plivo_Response_Element
{

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set action
     *
     * @param string $action Redirect to this URL after leaving Dial.
     * See the action Request Parameters table below for more information.
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>no default action for Dial
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set method
     *
     * @param string $method Submit to action URL using GET or POST.
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>POST
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Get hangup On Star
     *
     * @return boolean
     */
    public function getHangupOnStar()
    {
        return $this->hangupOnStar;
    }

    /**
     * Set async
     *
     * @param boolean $hangupOnStar The caller can press the '*' key to hang up
     * on the called party but can continue with other operations depending on
     * the application's response.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setHangupOnStar($hangupOnStar)
    {
        $this->hangupOnStar = $hangupOnStar;
        return $this;
    }

    /**
     * Get time Limit
     *
     * @return integer
     */
    public function getTimeLimit()
    {
        return $this->timeLimit;
    }

    /**
     * Set time Limit
     *
     * @param integer $timeLimit Used to preset the duration (in seconds) of
     * the call.
     * <br>
     * <b>Allowed Values : </b>positive integer (in seconds)
     * <br>
     * <b>Default Value : </b>14400 seconds (4 hours)
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setTimeLimit($timeLimit)
    {
        $this->timeLimit = $timeLimit;
        return $this;
    }

    /**
     * Get timeout
     *
     * @return integer
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set timeout
     *
     * @param integer $timeout The duration (in seconds) for which the called
     * party has to be given a ring.
     * <br>
     * <b>Allowed Values : </b>positive integer (seconds)
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * Get caller Id
     *
     * @return string
     */
    public function getCallerId()
    {
        return $this->callerId;
    }

    /**
     * Set caller Id
     *
     * @param string $callerId If set to a string, caller number will be set to
     * this string value.Default is current caller number.
     * <br>
     * <b>Allowed Values : </b>valid phone number
     * <br>
     * <b>Default Value : </b>Current caller's callerId
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setCallerId($callerId)
    {
        $this->callerId = $callerId;
        return $this;
    }

    /**
     * Get caller Name
     *
     * @return string
     */
    public function getCallerName()
    {
        return $this->callerName;
    }

    /**
     * Set caller Name
     *
     * @param string $callerName If set to a string, caller name will be set to
     * this string value.Default is current caller name.
     * <br>
     * <b>Allowed Values : </b>String or default
     * <br>
     * <b>Default Value : </b>Caller's callerName
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setCallerName($callerName)
    {
        $this->callerName = $callerName;
        return $this;
    }

    /**
     * Get callback Url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * Set callback Url
     *
     * @param string $callbackUrl URL that is notified by Plivo when one of the
     * following events occur :
     * <br>
     * called party is bridged with caller
     * <br>
     * called party hangs up
     * <br>
     * caller has pressed any digit
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>empty
     * <br><br>
     * See the callbackUrl Request Parameters table below for more information.
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

    /**
     * Get confirm Sound
     *
     * @return string
     */
    public function getConfirmSound()
    {
        return $this->confirmSound;
    }

    /**
     * Set confirm Sound
     *
     * @param string $confirmSound Is a remote URL fetched with POST HTTP
     * request which must return an XML response with Play, Wait and/or Speak
     * elements only (all others are ignored). The sound indicated by the XML
     * is played to the called party when the call is answered.
     * Note: This parameter must be specified for confirmKey to work.
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>empty
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setConfirmSound($confirmSound)
    {
        $this->confirmSound = $confirmSound;
        return $this;
    }

    /**
     * Get confirm Key
     *
     * @return string
     */
    public function getConfirmKey()
    {
        return $this->confirmKey;
    }

    /**
     * Set confirm Key
     *
     * @param string $confirmKey The digit to be pressed by the called party to
     * accept the call.Used in conjunction with confirmSound
     * <br>
     * <b>Allowed Values : </b>any digit, #, *
     * <br>
     * <b>Default Value : </b>empty
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setConfirmKey($confirmKey)
    {
        $this->confirmKey = $confirmKey;
        return $this;
    }

    /**
     * Get dial Music
     *
     * @return string
     */
    public function getDialMusic()
    {
        return $this->dialMusic;
    }

    /**
     * Set dial Music
     *
     * @param string $dialMusic Music to be played to the caller while the call
     * is being connected.Is a remote URL fetched with POST HTTP request which
     * must return an XML with Play, Wait and/or Speak elements only (
     * all others are ignored). The sound indicated by the XML is played to the
     * called party when the call is answered.
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>empty
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setDialMusic($dialMusic)
    {
        $this->dialMusic = $dialMusic;
        return $this;
    }

    /**
     * Get callback Method
     *
     * @return string
     */
    public function getCallbackMethod()
    {
        return $this->callbackMethod;
    }

    /**
     * Set callback Method
     *
     *
     * @param string $callbackMethod Method used to notify callbackUrl
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>POST
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setCallbackMethod($callbackMethod)
    {
        $this->callbackMethod = $callbackMethod;
        return $this;
    }

    /**
     * Get redirect
     *
     * @return boolean
     */
    public function getRedirect()
    {
        return $this->redirect;
    }

    /**
     * Set async
     *
     * @param boolean $redirect If set to false, do not redirect to action URL.
     * Send to request_url and continue to next element.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setRedirect($redirect)
    {
        $this->redirect = $redirect;
        return $this;
    }

    /**
     * Get digits Match
     *
     * @return string
     */
    public function getDigitsMatch()
    {
        return $this->digitsMatch;
    }

    /**
     * Set digits Match
     *
     * @param string $digitsMatch Set matching key combination for the caller
     * (A leg).
     * <br>
     * <b>Allowed Values : </b>List of digit patterns separated by comma
     * <br>
     * <b>Default Value : </b>empty
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setDigitsMatch($digitsMatch)
    {
        $this->digitsMatch = $digitsMatch;
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
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function setSipHeaders($sipHeaders)
    {
        $this->sipHeaders = $sipHeaders;
        return $this;
    }

}
