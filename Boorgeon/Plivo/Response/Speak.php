<?php

/**
 * The <Speak> element is used to read out text as speech to the caller.
 * It is very useful for dynamic text that cannot be pre-recorded.
 * <br><br>
 * Note: If you are using special characters like é, you need to encode these characters using the Numerical reference.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Speak extends Boorgeon_Plivo_Response_Element
{

    public function __construct($text)
    {
        parent::__construct();

        $this->setValue($text);
    }

    /**
     * Get voice
     *
     * @return string
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * Set voice
     *
     * @param string $voice The tone to be used for reading out the text.
     * <br>
     * <b>Allowed Values : </b>“WOMAN”, “MAN”
     * <br>
     * <b>Default Value : </b>“WOMAN”
     *
     * @return Boorgeon_Plivo_Response_Speak
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;
        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set language
     *
     * @param string $language Language used to read out the text.
     * <br>
     * <b>Allowed Values : </b>See Supported voices and languages below.
     * <br>
     * <b>Default Value : </b>en-US
     *
     * @return Boorgeon_Plivo_Response_Speak
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Get loop
     *
     * @return integer
     */
    public function getLoop()
    {
        return $this->loop;
    }

    /**
     * Set loop
     *
     * @param integer $loop Specifies number of times to speak out the text.
     * If value set to 0, speaks indefinitely
     * <br>
     * <b>Allowed Values : </b>integer >= 0 (0 indicates a continuous loop.)
     * <br>
     * <b>Default Value : </b>1
     *
     * @return Boorgeon_Plivo_Response_Speak
     */
    public function setLoop($loop)
    {
        $this->loop = $loop;
        return $this;
    }

}
