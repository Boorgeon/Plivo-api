<?php

/**
 * The <Play> element is used to play an audio file to the caller.
 * The audio file is obtained from a remote URL. Currently,
 * mp3 and wav file formats are supported.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Play extends Boorgeon_Plivo_Response_Element
{

    public function __construct($url)
    {
        parent::__construct();

        $this->setValue($url);
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
     * @param integer $loop Play the audio file repeatedly.
     *  Value set to 0, plays indefinitely.
     * <br>
     * <b>Allowed Values : </b>integer >= 0
     * <br>
     * <b>Default Value : </b>1
     *
     * @return Boorgeon_Plivo_Response_Play
     */
    public function setLoop($loop)
    {
        $this->loop = $loop;
        return $this;
    }

}
