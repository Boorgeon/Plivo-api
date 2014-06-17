<?php

/**
 * The <Record> element is used to record a call and returns the URL of the
 * recording file.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Record extends Boorgeon_Plivo_Response_Element
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
     * @param string $action Submit the result of the record to this URL.
     * See the action Request Parameters table below for more information.
     * <br>
     * <b>Allowed Values : </b>absolute URL (mandatory)
     * <br>
     * <b>Default Value : </b>no default action for Record
     *
     * @return Boorgeon_Plivo_Response_Record
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
     * @param string $method Submit to action url using GET or POST
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>POST
     *
     * @return Boorgeon_Plivo_Response_Record
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
     * @param integer $timeout Seconds of silence before considering the
     * recording complete (default 500). Only used when recordSession and
     * startOnDialAnswer are ‘false’.
     * <br>
     * <b>Allowed Values : </b>positive integer
     * <br>
     * <b>Default Value : </b>15
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
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
     * @param string $finishOnKey Stop recording on this key.
     * Only used when recordSession and startOnDialAnswer are false.
     * <br>
     * <b>Allowed Values : </b>any digit, #, *
     * <br>
     * <b>Default Value : </b>1234567890*#
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setFinishOnKey($finishOnKey)
    {
        $this->finishOnKey = $finishOnKey;
        return $this;
    }

    /**
     * Get max Length
     *
     * @return integer
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * Set max Length
     *
     * @param integer $maxLength Maximum number of seconds to record (default 60).
     * <br>
     * <b>Allowed Values : </b>integer greater than 1
     * <br>
     * <b>Default Value : </b>60 (1 min)
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
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
     * @param boolean $playBeep Play a beep before recording
     * (true/false, default true). Only used when bothLegs is ‘false’.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setPlayBeep($playBeep)
    {
        $this->playBeep = $playBeep;
        return $this;
    }

    /**
     * Get record Session
     *
     * @return boolean
     */
    public function getRecordSession()
    {
        return $this->recordSession;
    }

    /**
     * Set record Session
     *
     * @param boolean $recordSession Record current call session in background
     * (true/false, default false). No beep will be played.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setRecordSession($recordSession)
    {
        $this->recordSession = $recordSession;
        return $this;
    }

    /**
     * Get start On Dial Answer
     *
     * @return boolean
     */
    public function getStartOnDialAnswer()
    {
        return $this->startOnDialAnswer;
    }

    /**
     * Set start On Dial Answer
     *
     * @param boolean $startOnDialAnswer Record call when called party answers
     * in a Dial (true/false, default false). No beep will be played.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setStartOnDialAnswer($startOnDialAnswer)
    {
        $this->startOnDialAnswer = $startOnDialAnswer;
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
     * @param boolean $redirect Proceed to next element after the first digit
     * is sent.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setRedirect($redirect)
    {
        $this->redirect = $redirect;
        return $this;
    }

    /**
     * Get file Format
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat;
    }

    /**
     * Set file Format
     *
     * @param string $fileFormat The format of the recording. Valid formats:
     * mp3,wav. Defaults to mp3.
     * <br>
     * <b>Allowed Values : </b>mp3, wav
     * <br>
     * <b>Default Value : </b>mp3
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
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
     * @param string $callbackUrl If set, this URL is fired in background when
     * the recorded file is ready to be used. See the callbackUrl Request
     * Parameters table below for more information.
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>None
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
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
     * @param string $callbackMethod Method used to notify the callbackUrl.
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>POST
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setCallbackMethod($callbackMethod)
    {
        $this->callbackMethod = $callbackMethod;
        return $this;
    }

    /**
     * Get transcription Type
     *
     * @return string
     */
    public function getTranscriptionType()
    {
        return $this->transcriptionType;
    }

    /**
     * Set transcription Type
     *
     * @param string $transcriptionType The type of transcription required.
     * <br>
     * <b>Allowed Values : </b>
     * <ul>
     * <li>auto - Transcription is completely automated; turnaround time is
     * about 5 minutes.</li>
     * <li>hybrid - Transcription is a combination of automated and human
     * verification processes; turnaround time is about 10-15 minutes.</li>
     * <li>Our transcription service is primarily for the voicemail use case
     * (limited to recorded files lasting for up to 2 minutes).
     * Currently the service is available only in English and you will be
     * charged for the usage. Please check out the price details.</li>
     * </ul>
     * <br>
     * <b>Default Value : </b>auto
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setTranscriptionType($transcriptionType)
    {
        $this->transcriptionType = $transcriptionType;
        return $this;
    }

    /**
     * Get transcription Url
     *
     * @return string
     */
    public function getTranscriptionUrl()
    {
        return $this->transcriptionUrl;
    }

    /**
     * Set transcription Url
     *
     * @param string $transcriptionUrl The URL where the transcription is available.
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setTranscriptionUrl($transcriptionUrl)
    {
        $this->transcriptionUrl = $transcriptionUrl;
        return $this;
    }

    /**
     * Get transcription Method
     *
     * @return string
     */
    public function getTranscriptionMethod()
    {
        return $this->transcriptionMethod;
    }

    /**
     * Set transcription Method
     *
     * @param string $transcriptionMethod The method used to invoke transcriptionUrl.
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>GET
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function setTranscriptionMethod($transcriptionMethod)
    {
        $this->transcriptionMethod = $transcriptionMethod;
        return $this;
    }

}
