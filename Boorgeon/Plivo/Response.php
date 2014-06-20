<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response
{

    protected $_elements = array();

    /**
     * Add element.
     *
     * @param Boorgeon_Plivo_Response_Element $element
     *
     * @return Boorgeon_Plivo_Response
     */
    public function addChild(Boorgeon_Plivo_Response_Element $element)
    {
        $this->_elements[] = $element;
        return $this;
    }

    /**
     * Get Conference.
     *
     * @param string $room
     *
     * @return Boorgeon_Plivo_Response_Conference
     */
    public function conference($room)
    {
        $conference = new Boorgeon_Plivo_Response_Conference($room);

        $this->addChild($conference);

        return $conference;
    }

    /**
     * Get Dial.
     *
     * @return Boorgeon_Plivo_Response_Dial
     */
    public function dial()
    {
        $dial = new Boorgeon_Plivo_Response_Dial();

        $this->addChild($dial);

        return $dial;
    }

    /**
     * Get DTMF.
     *
     * @param string $digits
     *
     * @return Boorgeon_Plivo_Response_DTMF
     */
    public function dtmf($digits)
    {
        $dtmf = new Boorgeon_Plivo_Response_DTMF($digits);

        $this->addChild($dtmf);

        return $dtmf;
    }

    /**
     * Get GetDigits.
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function getdigits()
    {
        $getdigits = new Boorgeon_Plivo_Response_GetDigits();

        $this->addChild($getdigits);

        return $getdigits;
    }

    /**
     * Get Hangup.
     *
     * @return Boorgeon_Plivo_Response_Hangup
     */
    public function hangup()
    {
        $hangup = new Boorgeon_Plivo_Response_Hangup();

        $this->addChild($hangup);

        return $hangup;
    }

    /**
     * Get Message.
     *
     * @param string $text
     *
     * @return Boorgeon_Plivo_Response_Message
     */
    public function message($text)
    {
        $message = new Boorgeon_Plivo_Response_Message($text);

        $this->addChild($message);

        return $message;
    }

    /**
     * Get Play.
     *
     * @param string $url
     *
     * @return Boorgeon_Plivo_Response_Play
     */
    public function play($url)
    {
        $play = new Boorgeon_Plivo_Response_Play($url);

        $this->addChild($play);

        return $play;
    }

    /**
     * Get PreAnswer.
     *
     * @return Boorgeon_Plivo_Response_PreAnswer
     */
    public function preanswer()
    {
        $preanswer = new Boorgeon_Plivo_Response_PreAnswer();

        $this->addChild($preanswer);

        return $preanswer;
    }

    /**
     * Get Record.
     *
     * @return Boorgeon_Plivo_Response_Record
     */
    public function record()
    {
        $record = new Boorgeon_Plivo_Response_Record();

        $this->addChild($record);

        return $record;
    }

    /**
     * Get Redirect.
     *
     * @param string $url
     *
     * @return Boorgeon_Plivo_Response_Redirect
     */
    public function redirect($url)
    {
        $redirect = new Boorgeon_Plivo_Response_Redirect($url);

        $this->addChild($redirect);

        return $redirect;
    }

    /**
     * Get Speak.
     *
     * @param string $text
     *
     * @return Boorgeon_Plivo_Response_Speak
     */
    public function speak($text)
    {
        $speak = new Boorgeon_Plivo_Response_Speak($text);

        $this->addChild($speak);

        return $speak;
    }

    /**
     * Get Wait.
     *
     * @return Boorgeon_Plivo_Response_Wait
     */
    public function wait()
    {
        $wait = new Boorgeon_Plivo_Response_Wait();

        $this->addChild($wait);

        return $wait;
    }

    public function toXML()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8" ?>';
        $xml.= '<Response>';

        foreach ($this->_elements as $element) {
            $xml .= $element->toXML();
        }

        $xml.= '</Response>';

        return $xml;
    }

    protected function _sendHeaders()
    {
        header('Content-Type: application/xml');
    }

    public function send()
    {
        $this->_sendHeaders();
        echo $this->toXml();
    }

    public function __toString()
    {
        $this->_sendHeaders();
        return $this->toXml();
    }

}
