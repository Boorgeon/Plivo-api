<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_ConferenceKickMembers extends Boorgeon_Plivo_Object
{

    /**
     * Get conference name
     *
     * @return string
     */
    public function getConferenceName()
    {
        return $this->conference_name;
    }

    /**
     * Set conference name
     *
     * @param string $conference_name
     *
     * @return Boorgeon_Plivo_ConferenceKickMembers
     */
    public function setConferenceName($conference_name)
    {
        $this->conference_name = $conference_name;
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
     * @param string $member_id Single member id: The member specified by the 
     * {member_id} is kicked from the conference.
     * <br>
     * Comma separated list of member IDs: Members whose IDs are specified in 
     * the comma separated list are kicked from the conference.
     * <br>
     * 'all': All members are kicked from the conference
     *
     * @return Boorgeon_Plivo_ConferenceKickMembers
     */
    public function setMemberId($member_id)
    {
        $this->member_id = $member_id;
        return $this;
    }

}
