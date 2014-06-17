<?php

/**
 * Play Text During a Call (Text to Speech)
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_CallSpeak extends Boorgeon_Plivo_Object
{

    protected $_womanArray = array(
        'cs-CZ' => true,
        'da-DK' => true,
        'de-DE' => true,
        'el-GR' => true,
        'en-AU' => true,
        'en-CA' => true,
        'en-GB' => true,
        'en-US' => true,
        'es-ES' => true,
        'es-US' => true,
        'fi-FI' => true,
        'fr-CA' => true,
        'fr-FR' => true,
        'hu-HU' => true,
        'it-IT' => true,
        'ja-JP' => true,
        'nl-NL' => true,
        'pl-PL' => true,
        'pt-BR' => true,
        'pt-PT' => true,
        'ru-RU' => true,
        'sv-SE' => true,
        'zh-CN' => true
    );
    protected $_mamArray = array(
        'cs-CZ' => false,
        'da-DK' => true,
        'de-DE' => true,
        'el-GR' => false,
        'en-AU' => true,
        'en-CA' => false,
        'en-GB' => true,
        'en-US' => true,
        'es-ES' => true,
        'es-US' => true,
        'fi-FI' => false,
        'fr-CA' => true,
        'fr-FR' => true,
        'hu-HU' => false,
        'it-IT' => true,
        'ja-JP' => true,
        'nl-NL' => true,
        'pl-PL' => true,
        'pt-BR' => true,
        'pt-PT' => true,
        'ru-RU' => true,
        'sv-SE' => false,
        'zh-CN' => true
    );

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
     * Set text
     *
     * @param string $text Text to be played.
     *
     * @return Boorgeon_Plivo_CallSpeak
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
     * @param string $voice The voice to be used, can be MAN,WOMAN.
     * Defaults to WOMAN.
     *
     * @return Boorgeon_Plivo_CallSpeak
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
     * @param string $language The language to be used, see Supported voices and
     * languages below. Defaults to en-US.
     *
     * @return Boorgeon_Plivo_CallSpeak
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Get legs
     *
     * @return string
     */
    public function getLegs()
    {
        return $this->legs;
    }

    /**
     * Set legs
     *
     * @param string $legs The leg which to be used, can be aleg (current call)
     * , bleg (the other party during Dial),or both. Defaults to aleg
     *
     * @return Boorgeon_Plivo_CallSpeak
     */
    public function setLegs($legs)
    {
        $this->legs = $legs;
        return $this;
    }

    /**
     * Get loop
     *
     * @return boolean
     */
    public function getLoop()
    {
        return $this->loop;
    }

    /**
     * Set loop
     *
     * @param string $loop If set to true, play indefinitely. Defaults to false.
     *
     * @return Boorgeon_Plivo_CallSpeak
     */
    public function setLoop($loop)
    {
        $this->loop = $loop;
        return $this;
    }

    /**
     * Get mix
     *
     * @return boolean
     */
    public function getMix()
    {
        return $this->mix;
    }

    /**
     * Set loop
     *
     * @param string $mix If true, mixes sounds with current audio flow.
     * Defaults to true.
     *
     * @return Boorgeon_Plivo_CallSpeak
     */
    public function setMix($mix)
    {
        $this->mix = $mix;
        return $this;
    }

}
