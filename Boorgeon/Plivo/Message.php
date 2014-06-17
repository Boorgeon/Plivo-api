<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Message extends Boorgeon_Plivo_Object
{

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set src
     *
     * @param string $src The phone number to be used as the caller id
     * (with the country code). For e.g. a USA number, 15671234567.
     * If you're sending messages to U.S. and Canada, you need to use the
     * numbers you purchased with Plivo.
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setSrc($src)
    {
        $this->src = $src;
        return $this;
    }

    /**
     * Get dst
     *
     * @return string
     */
    public function getDst()
    {
        return $this->dst;
    }

    /**
     * Set dst
     *
     * @param string $dst The number to which the message needs to be sent.
     * Regular phone numbers must be prefixed with the country code but without
     * the ‘+’ sign. For e.g, a USA phone number would be, 15677654321, with '1'
     * denoting the country code.
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setDst($dst)
    {
        $this->dst = $dst;
        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set text
     *
     * @param string $text The text to send encoded in Unicode UTF-8.
     * The API accepts up to 1000 bytes of UTF-8 encoded text in a single API
     * request. The text will be automatically split into multiple parts and
     * sent if it will not fit into a single SMS. See notes below for more details.
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $type The type of message. Should be 'sms' for a text
     * message. Defaults to 'sms'.
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @param string $url The URL to which with the status of the message is
     * sent. The following parameters are sent to the URL:
     * <ul>
     * <li><b>To</b> - receiver number of the SMS</li>
     * <li><b>From</b> - sender number of the SMS</li>
     * <li><b>Status</b> - status value of the message, is one of "queued",
     * "sent", "failed", "delivered", "undelivered" or "rejected"</li>
     * <li><b>MessageUUID</b> - a unique ID for the message</li>
     * <li><b>ParentMessageUUID</b> - ID of the first part
     * (see notes about long SMS below)</li>
     * <li><b>PartInfo</b> - Specifies sequence information (useful for split
     * parts in a long SMS; see notes about long SMS below)</li>
     * </ul>
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set method
     *
     * @param string $method The method used to call the url. Defaults to POST.
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Get log
     *
     * @return boolean
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set log
     *
     * @param boolean $log If set to false, the content of this message will
     * not be logged on the Plivo infrastructure and the dst value will be
     * masked. (e.g., 141XXXXX528) Defaults to true.
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setLog($log)
    {
        $this->log = $log;
        return $this;
    }

    /**
     * Get total rate
     *
     * @return string
     */
    public function getTotalRate()
    {
        return $this->total_rate;
    }

    /**
     * Set total rate
     *
     * @param string $total_rate
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setTotalRate($total_rate)
    {
        $this->total_rate = $total_rate;
        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set units
     *
     * @param string $units
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }

    /**
     * Get cloud rate
     *
     * @return string
     */
    public function getCloudRate()
    {
        return $this->cloud_rate;
    }

    /**
     * Set cloud rate
     *
     * @param string $cloud_rate
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setCloudRate($cloud_rate)
    {
        $this->cloud_rate = $cloud_rate;
        return $this;
    }

    /**
     * Get carrier rate
     *
     * @return string
     */
    public function getCarrierRate()
    {
        return $this->carrier_rate;
    }

    /**
     * Set carrier rate
     *
     * @param string $carrier_rate
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setCarrierRate($carrier_rate)
    {
        $this->carrier_rate = $carrier_rate;
        return $this;
    }

    /**
     * Get message direction
     *
     * @return string
     */
    public function getMessageDirection()
    {
        return $this->message_direction;
    }

    /**
     * Set message direction
     *
     * @param string $message_direction
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setMessageDirection($message_direction)
    {
        $this->message_direction = $message_direction;
        return $this;
    }

    /**
     * Get to number
     *
     * @return string
     */
    public function getToNumber()
    {
        return $this->to_number;
    }

    /**
     * Set to number
     *
     * @param string $to_number
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setToNumber($to_number)
    {
        $this->to_number = $to_number;
        return $this;
    }

    /**
     * Get message state
     *
     * @return string
     */
    public function getMessageState()
    {
        return $this->message_state;
    }

    /**
     * Set message state
     *
     * @param string $message_state
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setMessageState($message_state)
    {
        $this->message_state = $message_state;
        return $this;
    }

    /**
     * Get total amount
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * Set total amount
     *
     * @param string $total_amount
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setTotalAmount($total_amount)
    {
        $this->total_amount = $total_amount;
        return $this;
    }

    /**
     * Get from number
     *
     * @return string
     */
    public function getFromNumber()
    {
        return $this->from_number;
    }

    /**
     * Set from number
     *
     * @param string $from_number
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setFromNumber($from_number)
    {
        $this->from_number = $from_number;
        return $this;
    }

    /**
     * Get message uuid
     *
     * @return array
     */
    public function getMessageUuid()
    {
        return $this->message_uuid;
    }

    /**
     * Set message uuid
     *
     * @param array $message_uuid
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setMessageUuid($message_uuid)
    {
        $this->message_uuid = $message_uuid;
        return $this;
    }

    /**
     * Get message time
     *
     * @return string
     */
    public function getMessageTime()
    {
        return $this->message_time;
    }

    /**
     * Set message time
     *
     * @param string $message_time
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setMessageTime($message_time)
    {
        $this->message_time = $message_time;
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
     * @return Boorgeon_Plivo_Message
     */
    public function setResourceUri($resource_uri)
    {
        $this->resource_uri = $resource_uri;
        return $this;
    }

    /**
     * Get message type
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * Set message type
     *
     * @param string $message_type
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setMessageType($message_type)
    {
        $this->message_type = $message_type;
        return $this;
    }

    /**
     * Get record id
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * Set record id
     *
     * @param string $record_id
     *
     * @return Boorgeon_Plivo_Message
     */
    public function setRecordId($record_id)
    {
        $this->record_id = $record_id;
        return $this;
    }

    /**
     * Send a message.
     *
     * @return Boorgeon_Plivo_Message
     * @throws Boorgeon_Plivo_Exception
     */
    public function send()
    {
        if ($this->getSrc() == null) {
            throw new Boorgeon_Plivo_Exception('Src cannot be null');
        }

        if ($this->getDst() == null) {
            throw new Boorgeon_Plivo_Exception('Dst cannot be null');
        }

        if ($this->getText() == null) {
            throw new Boorgeon_Plivo_Exception('Text cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->send_message($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Fetches a specified message.
     *
     * @return Boorgeon_Plivo_Message
     * @throws Boorgeon_Plivo_Exception
     */
    public function get()
    {
        if ($this->getRecordId() == null) {
            throw new Boorgeon_Plivo_Exception('Record Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_message($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Fetches all messages.
     *
     * @param Boorgeon_Plivo_Messages $messages
     *
     * @return Boorgeon_Plivo_Messages
     */
    public function getAll(Boorgeon_Plivo_Messages $messages)
    {
        $params = $messages->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_messages($params);

        $response = $data['response'];

        $meta = new Boorgeon_Plivo_Meta();
        $meta->toObject($response['meta']);

        $objects = array();
        foreach ($response['objects'] as $array) {
            $message = new Boorgeon_Plivo_Message();
            $message->toObject($array);

            $objects[] = $message;
        }

        $messages->setApiId($response['api_id']);
        $messages->setMeta($meta);
        $messages->setObjects($objects);

        return $messages;
    }

}
