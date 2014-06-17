<?php

/**
 * The following parameters are sent to the callback URL if callbackUrl is specified.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_CallbackUrlRequestParameters extends Boorgeon_Plivo_Object
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
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setRecordUrl($RecordUrl)
    {
        $this->RecordUrl = $RecordUrl;
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
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
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
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
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
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
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
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
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
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setRecordingID($RecordingID)
    {
        $this->RecordingID = $RecordingID;
        return $this;
    }

    /**
     * Get Dial Action
     *
     * @return string
     */
    public function getDialAction()
    {
        return $this->DialAction;
    }

    /**
     * Set Dial Action
     *
     * @param string $DialAction answer or hangup or digits
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialAction($DialAction)
    {
        $this->DialAction = $DialAction;
        return $this;
    }

    /**
     * Get Dial BLeg Status
     *
     * @return string
     */
    public function getDialBLegStatus()
    {
        return $this->DialBLegStatus;
    }

    /**
     * Set Dial BLeg Status
     *
     * @param string $DialBLegStatus answer or hangup.
     * This indicates if B leg answered or hung up.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialBLegStatus($DialBLegStatus)
    {
        $this->DialBLegStatus = $DialBLegStatus;
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
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
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
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialBLegUUID($DialBLegUUID)
    {
        $this->DialBLegUUID = $DialBLegUUID;
        return $this;
    }

    /**
     * Get Dial Digits Match
     *
     * @return string
     */
    public function getDialDigitsMatch()
    {
        return $this->DialDigitsMatch;
    }

    /**
     * Set Dial Digits Match
     *
     * @param string $DialDigitsMatch The digits pressed by A leg and matching
     * one digits combination set in digitsMatch attribute.
     * Only available when DialAction is set to digits.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialDigitsMatch($DialDigitsMatch)
    {
        $this->DialDigitsMatch = $DialDigitsMatch;
        return $this;
    }

    /**
     * Get Dial BLeg Hangup Cause
     *
     * @return string
     */
    public function getDialBLegHangupCause()
    {
        return $this->DialBLegHangupCause;
    }

    /**
     * Set Dial BLeg Hangup Cause
     *
     * @param string $DialBLegHangupCause Dial hangup cause for B leg.
     * Only available when DialAction is set to hangup.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialBLegHangupCause($DialBLegHangupCause)
    {
        $this->DialBLegHangupCause = $DialBLegHangupCause;
        return $this;
    }

    /**
     * Get Dial BLeg Duration
     *
     * @return string
     */
    public function getDialBLegDuration()
    {
        return $this->DialBLegDuration;
    }

    /**
     * Set Dial BLeg Duration
     *
     * @param string $DialBLegDuration Dial duration in seconds from B leg.
     * Only available when DialAction is set to hangup.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialBLegDuration($DialBLegDuration)
    {
        $this->DialBLegDuration = $DialBLegDuration;
        return $this;
    }

    /**
     * Get Dial BLeg Bill Duration
     *
     * @return string
     */
    public function getDialBLegBillDuration()
    {
        return $this->DialBLegBillDuration;
    }

    /**
     * Set Dial BLeg Bill Duration
     *
     * @param string $DialBLegBillDuration Dial duration in seconds billed from B leg.
     * Only available when DialAction is set to hangup.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialBLegBillDuration($DialBLegBillDuration)
    {
        $this->DialBLegBillDuration = $DialBLegBillDuration;
        return $this;
    }

    /**
     * Get Dial BLeg From
     *
     * @return string
     */
    public function getDialBLegFrom()
    {
        return $this->DialBLegFrom;
    }

    /**
     * Set Dial BLeg From
     *
     * @param string $DialBLegFrom Dial caller number or SIP endpoint for B leg.
     * Only available when DialAction is set to answer, digits or hangup.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialBLegFrom($DialBLegFrom)
    {
        $this->DialBLegFrom = $DialBLegFrom;
        return $this;
    }

    /**
     * Get Dial BLeg To
     *
     * @return string
     */
    public function getDialBLegTo()
    {
        return $this->DialBLegTo;
    }

    /**
     * Set Dial BLeg To
     *
     * @param string $DialBLegTo Dial called number or SIP endpoint for B leg.
     * Only available when DialAction is set to answer, digits or hangup.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setDialBLegTo($DialBLegTo)
    {
        $this->DialBLegTo = $DialBLegTo;
        return $this;
    }

    /**
     * Get Conference Action
     *
     * @return string
     */
    public function getConferenceAction()
    {
        return $this->ConferenceAction;
    }

    /**
     * Set Conference Action
     *
     * @param string $ConferenceAction ‘enter’ when user enters the conference,
     * ‘exit’ when user leaves the conference, ‘digits’ when user presses
     * matching digits ‘floor’if user is the floor holder in the conference
     * ‘record’if conference has been recorded using record attribute.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setConferenceAction($ConferenceAction)
    {
        $this->ConferenceAction = $ConferenceAction;
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
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
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
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
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
     * @param string $ConferenceMemberID ID of call in the conference.
     * (Not present if ConferenceAction is ‘record’)
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setConferenceMemberID($ConferenceMemberID)
    {
        $this->ConferenceMemberID = $ConferenceMemberID;
        return $this;
    }

    /**
     * Get Call UUID
     *
     * @return string
     */
    public function getCallUUID()
    {
        return $this->CallUUID;
    }

    /**
     * Set Call UUID
     *
     * @param string $CallUUID Unique identifier for this call.
     * (Not present if ConferenceAction is ‘record’)
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setCallUUID($CallUUID)
    {
        $this->CallUUID = $CallUUID;
        return $this;
    }

    /**
     * Get Conference Digits Match
     *
     * @return string
     */
    public function getConferenceDigitsMatch()
    {
        return $this->ConferenceDigitsMatch;
    }

    /**
     * Set Conference Digits Match
     *
     * @param string $ConferenceDigitsMatch Sent if ConferenceAction is ‘digits’.
     * The digits pattern matching when call has pressed digits.
     *
     * @return Boorgeon_Plivo_Response_CallbackUrlRequestParameters
     */
    public function setConferenceDigitsMatch($ConferenceDigitsMatch)
    {
        $this->ConferenceDigitsMatch = $ConferenceDigitsMatch;
        return $this;
    }

}
