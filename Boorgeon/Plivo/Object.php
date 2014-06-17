<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Object
{

    /**
     * Get array from object
     *
     * @param object $object
     *
     * @return array
     */
    public function toArray($object = null)
    {
        if (!$object) {
            $object = $this;
        }

        $json = json_encode($object);

        $params = json_decode($json, true);

        return $params;
    }

    /**
     * Get object from array
     *
     * @param array $array
     *
     * @return Boorgeon_Plivo_Object
     */
    public function toObject($array)
    {
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                $this->$key = $value;
            }
        }

        return $this;
    }

    /**
     * Get json from object
     *
     * @param object $object
     *
     * @return string
     */
    public function toJson($object = null)
    {
        if (!$object) {
            $object = $this;
        }

        $json = json_encode($object);

        return $json;
    }

    /**
     * Get error
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Set error
     *
     * @param string $error
     *
     * @return Boorgeon_Plivo_Object
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Boorgeon_Plivo_Object
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Get Api Id
     *
     * @return string
     */
    public function getApiId()
    {
        return $this->api_id;
    }

    /**
     * Set Api Id
     *
     * @param string $api_id
     *
     * @return Boorgeon_Plivo_Object
     */
    public function setApiId($api_id)
    {
        $this->api_id = $api_id;
        return $this;
    }

    /**
     * Get response status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set response status
     *
     * @param int $status
     *
     * @return Boorgeon_Plivo_Object
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function __get($name)
    {
        return isset($this->$name) ? $this->$name : null;
    }

}
