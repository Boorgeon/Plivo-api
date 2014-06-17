<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_ConferenceMember extends Boorgeon_Plivo_Object
{

    /**
     * Get muted
     *
     * @return boolean
     */
    public function getMuted()
    {
        return $this->muted;
    }

    /**
     * Set muted
     *
     * @param boolean $muted
     *
     * @return Boorgeon_Plivo_ConferenceMember
     */
    public function setMuted($muted)
    {
        $this->muted = $muted;
        return $this;
    }

    /**
     * Get member id
     *
     * @return string
     */
    public function getMemberId()
    {
        return $this->member_id;
    }

    /**
     * Set member id
     *
     * @param string $member_id
     *
     * @return Boorgeon_Plivo_ConferenceMember
     */
    public function setMemberId($member_id)
    {
        $this->member_id = $member_id;
        return $this;
    }

    /**
     * Get deaf
     *
     * @return boolean
     */
    public function getDeaf()
    {
        return $this->deaf;
    }

    /**
     * Set deaf
     *
     * @param boolean $deaf
     *
     * @return Boorgeon_Plivo_ConferenceMember
     */
    public function setDeaf($deaf)
    {
        $this->deaf = $deaf;
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
     * @return Boorgeon_Plivo_ConferenceMember
     */
    public function setFrom($from)
    {
        $this->from = $from;
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
     * @return Boorgeon_Plivo_ConferenceMember
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
     * @param string $caller_name
     *
     * @return Boorgeon_Plivo_ConferenceMember
     */
    public function setCallerName($caller_name)
    {
        $this->caller_name = $caller_name;
        return $this;
    }

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
     * @return Boorgeon_Plivo_ConferenceMember
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;
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
     * @return Boorgeon_Plivo_ConferenceMember
     */
    public function setCallUuid($call_uuid)
    {
        $this->call_uuid = $call_uuid;
        return $this;
    }

    /**
     * Get join time
     *
     * @return string
     */
    public function getJoinTime()
    {
        return $this->join_time;
    }

    /**
     * Set join time
     *
     * @param string $join_time
     *
     * @return Boorgeon_Plivo_ConferenceMember
     */
    public function setJoinTime($join_time)
    {
        $this->join_time = $join_time;
        return $this;
    }

}
