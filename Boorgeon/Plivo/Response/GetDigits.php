<?php

/**
 * The <GetDigits> element is used to collect the digits entered by a caller.
 * Once the caller has finished entering the digits, the API submits the data
 * to the provided action URL using a HTTP GET or POST request.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_GetDigits extends Boorgeon_Plivo_Response_Element
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
     * @param string $action The URL to which the digits are sent.
     * See the action Request Parameters table below for more information
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_GetDigits
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
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setMethod($method)
    {
        $this->method = $method;
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
     * @param integer $timeout Time in seconds to wait to receive the first
     * digit. If the user fails to provide an input within the timeout period,
     * the next element in the response is processed.
     * <br>
     * <b>Allowed Values : </b>positive integer
     * <br>
     * <b>Default Value : </b>5 seconds
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * Get digit Timeout
     *
     * @return integer
     */
    public function getDigitTimeout()
    {
        return $this->digitTimeout;
    }

    /**
     * Set digit Timeout
     *
     * @param integer $digitTimeout Time in seconds allowed between consecutive
     * digit inputs. If input is not provided within the digitTimeout period,
     * digits entered until then will be processed.
     * <br>
     * <b>Allowed Values : </b>positive integer
     * <br>
     * <b>Default Value : </b>2 seconds
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setDigitTimeout($digitTimeout)
    {
        $this->digitTimeout = $digitTimeout;
        return $this;
    }

    /**
     * Get num Digits
     *
     * @return integer
     */
    public function getNumDigits()
    {
        return $this->numDigits;
    }

    /**
     * Set num Digits
     *
     * @param integer $numDigits Maximum number of digits to be processed in
     * the current operation. Only the number of numDigits is captured and any
     * additional digits entered are ignored.
     * <br>
     * <b>Allowed Values : </b>integer >= 1
     * <br>
     * <b>Default Value : </b>99
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setNumDigits($numDigits)
    {
        $this->numDigits = $numDigits;
        return $this;
    }

    /**
     * Get retries
     *
     * @return integer
     */
    public function getRetries()
    {
        return $this->retries;
    }

    /**
     * Set retries
     *
     * @param integer $retries Indicates the number of retries the user is
     * allowed to input the digits, if digits are not received within the time
     * specified by timeout.
     * <br>
     * <b>Allowed Values : </b>integer >= 1
     * <br>
     * <b>Default Value : </b>1
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setRetries($retries)
    {
        $this->retries = $retries;
        return $this;
    }

    /**
     * Get invalid Digits Sound
     *
     * @return string
     */
    public function getInvalidDigitsSound()
    {
        return $this->invalidDigitsSound;
    }

    /**
     * Set invalid Digits Sound
     *
     * @param string $invalidDigitsSound URL of the sound file to be played
     * when the user enters an invalid digit.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setInvalidDigitsSound($invalidDigitsSound)
    {
        $this->invalidDigitsSound = $invalidDigitsSound;
        return $this;
    }

    /**
     * Get valid Digits
     *
     * @return string
     */
    public function getValidDigits()
    {
        return $this->validDigits;
    }

    /**
     * Set valid Digits
     *
     * @param string $validDigits Plays a beep when each digit entered.
     * <br>
     * <b>Allowed Values : </b>any digit, #, *
     * <br>
     * <b>Default Value : </b>1234567890*#
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setValidDigits($validDigits)
    {
        $this->validDigits = $validDigits;
        return $this;
    }

    /**
     * Get play Beep
     *
     * @return boolean
     */
    public function getPlayBeep()
    {
        return $this->playBeep;
    }

    /**
     * Set play Beep
     *
     * @param boolean $playBeep Plays a beep when each digit entered.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setPlayBeep($playBeep)
    {
        $this->playBeep = $playBeep;
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
     * Set redirect
     *
     * @param boolean $redirect Redirect to action URL if true.
     * If false,only request the URL and continue to next element.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setRedirect($redirect)
    {
        $this->redirect = $redirect;
        return $this;
    }

    /**
     * Get finish On Key
     *
     * @return string
     */
    public function getFinishOnKey()
    {
        return $this->finishOnKey;
    }

    /**
     * Set finish On Key
     *
     * @param string $finishOnKey This can be any number or a special
     * character, such as, an asterisk (*) or a pound (#) that is used to
     * complete the task of capturing digits. If finishOnKey is set to None,
     * the default option is disabled and timeout will occur based on
     * digitTimeout or numDigits parameters. If these parameters are not
     * specified, timeout will occur according to the default value of the
     * digitTimeout parameter.
     * <br>
     * <b>Allowed Values : </b>any digit, #, *
     * <br>
     * <b>Default Value : </b>#
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setFinishOnKey($finishOnKey)
    {
        $this->finishOnKey = $finishOnKey;
        return $this;
    }

    /**
     * Get log
     *
     * @return boolean
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set log
     *
     * @param boolean $log If true, Plivo will log digits entered by the caller
     * and you can view the same in debug logs. If false, logging will disabled
     * while processing <GetDigits> Element.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function setLog($log)
    {
        $this->log = $log;
        return $this;
    }

}
