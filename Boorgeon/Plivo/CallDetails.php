<?php

/**
 * Get All Call Details
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_CallDetails extends Boorgeon_Plivo_Object
{

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
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setSubaccount($subaccount)
    {
        $this->subaccount = $subaccount;
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
     * @param string $call_direction Filter the results by call direction.
     * The valid inputs are inbound and outbound.
     *
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setCallDirection($call_direction)
    {
        $this->call_direction = $call_direction;
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
     * @param string $from_number Filter the results by the number from where
     * the call originated. For example:
     * <br>
     * To filter out those numbers that contain a particular number sequence,
     * use from_number={sequence}
     * <br>
     * To filter out a number that matches an exact number,
     * use from_number={exact_number}
     *
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setFromNumber($from_number)
    {
        $this->from_number = $from_number;
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
     * @param string $to_number Filter the results by the number to which the
     * call was made. Tips to use this filter are:
     * <br>
     * To filter out those numbers that contain a particular number sequence,
     * use to_number={sequence}
     * <br>
     * To filter out a number that matches an exact number, use to_number={exact_number}
     *
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setToNumber($to_number)
    {
        $this->to_number = $to_number;
        return $this;
    }

    /**
     * Get bill duration
     *
     * @return string
     */
    public function getBillDuration()
    {
        return $this->bill_duration;
    }

    /**
     * Set bill duration
     *
     * @param string $bill_duration Filter the results according to billed
     * duration. The value of billed duration is in seconds. The filter can be
     * used in one of the following five forms:
     * <br>
     * bill_duration: Input the exact value. Eg:- to filter out calls that were
     * exactly three minutes long, use bill_duration=180
     * <br>
     * bill_duration__gt: gt stands for greater than. Eg:- to filter out calls
     * that were more than two hours in duration bill_duration__gt=7200
     * <br>
     * bill_duration__gte: gte stands for greater than or equal to. Eg:- to
     * filter out calls that were two hours or more in duration bill_duration__gte=7200
     * <br>
     * bill_duration__lt: lt stands for lesser than. Eg:- to filter out calls
     * that were less than seven minutes in duration bill_duration__lt=420
     * <br>
     * bill_duration__lte: lte stands for lesser than or equal to. Eg:- to
     * filter out calls that were two hours or less in duration bill_duration__lte=7200
     *
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setBillDuration($bill_duration)
    {
        $this->bill_duration = $bill_duration;
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
     * @param string $end_time Filter out calls according to the time of
     * completion. The filter can be used in the following five forms:
     * <br>
     * end_time: The format expected is YYYY-MM-DD HH:MM[:ss[.uuuuuu]].
     * Eg:- To get all calls that ended at 2012-03-21 11:47[:30],
     * use end_time=2012-03-21 11:47[:30]
     * <br>
     * end_time__gt: gt stands for greater than. The format expected is
     * YYYY-MM-DD HH:MM[:ss[.uuuuuu]]. Eg:- To get all calls that ended after
     * 2012-03-21 11:47, use end_time__gt=2012-03-21 11:47
     * <br>
     * end_time__gte: gte stands for greater than or equal. The format expected
     * is YYYY-MM-DD HH:MM[:ss[.uuuuuu]]. Eg:- To get all calls that ended
     * after or exactly at 2012-03-21 11:47[:30],
     * use end_time__gte=2012-03-21 11:47[:30]
     * <br>
     * end_time__lt: lt stands for lesser than. The format expected is
     * YYYY-MM-DD HH:MM[:ss[.uuuuuu]]. Eg:- To get all calls that ended before
     * 2012-03-21 11:47, use end_time__lt=2012-03-21 11:47
     * <br>
     * end_time__gte: lte stands for lesser than or equal. The format expected
     * is YYYY-MM-DD HH:MM[:ss[.uuuuuu]]. Eg:- To get all calls that ended
     * before or exactly at 2012-03-21 11:47[:30],
     * use end_time__lte=2012-03-21 11:47[:30]
     * <br>
     * Note: The above filters can be combined to get calls that ended in a
     * particular time range. The timestamps need to be UTC timestamps.
     *
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
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
     * @return Boorgeon_Plivo_CallDetails
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
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * Get meta
     *
     * @return Boorgeon_Plivo_Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * Set meta
     *
     * @param Boorgeon_Plivo_Meta $meta
     *
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * Get objects Array of Boorgeon_Plivo_Call
     *
     * @return array
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Set objects
     *
     * @param string $objects Array of Boorgeon_Plivo_Call
     *
     * @return Boorgeon_Plivo_CallDetails
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
        return $this;
    }

}
