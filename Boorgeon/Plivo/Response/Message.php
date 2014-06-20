<?php

/**
 * The <Message> element is used to send a message.
 * <br><br>
 * To receive a message, you must set a message_URL in your Plivo application
 * via API or in the Applications tab from the Dashboard.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Message extends Boorgeon_Plivo_Response_Element
{

    public function __construct($text)
    {
        parent::__construct();

        $this->setValue($text);
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set src
     *
     * @param string $src Source Number. For eg.1202322222
     * <br>
     * <b>Allowed Values : </b>Must be a purchased, valid number.
     * <br>
     * <b>Default Value : </b>None
     *
     * @return Boorgeon_Plivo_Response_Message
     */
    public function setSrc($src)
    {
        $this->src = $src;
        return $this;
    }

    /**
     * Get dst
     *
     * @return string
     */
    public function getDst()
    {
        return $this->dst;
    }

    /**
     * Set dst
     *
     * @param string $dst Destination Number.
     * Can be bulk numbers delimited by <. For eg.1203443444<1203345564
     * <br>
     * <b>Allowed Values : </b>Must be a valid number.
     * <br>
     * <b>Default Value : </b>None
     *
     * @return Boorgeon_Plivo_Response_Message
     */
    public function setDst($dst)
    {
        $this->dst = $dst;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $type Type of the message. For eg. sms
     * <br>
     * <b>Allowed Values : </b>sms
     * <br>
     * <b>Default Value : </b>sms
     *
     * @return Boorgeon_Plivo_Response_Message
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @param string $callbackMethod The method used to notify the callbackUrl
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>POST
     *
     * @return Boorgeon_Plivo_Response_Message
     */
    public function setCallbackMethod($callbackMethod)
    {
        $this->callbackMethod = $callbackMethod;
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
     * @param string $callbackUrl URL that is notified by Plivo when a response
     * is available and to which the response is sent. (Delivery reports)
     * <br>
     * <b>Allowed Values : </b>absolute URL
     * <br>
     * <b>Default Value : </b>None
     *
     * @return Boorgeon_Plivo_Response_Message
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }

}
