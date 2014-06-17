<?php

/**
 * Get Live Call
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_LiveCall extends Boorgeon_Plivo_Object
{

    /**
     * Get direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set direction
     *
     * @param string $direction
     *
     * @return Boorgeon_Plivo_LiveCall
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
        return $this;
    }

    /**
     * Get from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set from
     *
     * @param string $from
     *
     * @return Boorgeon_Plivo_LiveCall
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Get call status
     *
     * @return string
     */
    public function getCallStatus()
    {
        return $this->call_status;
    }

    /**
     * Set call status
     *
     * @param string $call_status
     *
     * @return Boorgeon_Plivo_LiveCall
     */
    public function setCallStatus($call_status)
    {
        $this->call_status = $call_status;
        return $this;
    }

    /**
     * Get to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set to
     *
     * @param string $to
     *
     * @return Boorgeon_Plivo_LiveCall
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Get caller name
     *
     * @return string
     */
    public function getCallerName()
    {
        return $this->caller_name;
    }

    /**
     * Set caller name
     *
     * @param string $to
     *
     * @return Boorgeon_Plivo_LiveCall
     */
    public function setCallerName($caller_name)
    {
        $this->caller_name = $caller_name;
        return $this;
    }

    /**
     * Get call uuid
     *
     * @return string
     */
    public function getCallUuid()
    {
        return $this->call_uuid;
    }

    /**
     * Set call uuid
     *
     * @param string $call_uuid
     *
     * @return Boorgeon_Plivo_LiveCall
     */
    public function setCallUuid($call_uuid)
    {
        $this->call_uuid = $call_uuid;
        return $this;
    }

    /**
     * Get session start
     *
     * @return string
     */
    public function getSessionStart()
    {
        return $this->session_start;
    }

    /**
     * Set session start
     *
     * @param string $session_start
     *
     * @return Boorgeon_Plivo_LiveCall
     */
    public function setSessionStart($session_start)
    {
        $this->session_start = $session_start;
        return $this;
    }

}
