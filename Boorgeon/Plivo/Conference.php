<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Conference extends Boorgeon_Plivo_Object
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
     * @return Boorgeon_Plivo_Conference
     */
    public function setConferenceName($conference_name)
    {
        $this->conference_name = $conference_name;
        return $this;
    }

    /**
     * Get conference run time
     *
     * @return string
     */
    public function getConferenceRunTime()
    {
        return $this->conference_run_time;
    }

    /**
     * Set conference run time
     *
     * @param string $conference_run_time
     *
     * @return Boorgeon_Plivo_Conference
     */
    public function setConferenceRunTime($conference_run_time)
    {
        $this->conference_run_time = $conference_run_time;
        return $this;
    }

    /**
     * Get conference member count
     *
     * @return string
     */
    public function getConferenceMemberCount()
    {
        return $this->conference_member_count;
    }

    /**
     * Set conference member count
     *
     * @param string $conference_member_count
     *
     * @return Boorgeon_Plivo_Conference
     */
    public function setConferenceMemberCount($conference_member_count)
    {
        $this->conference_member_count = $conference_member_count;
        return $this;
    }

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
     * Set members
     *
     * @param array $members
     *
     * @return Boorgeon_Plivo_Conference
     */
    public function setMembers($members)
    {
        $this->members = $members;
        return $this;
    }

    /**
     * Retrieves details of a particular conference.
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function get()
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_live_conference($params);

        $response = $data['response'];

        $this->toObject($response);

        if (isset($response['members'])) {
            $members = array();
            foreach ($response['members'] as $array) {
                $member = new Boorgeon_Plivo_ConferenceMember();
                $member->toObject($array);

                $members[] = $member;
            }

            $this->setMembers($members);
        }

        return $this;
    }

    /**
     * Retrieves list of all conferences.
     *
     * @return Boorgeon_Plivo_Conferences
     */
    public function getAll()
    {
        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_live_conferences();

        $response = $data['response'];

        $conferences = new Boorgeon_Plivo_Conferences();
        $conferences->toObject($response);

        return $conferences;
    }

    /**
     * Hangs up a particular conference.
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function hangup()
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->hangup_conference($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Hangs up all conferences.
     *
     * @return Boorgeon_Plivo_Conference
     */
    public function hangupAll()
    {
        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->hangup_all_conferences();

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Make Member(s) Deaf.
     *
     * @param Boorgeon_Plivo_ConferenceMembers $conferenceMembers
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function disableHearingMembers(Boorgeon_Plivo_ConferenceMembers $conferenceMembers)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $members = implode(',', $conferenceMembers->getMembers());

        $params = array_merge($this->toArray(), array('member_id' => $members));

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->deaf_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Enable Hearing For Member(s).
     *
     * @param Boorgeon_Plivo_ConferenceMembers $conferenceMembers
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function enableHearingMembers(Boorgeon_Plivo_ConferenceMembers $conferenceMembers)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $members = implode(',', $conferenceMembers->getMembers());

        $params = array_merge($this->toArray(), array('member_id' => $members));

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->undeaf_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Hangs up member.
     *
     * @param Boorgeon_Plivo_ConferenceMember $conferenceMember
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function hangupMember(Boorgeon_Plivo_ConferenceMember $conferenceMember)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        if ($conferenceMember->getMemberId() == null) {
            throw new Boorgeon_Plivo_Exception('Member Id cannot be null');
        }

        $params = array_merge($this->toArray(), $conferenceMember->toArray());

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->hangup_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Kicks member(s).
     *
     * @param Boorgeon_Plivo_ConferenceMembers $conferenceMembers
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function kickMembers(Boorgeon_Plivo_ConferenceMembers $conferenceMembers)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $members = implode(',', $conferenceMembers->getMembers());

        $params = array_merge($this->toArray(), array('member_id' => $members));

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->kick_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Mutes member(s).
     *
     * @param Boorgeon_Plivo_ConferenceMembers $conferenceMembers
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function muteMembers(Boorgeon_Plivo_ConferenceMembers $conferenceMembers)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $members = implode(',', $conferenceMembers->getMembers());

        $params = array_merge($this->toArray(), array('member_id' => $members));

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->mute_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Starts playing sound to member(s).
     *
     * @param Boorgeon_Plivo_ConferenceMembers $conferenceMembers
     *
     * @param Boorgeon_Plivo_ConferencePlayMember $conferencePlayMember
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function play(Boorgeon_Plivo_ConferenceMembers $conferenceMembers, Boorgeon_Plivo_ConferencePlayMember $conferencePlayMember)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        if ($conferencePlayMember->getUrl() == null) {
            throw new Boorgeon_Plivo_Exception('URL cannot be null');
        }

        $members = implode(',', $conferenceMembers->getMembers());

        $params = array_merge(
                $this->toArray(), array('member_id' => $members), $conferencePlayMember->toArray()
        );

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->play_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Records a conference.
     *
     * @param Boorgeon_Plivo_ConferenceRecord $conferenceRecord
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     * @throws Boorgeon_Plivo_Exception
     */
    public function record(Boorgeon_Plivo_ConferenceRecord $conferenceRecord)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $params = array_merge($this->toArray(), $conferenceRecord->toArray());

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->record_conference($params);

        $response = $data['response'];

        $conferenceRecord->toObject($response);

        return $conferenceRecord;
    }

    /**
     * Cancels a conference recording.
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function stopRecording()
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->stop_record_conference($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Makes member(s) listen to a speech. 
     *
     * @param Boorgeon_Plivo_ConferenceMembers $conferenceMembers
     *
     * @param Boorgeon_Plivo_ConferenceSpeakMember $conferenceSpeakMember
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function speak(Boorgeon_Plivo_ConferenceMembers $conferenceMembers, Boorgeon_Plivo_ConferenceSpeakMember $conferenceSpeakMember)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        if ($conferenceSpeakMember->getText() == null) {
            throw new Boorgeon_Plivo_Exception('Text cannot be null');
        }

        $members = implode(',', $conferenceMembers->getMembers());

        $params = array_merge(
                $this->toArray(), array('member_id' => $members), $conferenceSpeakMember->toArray()
        );

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->speak_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Stops playing sound to member(s).
     *
     * @param Boorgeon_Plivo_ConferenceMembers $conferenceMembers
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function stopPlaying(Boorgeon_Plivo_ConferenceMembers $conferenceMembers)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $members = implode(',', $conferenceMembers->getMembers());

        $params = array_merge($this->toArray(), array('member_id' => $members));

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->stop_play_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Unmutes member(s).
     *
     * @param Boorgeon_Plivo_ConferenceMembers $conferenceMembers
     *
     * @return Boorgeon_Plivo_Conference
     * @throws Boorgeon_Plivo_Exception
     */
    public function unmuteMembers(Boorgeon_Plivo_ConferenceMembers $conferenceMembers)
    {
        if ($this->getConferenceName() == null) {
            throw new Boorgeon_Plivo_Exception('Conference name cannot be null');
        }

        $members = implode(',', $conferenceMembers->getMembers());

        $params = array_merge($this->toArray(), array('member_id' => $members));

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->unmute_member($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

}
