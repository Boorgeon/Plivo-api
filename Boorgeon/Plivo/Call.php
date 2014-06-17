<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Call extends Boorgeon_Plivo_Object
{

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
     * @param string $from The phone number to be used as the caller id
     * (with the country code).For e.g, a USA caller id number could be,
     * 15677654321, with '1' for the country code.
     *
     * @return Boorgeon_Plivo_Call
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
     * @param string $to The regular number(s) or sip endpoint(s) to call.
     * Regular number must be prefixed with country code but without the ‘+’
     * sign). For e.g, to dial a number in the USA, the number could be,
     * 15677654321, with '1' for the country code. Multiple numbers can be sent
     * by using a delimiter. For e.g. 15677654321<12077657621<12047657621.
     * Sip endpoints must be prefixed with 'sip:'
     * E.g., sip:john1234@phone.plivo.com.
     * To make bulk calls, the delimiter '<' is used.
     * For eg. 15677654321<15673464321<sip:john1234@phone.plivo.com Yes,
     * you can mix regular numbers and sip endpoints !
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * Get answer url
     *
     * @return string
     */
    public function getAnswerUrl()
    {
        return $this->answer_url;
    }

    /**
     * Set answer url
     *
     * @param string $answer_url The URL invoked by Plivo when the outbound
     * call is answered.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setAnswerUrl($answer_url)
    {
        $this->answer_url = $answer_url;
        return $this;
    }

    /**
     * Get answer method
     *
     * @return string
     */
    public function getAnswerMethod()
    {
        return $this->answer_method;
    }

    /**
     * Set answer method
     *
     * @param string $answer_method The method used to call the answer_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setAnswerMethod($answer_method)
    {
        $this->answer_method = $answer_method;
        return $this;
    }

    /**
     * Get ring url
     *
     * @return string
     */
    public function getRingUrl()
    {
        return $this->ring_url;
    }

    /**
     * Set ring url
     *
     * @param string $ring_url The URL that is notified by Plivo when the call
     * is ringing. Defaults not set.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setRingUrl($ring_url)
    {
        $this->ring_url = $ring_url;
        return $this;
    }

    /**
     * Get ring method
     *
     * @return string
     */
    public function getRingMethod()
    {
        return $this->ring_method;
    }

    /**
     * Set ring method
     *
     * @param string $ring_method The method used to call the ring_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setRingMethod($ring_method)
    {
        $this->ring_method = $ring_method;
        return $this;
    }

    /**
     * Get hangup url
     *
     * @return string
     */
    public function getHangupUrl()
    {
        return $this->hangup_url;
    }

    /**
     * Set hangup url
     *
     * @param string $hangup_url The URL that is notified by Plivo when the
     * call hangs up. Defaults to answer_url.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setHangupUrl($hangup_url)
    {
        $this->hangup_url = $hangup_url;
        return $this;
    }

    /**
     * Get hangup method
     *
     * @return string
     */
    public function getHangupMethod()
    {
        return $this->hangup_method;
    }

    /**
     * Set hangup method
     *
     * @param string $hangup_method The method used to call the hangup_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setHangupMethod($hangup_method)
    {
        $this->hangup_method = $hangup_method;
        return $this;
    }

    /**
     * Get fallback url
     *
     * @return string
     */
    public function getFallbackUrl()
    {
        return $this->fallback_url;
    }

    /**
     * Set fallback url
     *
     * @param string $fallback_url Invoked by Plivo only if answer_url is
     * unavailable or the XML response is invalid. Should contain a XML response.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setFallbackUrl($fallback_url)
    {
        $this->fallback_url = $fallback_url;
        return $this;
    }

    /**
     * Get fallback method
     *
     * @return string
     */
    public function getFallbackMethod()
    {
        return $this->fallback_method;
    }

    /**
     * Set fallback method
     *
     * @param string $fallback_method The method used to call the fallback_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setFallbackMethod($fallback_method)
    {
        $this->fallback_method = $fallback_method;
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
     * @param string $caller_name Caller name to use with the call.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setCallerName($caller_name)
    {
        $this->caller_name = $caller_name;
        return $this;
    }

    /**
     * Get send digits
     *
     * @return string
     */
    public function getSendDigits()
    {
        return $this->send_digits;
    }

    /**
     * Set send digits
     *
     * @param string $send_digits Plivo plays DTMF tones when the call is
     * answered. This is useful when dialing a phone number and an extension.
     * Plivo will dial the number, and when the automated system picks up,
     * sends the DTMF tones to connect to the extension. E.g. If you want to
     * dial the 2410 extension after the call is connected, and you want to
     * wait for a few seconds before sending the extension, add a few leading
     * 'w' characters. Each 'w' character waits 0.5 second before sending a
     * digit. Each 'W' character waits 1 second before sending a digit. You can
     * also add the tone duration in ms by appending @duration after the string
     * (default duration is 2000 ms). Eg. 1w2w3@1000 See the DTMF API for
     * additional information.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setSendDigits($send_digits)
    {
        $this->send_digits = $send_digits;
        return $this;
    }

    /**
     * Get send on preanswer
     *
     * @return bool
     */
    public function getSendOnPreanswer()
    {
        return $this->send_on_preanswer;
    }

    /**
     * Set send on preanswer
     *
     * @param bool $send_on_preanswer If set to true and send_digits is also
     * set, digits are sent when the call is in preanswer state.
     * Defaults to false.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setSendOnPreanswer($send_on_preanswer)
    {
        $this->send_on_preanswer = $send_on_preanswer;
        return $this;
    }

    /**
     * Get time limit
     *
     * @return int
     */
    public function getTimeLimit()
    {
        return $this->time_limit;
    }

    /**
     * Set time limit
     *
     * @param int $time_limit Schedules the call for hangup at a specified
     * time after the call is answered. Value should be an integer > 0(in seconds).
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setTimeLimit($time_limit)
    {
        $this->time_limit = $time_limit;
        return $this;
    }

    /**
     * Get hangup on ring
     *
     * @return int
     */
    public function getHangupOnRing()
    {
        return $this->hangup_on_ring;
    }

    /**
     * Set hangup on ring
     *
     * @param int $hangup_on_ring Schedules the call for hangup at a specified
     * time after the call starts ringing. Value should be an integer >= 0 (in seconds).
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setHangupOnRing($hangup_on_ring)
    {
        $this->hangup_on_ring = $hangup_on_ring;
        return $this;
    }

    /**
     * Get machine detection
     *
     * @return string
     */
    public function getMachineDetection()
    {
        return $this->machine_detection;
    }

    /**
     * Set machine detection
     *
     * @param string $machine_detection Used to detect if the call has been
     * answered by a machine. The valid values are true and hangup.
     * Default time to analyze is 5000 milliseconds (or 5 seconds). You can
     * change it with the machine_detection_time parameter. Note that no XML is
     * processed during the analysis phase. If a machine is detected during the
     * call and machine_detection is set to true, the Machine parameter will be
     * set to true and will be sent to the answer_url, hangup_url, or any other
     * URL that is invoked by the call. If a machine is detected during the
     * call and machine_detection is set to hangup, the call hangs up
     * immediately and a request is made to the hangup_url with the Machine
     * parameter set to true
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setMachineDetection($machine_detection)
    {
        $this->machine_detection = $machine_detection;
        return $this;
    }

    /**
     * Get machine detection time
     *
     * @return int
     */
    public function getMachineDetectionTime()
    {
        return $this->machine_detection_time;
    }

    /**
     * Set machine detection time
     *
     * @param string $machine_detection_time Time allotted to analyze if the
     * call has been answered by a machine. It should be an integer >= 2000
     * and <= 10000 and the unit is ms. The default value is 5000 ms.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setMachineDetectionTime($machine_detection_time)
    {
        $this->machine_detection_time = $machine_detection_time;
        return $this;
    }

    /**
     * sip headers
     *
     * @return string
     */
    public function getSipHeaders()
    {
        return $this->sip_headers;
    }

    /**
     * Set sip headers
     *
     * @param string $sip_headers List of SIP headers in the form of
     * 'key=value' pairs, separated by commas.
     * E.g. head1=val1,head2=val2,head3=val3,...,headN=valN. The SIP headers
     * are always prefixed with X-PH-. The SIP headers are present for every
     * HTTP request made by the outbound call. Only [A-Z], [a-z] and [0-9]
     * characters are allowed for the SIP headers key and value. Additionally,
     * the '%' character is also allowed for the SIP headers value so that you
     * can encode this value in the URL.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setSipHeaders($sip_headers)
    {
        $this->sip_headers = $sip_headers;
        return $this;
    }

    /**
     * Get ring timeout
     *
     * @return int
     */
    public function getRingTimeout()
    {
        return $this->ring_timeout;
    }

    /**
     * Set ring timeout
     *
     * @param string $ring_timeout Determines the time in seconds the call
     * should ring. If the call is not answered within the ring_timeout value
     * or the default value of 120 s, it is canceled.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setRingTimeout($ring_timeout)
    {
        $this->ring_timeout = $ring_timeout;
        return $this;
    }

    /**
     * Get request uuid
     *
     * @return string
     */
    public function getRequestUuid()
    {
        return $this->request_uuid;
    }

    /**
     * Set request uuid
     *
     * @param string $request_uuid
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setRequestUuid($request_uuid)
    {
        $this->request_uuid = $request_uuid;
        return $this;
    }

    /**
     * Get app id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Set app id
     *
     * @param string $app_id
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
        return $this;
    }

    /**
     * Get call duration
     *
     * @return int
     */
    public function getCallDuration()
    {
        return $this->call_duration;
    }

    /**
     * Set call duration
     *
     * @param int $call_duration
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setCallDuration($call_duration)
    {
        $this->call_duration = $call_duration;
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
     * @return Boorgeon_Plivo_Call
     */
    public function setTotalAmount($total_amount)
    {
        $this->total_amount = $total_amount;
        return $this;
    }

    /**
     * Get parent call uuid
     *
     * @return string
     */
    public function getParentCallUuid()
    {
        return $this->parent_call_uuid;
    }

    /**
     * Set parent call uuid
     *
     * @param string $parent_call_uuid
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setParentCallUuid($parent_call_uuid)
    {
        $this->parent_call_uuid = $parent_call_uuid;
        return $this;
    }

    /**
     * Get call direction
     *
     * @return string
     */
    public function getCallDirection()
    {
        return $this->call_direction;
    }

    /**
     * Set call direction
     *
     * @param string $call_direction
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setCallDirection($call_direction)
    {
        $this->call_direction = $call_direction;
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
     * @return Boorgeon_Plivo_Call
     */
    public function setToNumber($to_number)
    {
        $this->to_number = $to_number;
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
     * @return Boorgeon_Plivo_Call
     */
    public function setTotalRate($total_rate)
    {
        $this->total_rate = $total_rate;
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
     * @return Boorgeon_Plivo_Call
     */
    public function setFromNumber($from_number)
    {
        $this->from_number = $from_number;
        return $this;
    }

    /**
     * Get end time
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Set end time
     *
     * @param string $end_time
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
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
     * @return Boorgeon_Plivo_Call
     */
    public function setCallUuid($call_uuid)
    {
        $this->call_uuid = $call_uuid;
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
     * @return Boorgeon_Plivo_Call
     */
    public function setResourceUri($resource_uri)
    {
        $this->resource_uri = $resource_uri;
        return $this;
    }

    /**
     * Get sub account
     *
     * @return string
     */
    public function getSubaccount()
    {
        return $this->subaccount;
    }

    /**
     * Set sub account
     *
     * @param string $subaccount The id of the subaccount, if call details of
     * the subaccount is needed.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setSubaccount($subaccount)
    {
        $this->subaccount = $subaccount;
        return $this;
    }

    /**
     * Get limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Set limit
     *
     * @param int $limit Used to display the number of results per page.
     * The maximum number of results that can be fetched is 20.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * Get offset
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set offset
     *
     * @param int $offset Denotes the number of value items by which the
     * results should be offset. Eg:- If the result contains a 1000 values and
     * limit is set to 10 and offset is set to 705, then values 706 through 715
     * are displayed in the results. This parameter is also used for pagination
     * of the results.
     *
     * @return Boorgeon_Plivo_Call
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
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
     * @return Boorgeon_Plivo_Call
     */
    public function setRecordId($record_id)
    {
        $this->record_id = $record_id;
        return $this;
    }

    /**
     * Hangups a call request.
     *
     * @param string $request_uuid
     *
     * @return Boorgeon_Plivo_Call
     */
    public function cancel($request_uuid)
    {
        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $plivo->hangup_request(array(
            'request_uuid' => $request_uuid
        ));

        return $this;
    }

    /**
     * Fetches a specified call.
     *
     * @return Boorgeon_Plivo_Call
     * @throws Boorgeon_Plivo_Exception
     */
    public function get()
    {
        if ($this->getRecordId() == null) {
            throw new Boorgeon_Plivo_Exception('Record Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_cdr($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Fetches all calls.
     *
     * @param Boorgeon_Plivo_CallDetails $callDetails
     *
     * @return Boorgeon_Plivo_CallDetails
     */
    public function getAll(Boorgeon_Plivo_CallDetails $callDetails)
    {
        $params = $callDetails->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_cdrs($params);

        $response = $data['response'];

        $meta = new Boorgeon_Plivo_Meta();
        $meta->toObject($response['meta']);

        $objects = array();
        foreach ($response['objects'] as $array) {
            $call = new Boorgeon_Plivo_Call();
            $call->toObject($array);

            $objects[] = $call;
        }

        $callDetails->setApiId($response['api_id']);
        $callDetails->setMeta($meta);
        $callDetails->setObjects($objects);

        return $callDetails;
    }

    /**
     * Fetches all live calls.
     *
     * @param Boorgeon_Plivo_LiveCalls $liveCalls
     *
     * @return Boorgeon_Plivo_LiveCalls
     */
    public function getLiveCalls(Boorgeon_Plivo_LiveCalls $liveCalls)
    {
        $params = $liveCalls->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_live_calls($params);

        $response = $data['response'];

        $liveCalls->toObject($response);

        return $liveCalls;
    }

    /**
     * Fetches details of a specified call.
     *
     * @return Boorgeon_Plivo_LiveCall
     * @throws Boorgeon_Plivo_Exception
     */
    public function getLiveCall()
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_live_call($params);

        $response = $data['response'];

        $liveCall = new Boorgeon_Plivo_LiveCall();
        $liveCall->toObject($response);

        return $liveCall;
    }

    /**
     * Terminates a specified call.
     *
     * @return Boorgeon_Plivo_Call
     * @throws Boorgeon_Plivo_Exception
     */
    public function hangup()
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->hangup_call($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Creates a call.
     *
     * @return Boorgeon_Plivo_Call
     * @throws Boorgeon_Plivo_Exception
     */
    public function make()
    {
        if ($this->getFrom() == null) {
            throw new Boorgeon_Plivo_Exception('From cannot be null');
        }

        if ($this->getTo() == null) {
            throw new Boorgeon_Plivo_Exception('To cannot be null');
        }

        if ($this->getAnswerUrl() == null) {
            throw new Boorgeon_Plivo_Exception('Answer Url cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->make_call($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Plays and controls sounds during a call.
     *
     * @param Boorgeon_Plivo_CallPlay $callPlay
     *
     * @return Boorgeon_Plivo_CallPlay
     * @throws Boorgeon_Plivo_Exception
     */
    public function play(Boorgeon_Plivo_CallPlay $callPlay)
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        if ($callPlay->getUrls() == null) {
            throw new Boorgeon_Plivo_Exception('Urls cannot be null');
        }

        $params = array_merge($this->toArray(), $callPlay->toArray());

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->play($params);

        $response = $data['response'];

        $callPlay->toObject($response);

        return $callPlay;
    }

    /**
     * Stops playing sounds during a call.
     *
     * @return Boorgeon_Plivo_CallPlay
     * @throws Boorgeon_Plivo_Exception
     */
    public function stopPlaying()
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->stop_play($params);

        $response = $data['response'];

        $callPlay = new Boorgeon_Plivo_CallPlay();
        $callPlay->toObject($response);

        return $callPlay;
    }

    /**
     * Records a call.
     *
     * @param Boorgeon_Plivo_CallRecord $callRecord
     *
     * @return Boorgeon_Plivo_CallRecord
     * @throws Boorgeon_Plivo_Exception
     */
    public function record(Boorgeon_Plivo_CallRecord $callRecord)
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        $params = array_merge($this->toArray(), $callRecord->toArray());

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->record($params);

        $response = $data['response'];

        $callRecord->toObject($response);

        return $callRecord;
    }

    /**
     * Cancels a call recording.
     *
     * @param string $call_uuid
     *
     * @return Boorgeon_Plivo_CallRecord
     * @throws Boorgeon_Plivo_Exception
     */
    public function stopRecording(Boorgeon_Plivo_CallRecord $callRecord)
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        $params = array_merge($this->toArray(), $callRecord->toArray());

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->stop_record($params);

        $response = $data['response'];

        $callRecord->toObject($response);

        return $callRecord;
    }

    /**
     * Send digits on a call.
     *
     * @param Boorgeon_Plivo_CallDtmf $callDtmf
     *
     * @return Boorgeon_Plivo_CallDtmf
     * @throws Boorgeon_Plivo_Exception
     */
    public function sendDigits(Boorgeon_Plivo_CallDtmf $callDtmf)
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        if ($callDtmf->getDigits() == null) {
            throw new Boorgeon_Plivo_Exception('Digits cannot be null');
        }

        $params = array_merge($this->toArray(), $callDtmf->toArray());

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->send_digits($params);

        $response = $data['response'];

        $callDtmf->toObject($response);

        return $callDtmf;
    }

    /**
     * Plays text during a call (text to speech).
     *
     * @param Boorgeon_Plivo_CallSpeak $callSpeak
     *
     * @return Boorgeon_Plivo_CallSpeak
     * @throws Boorgeon_Plivo_Exception
     */
    public function speak(Boorgeon_Plivo_CallSpeak $callSpeak)
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        if ($callSpeak->getText() == null) {
            throw new Boorgeon_Plivo_Exception('Text cannot be null');
        }

        $params = array_merge($this->toArray(), $callSpeak->toArray());

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->speak($params);

        $response = $data['response'];

        $callSpeak->toObject($response);

        return $callSpeak;
    }

    /**
     * Stops playing text during a call.
     *
     * @return Boorgeon_Plivo_CallSpeak
     * @throws Boorgeon_Plivo_Exception
     */
    public function stopSpeaking()
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->stop_speak($params);

        $response = $data['response'];

        $callSpeak = new Boorgeon_Plivo_CallSpeak();
        $callSpeak->toObject($response);

        return $callSpeak;
    }

    /**
     * Transfers a call.
     *
     * @param Boorgeon_Plivo_Call $call
     *
     * @param Boorgeon_Plivo_CallTransfer $callTransfer
     *
     * @return Boorgeon_Plivo_CallTransfer
     * @throws Boorgeon_Plivo_Exception
     */
    public function transfert(Boorgeon_Plivo_CallTransfer $callTransfer)
    {
        if ($this->getCallUuid() == null) {
            throw new Boorgeon_Plivo_Exception('Call UUID cannot be null');
        }

        $params = array_merge($this->toArray(), $callTransfer->toArray());

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->transfer_call($params);

        $response = $data['response'];

        $callTransfer->toObject($response);

        return $callTransfer;
    }

}
