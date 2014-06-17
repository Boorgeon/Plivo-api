<?php

/**
 * The <Wait> element waits silently for a specified number of seconds.
 * If <Wait> is the first element in a XML document, Plivo will wait the
 * specified number of seconds before picking up the call.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Wait extends Boorgeon_Plivo_Response_Element
{

    /**
     * Get length
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set length
     *
     * @param integer $length Time to wait in seconds
     * <br>
     * <b>Allowed Values : </b>integer > 0
     * <br>
     * <b>Default Value : </b>1
     *
     * @return Boorgeon_Plivo_Response_Wait
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Get silence
     *
     * @return boolean
     */
    public function getSilence()
    {
        return $this->silence;
    }

    /**
     * Set silence
     *
     * @param boolean $silence When silence is set to true, if no voice or sound
     * is detected for minSilence milliseconds, end the wait and continue to
     * the next element in the XML immediately (effectively cutting the wait
     * for length seconds short). When silence is set to false, wait for the
     * full period of length seconds, regardless of the presence of sound/voice
     * or the value of minSilence.
     * <br>
     * <b>Allowed Values : </b>true, false
     * <br>
     * <b>Default Value : </b>false
     *
     * @return Boorgeon_Plivo_Response_Wait
     */
    public function setSilence($silence)
    {
        $this->silence = $silence;
        return $this;
    }

    /**
     * Get min Silence
     *
     * @return integer
     */
    public function getMinSilence()
    {
        return $this->minSilence;
    }

    /**
     * Set min Silence
     *
     * @param integer $minSilence Proceed to next element after the first digit
     * is sent.
     * <br>
     * <b>Allowed Values : </b>integer > 0
     * <br>
     * <b>Default Value : </b>2000
     *
     * @return Boorgeon_Plivo_Response_Wait
     */
    public function setMinSilence($minSilence)
    {
        $this->minSilence = $minSilence;
        return $this;
    }

    /**
     * Get beep
     *
     * @return string
     */
    public function getBeep()
    {
        return $this->beep;
    }

    /**
     * Set beep
     *
     * @param string $beep
     *
     * @return Boorgeon_Plivo_Response_Wait
     */
    public function setBeep($beep)
    {
        $this->beep = $beep;
        return $this;
    }

}
