<?php

/**
 * The <Hangup> element is used to end a call.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Hangup extends Boorgeon_Plivo_Response_Element
{

    /**
     * Get schedule
     *
     * @return integer
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Set schedule
     *
     * @param integer $schedule Used to schedule a call hangup. Should be
     * followed by an element such as <Speak>, otherwise the call will be
     * hung up immediately.
     * <br>
     * <b>Allowed Values : </b>integer > 0 (in seconds)
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_Hangup
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * Get reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set reason
     *
     * @param string $reason Used to specify reason of hangup
     * <br>
     * <b>Allowed Values : </b>rejected, busy
     * <br>
     * <b>Default Value : </b>none
     *
     * @return Boorgeon_Plivo_Response_Hangup
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

}
