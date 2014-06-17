<?php

/**
 * Play And Control Sounds During a Call
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_CallPlay extends Boorgeon_Plivo_Object
{

    /**
     * Get urls
     *
     * @return string
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Set urls
     *
     * @param string $urls A single URL or a list of comma separated URLs
     * pointing to an mp3 or wav file.
     *
     * @return Boorgeon_Plivo_CallPlay
     */
    public function setUrls($urls)
    {
        $this->urls = $urls;
        return $this;
    }

    /**
     * Get length
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set length
     *
     * @param string $length Maximum length in seconds to play.
     *
     * @return Boorgeon_Plivo_CallPlay
     */
    public function setLength($length)
    {
        $this->length = $length;
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
     * , bleg (the other party during Dial),or both. Defaults to aleg.
     *
     * @return Boorgeon_Plivo_CallPlay
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
     * @return Boorgeon_Plivo_CallPlay
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
     * @return Boorgeon_Plivo_CallPlay
     */
    public function setMix($mix)
    {
        $this->mix = $mix;
        return $this;
    }

}
