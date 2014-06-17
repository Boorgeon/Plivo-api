<?php

/**
 * The <Conference> element is used for starting a conference and callers can
 * then join in to talk to others connected to that room.
 * <br>
 * The user can choose the name of the room.The room names are mapped to a user
 * account, which means that two accounts with same room name will be dialing
 * into different conferences. Maximum number of members in a single
 * conference room is 100
 * <br><br>
 * The following attributes are supported by the <Conference> element:
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Conference extends Boorgeon_Plivo_Response_Element
{

    /**
     * Get muted
     *
     * @return boolean
     */
    public function getMuted()
    {
        return $this->muted;
    }

    /**
     * Set muted
     *
     * @param boolean $muted To mute a member who joins a conference, 
     * set this attribute to 'true'; the member will be able to listen to the 
     * people in the conference.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setMuted($muted)
    {
        $this->muted = $muted;
        return $this;
    }

    /**
     * Get beep
     *
     * @return boolean
     */
    public function getBeep()
    {
        return $this->beep;
    }

    /**
     * Set beep
     *
     * @param boolean $beep
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setBeep($beep)
    {
        $this->beep = $beep;
        return $this;
    }

    /**
     * Get start Conference On Enter
     *
     * @return boolean
     */
    public function getStartConferenceOnEnter()
    {
        return $this->startConferenceOnEnter;
    }

    /**
     * Set start Conference On Enter
     *
     * @param boolean $startConferenceOnEnter When a member joins the 
     * conference with this attribute set to true, the conference is started 
     * (if not already in progress). If a member joins a conference that has 
     * not yet started, with this attribute value set to false, the member is 
     * muted and hears background music until another member joins the 
     * conference. This attribute is handy when organizing moderated conferences.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setStartConferenceOnEnter($startConferenceOnEnter)
    {
        $this->startConferenceOnEnter = $startConferenceOnEnter;
        return $this;
    }

    /**
     * Get end Conference On Exit
     *
     * @return boolean
     */
    public function getEndConferenceOnExit()
    {
        return $this->endConferenceOnExit;
    }

    /**
     * Set end Conference On Exit
     *
     * @param boolean $endConferenceOnExit If a member with this attribute set 
     * to true leaves the conference, the conference ends and all other members 
     * are automatically removed from the conference. This attribute is handy 
     * when organizing moderated conferences.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setEndConferenceOnExit($endConferenceOnExit)
    {
        $this->endConferenceOnExit = $endConferenceOnExit;
        return $this;
    }

    /**
     * Get wait Sound
     *
     * @return string
     */
    public function getWaitSound()
    {
        return $this->waitSound;
    }

    /**
     * Set wait Sound
     *
     * @param string $waitSound Is a remote URL fetched with HTTP POST request. 
     * The URL must return an XML document with Play, Speak and/or Wait 
     * elements only. All other elements are ignored. The sound instructed by 
     * the XML response is played to the member while alone in the conference.
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b> 	No Music
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setWaitSound($waitSound)
    {
        $this->waitSound = $waitSound;
        return $this;
    }

    /**
     * Get enter Sound
     *
     * @return string
     */
    public function getEnterSound()
    {
        return $this->enterSound;
    }

    /**
     * Set enter Sound
     *
     * @param string $enterSound Used to play a sound when a member enters the 
     * conference. A single beep is played with beep:1 value and a double beep 
     * is played with a beep:2 value. If a URL is specified, the URL is fetched 
     * with an HTTP POST request; the application at the URL must return an XML 
     * with Play, Speak and/or Wait elements only. All other elements are ignored.
     * <br>
     * <b>Allowed Values : </b>"", "beep:1", "beep:2" or valid URL
     * <br>
     * <b>Default Value : </b>“”
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setEnterSound($enterSound)
    {
        $this->enterSound = $enterSound;
        return $this;
    }

    /**
     * Get exit Sound
     *
     * @return string
     */
    public function getExitSound()
    {
        return $this->exitSound;
    }

    /**
     * Set exit Sound
     *
     * @param string $exitSound Used to play a sound when a member exits the 
     * conference. Defaults to no beep. A single beep is played with beep:1 
     * value and a double beep is played with a beep:2 value. If a URL is 
     * specified, the URL is fetched with an HTTP POST request; the application 
     * at the URL must return an XML with Play, Speak and/or Wait elements 
     * only. All other elements are ignored.
     * <br>
     * <b>Allowed Values : </b>"", "beep:1", "beep:2" or a valid URL
     * <br>
     * <b>Default Value : </b>“”
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setExitSound($exitSound)
    {
        $this->exitSound = $exitSound;
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
     * @param integer $timeLimit Used to set the maximum duration of the 
     * conference in seconds. For example, a time limit of 600 seconds will 
     * automatically end the conference after ten minutes. Defaults to 0, which 
     * indicates that no time limit is set.
     * <br>
     * <b>Allowed Values : </b>Any integer >= 0
     * <br>
     * <b>Default Value : </b>0
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setTimeLimit($timeLimit)
    {
        $this->timeLimit = $timeLimit;
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
     * Set hangup On Star
     *
     * @param boolean $hangupOnStar If set to true, this attribute lets the 
     * member exit from the conference by pressing the ‘*‘ key on their phone, 
     * without having to hang up. The Plivo API will continue on to the next 
     * element in the current XML document, after exit.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setHangupOnStar($hangupOnStar)
    {
        $this->hangupOnStar = $hangupOnStar;
        return $this;
    }

    /**
     * Get max Members
     *
     * @return integer
     */
    public function getMaxMembers()
    {
        return $this->maxMembers;
    }

    /**
     * Set max Members
     *
     * @param integer $maxMembers Indicates the maximum number of members that 
     * are to be allowed within a named conference room. This value can be any 
     * positive integer greater than 0. When maxMembers is reached, 
     * the conference is skipped. If the next element in the XML response is 
     * the action_url this is also skipped and the call proceeds to the next 
     * element after the <Conference> element.
     * <br>
     * <b>Allowed Values : </b>Any integer > 0 and <=1 00
     * <br>
     * <b>Default Value : </b>100
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setMaxMembers($maxMembers)
    {
        $this->maxMembers = $maxMembers;
        return $this;
    }

    /**
     * Get record
     *
     * @return boolean
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Set record
     *
     * @param boolean $record 
     * <br>
     * <b>Allowed Values : </b>true or false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setRecord($record)
    {
        $this->record = $record;
        return $this;
    }

    /**
     * Get record File Format
     *
     * @return string
     */
    public function getRecordFileFormat()
    {
        return $this->recordFileFormat;
    }

    /**
     * Set record File Format
     *
     * @param string $recordFileFormat The file format for recording.
     * <br>
     * <b>Allowed Values : </b>mp3 or wav
     * <br>
     * <b>Default Value : </b>mp3
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setRecordFileFormat($recordFileFormat)
    {
        $this->recordFileFormat = $recordFileFormat;
        return $this;
    }

    /**
     * Get record When Alone
     *
     * @return string
     */
    public function getRecordWhenAlone()
    {
        return $this->recordWhenAlone;
    }

    /**
     * Set record When Alone
     *
     * @param string $recordWhenAlone 
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setRecordWhenAlone($recordWhenAlone)
    {
        $this->recordWhenAlone = $recordWhenAlone;
        return $this;
    }

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
     * @param string $action Should be an absolute URL to which the API can 
     * send back parameters. See the action Request Parameters table below for 
     * more information.
     * <br>
     * <b>Allowed Values : </b>absolute URL.
     * <br>
     * <b>Default Value : </b>no default action for Conference
     *
     * @return Boorgeon_Plivo_Response_Conference
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
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setMethod($method)
    {
        $this->method = $method;
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
     * @param boolean $redirect If false, do not redirect to action URL, only 
     * request the URL and continue to next element.
     * <br>
     * <b>Allowed Values : </b>true,false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_Conference
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
     * @param string $digitsMatch A list of digits that are sent to the 
     * callbackUrl when the digits pressed by the user match the digitsMatch 
     * parameter.
     * <br>
     * <b>Allowed Values : </b>List of digits patterns separated by comma.
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setDigitsMatch($digitsMatch)
    {
        $this->digitsMatch = $digitsMatch;
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
     * @param string $callbackUrl If specified, information is sent back to 
     * this URL. See the callbackUrl Request Parameters table below for more 
     * information. 
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_Conference
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
     * @param string $callbackMethod Method used to notify callbackUrl using 
     * GET or POST.
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>POST
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setCallbackMethod($callbackMethod)
    {
        $this->callbackMethod = $callbackMethod;
        return $this;
    }

    /**
     * Get stay Alone
     *
     * @return boolean
     */
    public function getStayAlone()
    {
        return $this->stayAlone;
    }

    /**
     * Set stay Alone
     *
     * @param boolean $stayAlone When a member is alone in a conference and has 
     * this attribute set to false, the conference ends and the member is dropped.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setStayAlone($stayAlone)
    {
        $this->stayAlone = $stayAlone;
        return $this;
    }

    /**
     * Get floor Event
     *
     * @return boolean
     */
    public function getFloorEvent()
    {
        return $this->floorEvent;
    }

    /**
     * Set floor Event
     *
     * @param boolean $floorEvent If this attribute is set to ‘true’, send 
     * notification to callbackUrl when member is the floor holder.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setFloorEvent($floorEvent)
    {
        $this->floorEvent = $floorEvent;
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
     * </ul>
     * <br>
     * <b>Default Value : </b>auto
     *
     * @return Boorgeon_Plivo_Response_Conference
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
     * @param string $transcriptionUrl The URL where the transcription is 
     * available.
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_Conference
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
     * @param string $transcriptionMethod The method used to invoke the 
     * transcriptionUrl.
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>GET
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setTranscriptionMethod($transcriptionMethod)
    {
        $this->transcriptionMethod = $transcriptionMethod;
        return $this;
    }

    /**
     * Get relay DTMF
     *
     * @return boolean
     */
    public function getRelayDTMF()
    {
        return $this->relayDTMF;
    }

    /**
     * Set relay DTMF
     *
     * @param boolean $relayDTMF Transmit all digits except digitsMatch to all 
     * members of conference.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>true
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function setRelayDTMF($relayDTMF)
    {
        $this->relayDTMF = $relayDTMF;
        return $this;
    }

}
