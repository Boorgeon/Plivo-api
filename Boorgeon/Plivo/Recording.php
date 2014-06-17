<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Recording extends Boorgeon_Plivo_Object
{

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
     * @return Boorgeon_Plivo_Recording
     */
    public function setCallUuid($call_uuid)
    {
        $this->call_uuid = $call_uuid;
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
     * @return Boorgeon_Plivo_Recording
     */
    public function setRecordingId($recording_id)
    {
        $this->recording_id = $recording_id;
        return $this;
    }

    /**
     * Get recording type
     *
     * @return string
     */
    public function getRecordingType()
    {
        return $this->recording_type;
    }

    /**
     * Set recording type
     *
     * @param string $recording_type
     *
     * @return Boorgeon_Plivo_Recording
     */
    public function setRecordingType($recording_type)
    {
        $this->recording_type = $recording_type;
        return $this;
    }

    /**
     * Get recording format
     *
     * @return string
     */
    public function getRecordingFormat()
    {
        return $this->recording_format;
    }

    /**
     * Set recording format
     *
     * @param string $recording_format
     *
     * @return Boorgeon_Plivo_Recording
     */
    public function setRecordingFormat($recording_format)
    {
        $this->recording_format = $recording_format;
        return $this;
    }

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
     * @return Boorgeon_Plivo_Recording
     */
    public function setConferenceName($conference_name)
    {
        $this->conference_name = $conference_name;
        return $this;
    }

    /**
     * Get recording url
     *
     * @return string
     */
    public function getRecordingUrl()
    {
        return $this->recording_url;
    }

    /**
     * Set recording url
     *
     * @param string $recording_url
     *
     * @return Boorgeon_Plivo_Recording
     */
    public function setRecordingUrl($recording_url)
    {
        $this->recording_url = $recording_url;
        return $this;
    }

    /**
     * Get resource uri
     *
     * @return string
     */
    public function getResourceUri()
    {
        return $this->resource_uri;
    }

    /**
     * Set resource uri
     *
     * @param string $resource_uri
     *
     * @return Boorgeon_Plivo_Recording
     */
    public function setResourceUri($resource_uri)
    {
        $this->resource_uri = $resource_uri;
        return $this;
    }

    /**
     * Get add time
     *
     * @return string
     */
    public function getAddTime()
    {
        return $this->add_time;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Boorgeon_Plivo_Recording
     */
    public function setAddTime($add_time)
    {
        $this->add_time = $add_time;
        return $this;
    }

    /**
     * Get recording start ms
     *
     * @return string
     */
    public function getRecordingStartMs()
    {
        return $this->recording_start_ms;
    }

    /**
     * Set recording start ms
     *
     * @param string $recording_start_ms
     *
     * @return Boorgeon_Plivo_Recording
     */
    public function setRecordingStartMs($recording_start_ms)
    {
        $this->recording_start_ms = $recording_start_ms;
        return $this;
    }

    /**
     * Get recording end ms
     *
     * @return string
     */
    public function getRecordingEndMs()
    {
        return $this->recording_end_ms;
    }

    /**
     * Set recording end ms
     *
     * @param string $recording_end_ms
     *
     * @return Boorgeon_Plivo_Recording
     */
    public function setRecordingEndMs($recording_end_ms)
    {
        $this->recording_end_ms = $recording_end_ms;
        return $this;
    }

    /**
     * Get recording duration ms
     *
     * @return string
     */
    public function getRecordingDurationMs()
    {
        return $this->recording_duration_ms;
    }

    /**
     * Set recording duration ms
     *
     * @param string $recording_duration_ms
     *
     * @return Boorgeon_Plivo_Recording
     */
    public function setRecordingDurationMs($recording_duration_ms)
    {
        $this->recording_duration_ms = $recording_duration_ms;
        return $this;
    }

    /**
     * List a Particular Recording
     *
     * @return Boorgeon_Plivo_Recording
     * @throws Boorgeon_Plivo_Exception
     */
    public function get()
    {
        if ($this->getRecordingId() == null) {
            throw new Boorgeon_Plivo_Exception('Recording Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_recording($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * List All Recordings
     *
     * @param Boorgeon_Plivo_Recordings $recordings
     *
     * @return Boorgeon_Plivo_Recordings
     */
    public function getAll(Boorgeon_Plivo_Recordings $recordings)
    {
        $params = $recordings->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_recordings($params);

        $response = $data['response'];

        $meta = new Boorgeon_Plivo_Meta();
        $meta->toObject($response['meta']);

        $objects = array();
        foreach ($response['objects'] as $array) {
            $recording = new Boorgeon_Plivo_Recording();
            $recording->toObject($array);

            $objects[] = $recording;
        }

        $recordings->setApiId($response['api_id']);
        $recordings->setMeta($meta);
        $recordings->setObjects($objects);

        return $recordings;
    }

}
