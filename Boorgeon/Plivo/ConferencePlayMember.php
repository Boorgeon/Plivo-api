<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_ConferencePlayMember extends Boorgeon_Plivo_Object
{

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param string $url URL of the sound file to be played.
     *
     * @return Boorgeon_Plivo_ConferencePlayMember
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

}
