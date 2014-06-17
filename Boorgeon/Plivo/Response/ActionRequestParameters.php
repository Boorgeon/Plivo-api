<?php

/**
 * The following parameters are sent to the action URL after recording is complete.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_ActionRequestParameters extends Boorgeon_Plivo_Object
{

    /**
     * Get Record Url
     *
     * @return string
     */
    public function getRecordUrl()
    {
        return $this->RecordUrl;
    }

    /**
     * Set Record Url
     *
     * @param string $RecordUrl Complete path to the recorded file URL.
     * Only available if record is set to true.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setRecordUrl($RecordUrl)
    {
        $this->RecordUrl = $RecordUrl;
        return $this;
    }

    /**
     * Get Digits
     *
     * @return string
     */
    public function getDigits()
    {
        return $this->Digits;
    }

    /**
     * Set Digits
     *
     * @param string $Digits If set, the digits pressed to stop the record.
     * <br>
     * The digits the caller pressed, excluding the finishOnKey digit if used.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setDigits($Digits)
    {
        $this->Digits = $Digits;
        return $this;
    }

    /**
     * Get Recording Duration
     *
     * @return string
     */
    public function getRecordingDuration()
    {
        return $this->RecordingDuration;
    }

    /**
     * Set Recording Duration
     *
     * @param string $RecordingDuration Duration of recording in seconds.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setRecordingDuration($RecordingDuration)
    {
        $this->RecordingDuration = $RecordingDuration;
        return $this;
    }

    /**
     * Get Recording Duration Ms
     *
     * @return string
     */
    public function getRecordingDurationMs()
    {
        return $this->RecordingDurationMs;
    }

    /**
     * Set Recording Duration Ms
     *
     * @param string $RecordingDurationMs Duration of recording in milliseconds.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setRecordingDurationMs($RecordingDurationMs)
    {
        $this->RecordingDurationMs = $RecordingDurationMs;
        return $this;
    }

    /**
     * Get Recording Start Ms
     *
     * @return string
     */
    public function getRecordingStartMs()
    {
        return $this->RecordingStartMs;
    }

    /**
     * Set Recording Start Ms
     *
     * @param string $RecordingStartMs When the recording started
     * (epoch time UTC) in milliseconds.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setRecordingStartMs($RecordingStartMs)
    {
        $this->RecordingStartMs = $RecordingStartMs;
        return $this;
    }

    /**
     * Get Recording End Ms
     *
     * @return string
     */
    public function getRecordingEndMs()
    {
        return $this->RecordingEndMs;
    }

    /**
     * Set Recording End Ms
     *
     * @param string $RecordingEndMs When the recording ended (epoch time UTC)
     * in milliseconds.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setRecordingEndMs($RecordingEndMs)
    {
        $this->RecordingEndMs = $RecordingEndMs;
        return $this;
    }

    /**
     * Get Recording ID
     *
     * @return string
     */
    public function getRecordingID()
    {
        return $this->RecordingID;
    }

    /**
     * Set Recording ID
     *
     * @param string $RecordingID Recording ID of the file.
     * Only available if record is set to true.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setRecordingID($RecordingID)
    {
        $this->RecordingID = $RecordingID;
        return $this;
    }

    /**
     * Get Dial Ring Status
     *
     * @return string
     */
    public function getDialRingStatus()
    {
        return $this->DialRingStatus;
    }

    /**
     * Set Dial Ring Status
     *
     * @param string $DialRingStatus This indicates if the <Dial> attempt rang
     * or not. It can be true or false.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setDialRingStatus($DialRingStatus)
    {
        $this->DialRingStatus = $DialRingStatus;
        return $this;
    }

    /**
     * Get Dial Hangup Cause
     *
     * @return string
     */
    public function getDialHangupCause()
    {
        return $this->DialHangupCause;
    }

    /**
     * Set Dial Hangup Cause
     *
     * @param string $DialHangupCause The standard telephony hangup cause.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setDialHangupCause($DialHangupCause)
    {
        $this->DialHangupCause = $DialHangupCause;
        return $this;
    }

    /**
     * Get Dial Status
     *
     * @return string
     */
    public function getDialStatus()
    {
        return $this->DialStatus;
    }

    /**
     * Set Dial Status
     *
     * @param string $DialStatus Status of the dial. Can be completed, busy,
     * failed, timeout or no-answer.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setDialStatus($DialStatus)
    {
        $this->DialStatus = $DialStatus;
        return $this;
    }

    /**
     * Get Dial ALeg UUID
     *
     * @return string
     */
    public function getDialALegUUID()
    {
        return $this->DialALegUUID;
    }

    /**
     * Set Dial ALeg UUID
     *
     * @param string $DialALegUUID CallUUID of A leg.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setDialALegUUID($DialALegUUID)
    {
        $this->DialALegUUID = $DialALegUUID;
        return $this;
    }

    /**
     * Get Dial BLeg UUID
     *
     * @return string
     */
    public function getDialBLegUUID()
    {
        return $this->DialBLegUUID;
    }

    /**
     * Set Dial BLeg UUID
     *
     * @param string $DialBLegUUID CallUUID of B leg. Empty if nobody answers.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setDialBLegUUID($DialBLegUUID)
    {
        $this->DialBLegUUID = $DialBLegUUID;
        return $this;
    }

    /**
     * Get Conference Name
     *
     * @return string
     */
    public function getConferenceName()
    {
        return $this->ConferenceName;
    }

    /**
     * Set Conference Name
     *
     * @param string $ConferenceName The conference room name.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setConferenceName($ConferenceName)
    {
        $this->ConferenceName = $ConferenceName;
        return $this;
    }

    /**
     * Get Conference UUID
     *
     * @return string
     */
    public function getConferenceUUID()
    {
        return $this->ConferenceUUID;
    }

    /**
     * Set Conference UUID
     *
     * @param string $ConferenceUUID Unique ID of the conference.
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setConferenceUUID($ConferenceUUID)
    {
        $this->ConferenceUUID = $ConferenceUUID;
        return $this;
    }

    /**
     * Get Conference Member ID
     *
     * @return string
     */
    public function getConferenceMemberID()
    {
        return $this->ConferenceMemberID;
    }

    /**
     * Set Conference Member ID
     *
     * @param string $ConferenceMemberID Member ID in the conference
     *
     * @return Boorgeon_Plivo_Response_ActionRequestParameters
     */
    public function setConferenceMemberID($ConferenceMemberID)
    {
        $this->ConferenceMemberID = $ConferenceMemberID;
        return $this;
    }
public $Digits;

}
