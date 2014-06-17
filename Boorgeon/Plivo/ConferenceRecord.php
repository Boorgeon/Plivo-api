<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_ConferenceRecord extends Boorgeon_Plivo_Object
{

    /**
     * Get file format
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->file_format;
    }

    /**
     * Set file format
     *
     * @param string $file_format The file format of the record can be of mp3
     * or wav format. Defaults to mp3 format.
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setFileFormat($file_format)
    {
        $this->file_format = $file_format;
        return $this;
    }

    /**
     * Get transcription type
     *
     * @return string
     */
    public function getTranscriptionType()
    {
        return $this->transcription_type;
    }

    /**
     * Set transcription type
     *
     * @param string $transcription_type The type of transcription required.
     * The following values are allowed:
     * <ul>
     * <li>auto - This is the default value. Transcription is completely
     * automated; turnaround time is about 5 minutes.</li>
     * <li>hybrid - Transcription is a combination of automated and human
     * verification processes; turnaround time is about 10-15 minutes.</li>
     * </ul>
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setTranscriptionType($transcription_type)
    {
        $this->transcription_type = $transcription_type;
        return $this;
    }

    /**
     * Get transcription url
     *
     * @return string
     */
    public function getTranscriptionUrl()
    {
        return $this->transcription_url;
    }

    /**
     * Set transcription url
     *
     * @param string $transcription_url The URL where the transcription
     * is available.
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setTranscriptionUrl($transcription_url)
    {
        $this->transcription_url = $transcription_url;
        return $this;
    }

    /**
     * Get transcription method
     *
     * @return string
     */
    public function getTranscriptionMethod()
    {
        return $this->transcription_method;
    }

    /**
     * Set transcription method
     *
     * @param string $transcription_method The method used to invoke the
     * transcription_url. Defaults to POST.
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setTranscriptionMethod($transcription_method)
    {
        $this->transcription_method = $transcription_method;
        return $this;
    }

    /**
     * Get callback url
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callback_url;
    }

    /**
     * Set callback url
     *
     * @param string $callback_url The URL invoked by the API when the
     * recording ends. The following parameters are sent to the callback_url:
     * <ul>
     * <li>api_id - the same API ID returned by the conference record API.
     * <li>record_url - the URL to access the recorded file.
     * <li>recording_id - recording ID of the recorded file.
     * <li>conference_name - the conference name recorded.
     * <li>recording_duration - duration in seconds of the recording.
     * <li>recording_duration_ms - duration in milliseconds of the recording.
     * <li>recording_start_ms - when the recording started (epoch time UTC) in
     * milliseconds.
     * <li>recording_end_ms - when the recording ended (epoch time UTC)
     * in milliseconds.
     * </ul>
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setCallbackUrl($callback_url)
    {
        $this->callback_url = $callback_url;
        return $this;
    }

    /**
     * Get callback method
     *
     * @return string
     */
    public function getCallbackMethod()
    {
        return $this->callback_method;
    }

    /**
     * Set callback method
     *
     * @param string $callback_method The method which is used to invoke the
     * callback_url URL. Defaults to POST.
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setCallbackMethod($callback_method)
    {
        $this->callback_method = $callback_method;
        return $this;
    }

    /**
     * Get recording id
     *
     * @return string
     */
    public function getRecordingId()
    {
        return $this->recording_id;
    }

    /**
     * Set recording id
     *
     * @param string $recording_id
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setRecordingId($recording_id)
    {
        $this->recording_id = $recording_id;
        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get record url
     *
     * @return string
     */
    public function getRecordUrl()
    {
        return $this->record_url;
    }

    /**
     * Set record url
     *
     * @param string $record_url
     *
     * @return Boorgeon_Plivo_ConferenceRecord
     */
    public function setRecordUrl($record_url)
    {
        $this->record_url = $record_url;
        return $this;
    }

}
