<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_ConferenceMembers extends Boorgeon_Plivo_Object
{

    /**
     * Get members
     *
     * @return array
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Add member id
     *
     * @param mixed $member
     *
     * @return Boorgeon_Plivo_ConferenceMembers
     */
    public function addMember($member)
    {
        if ($member instanceof Boorgeon_Plivo_ConferenceMember) {
            $this->members[] = $member->getMemberId();
        } elseif (is_string($member)) {
            $this->members[] = $member;
        }

        return $this;
    }

    /**
     * Remove all members
     *
     * @return Boorgeon_Plivo_ConferenceMembers
     */
    public function clear()
    {
        $this->members[] = array();
        return $this;
    }

}
