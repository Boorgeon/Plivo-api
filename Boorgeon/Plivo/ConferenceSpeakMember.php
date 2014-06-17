<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_ConferenceSpeakMember extends Boorgeon_Plivo_Object
{

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set url
     *
     * @param string $text The text that the member must hear.
     *
     * @return Boorgeon_Plivo_ConferenceSpeakMember
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
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
     * @param string $voice The voice to be used. Can be MAN or WOMAN.
     * Defaults to WOMAN.
     *
     * @return Boorgeon_Plivo_ConferenceSpeakMember
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
     * @param string $language The language to be used, see Supported voices
     * and languages below. Defaults to en-US
     *
     * @return Boorgeon_Plivo_ConferenceSpeakMember
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

}
