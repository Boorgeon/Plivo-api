<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Recordings extends Boorgeon_Plivo_Object
{

    /**
     * Get subaccount
     *
     * @return string
     */
    public function getSubaccount()
    {
        return $this->subaccount;
    }

    /**
     * Set subaccount
     *
     * @param string $subaccount auth_id of the subaccount. Lists only those
     * recordings of the main accounts which are tied to the specified subaccount.
     *
     * @return Boorgeon_Plivo_Recordings
     */
    public function setSubaccount($subaccount)
    {
        $this->subaccount = $subaccount;
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
     * @param string $call_uuid Used to filter recordings for a specific call.
     *
     * @return Boorgeon_Plivo_Recordings
     */
    public function setCallUuid($call_uuid)
    {
        $this->call_uuid = $call_uuid;
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
     * Set add time
     *
     * @param string $add_time Used to filter out recordings according to the
     * time they were added.The add_time filter is a comparative filter that
     * can be used in the following four forms:
     * <ul>
     * <li>add_time__gt: gt stands for greater than. The format expected is
     * YYYY-MM-DD HH:MM[:ss[.uuuuuu]]. Eg:- To get all recordings that started
     * after 2012-03-21 11:47, use add_time__gt=2012-03-21 11:47</li>
     * <li>add_time__gte: gte stands for greater than or equal. The format
     * expected is YYYY-MM-DD HH:MM[:ss[.uuuuuu]]. Eg:- To get all recordings
     * that started after or exactly at 2012-03-21 11:47[:30], use
     * add_time__gte=2012-03-21 11:47[:30]</li>
     * <li>add_time__lt: lt stands for lesser than. The format expected is
     * YYYY-MM-DD HH:MM[:ss[.uuuuuu]]. Eg:- To get all recordings that started
     * before 2012-03-21 11:47, use add_time__lt=2012-03-21 11:47</li>
     * <li>add_time__gte: lte stands for lesser than or equal. The format
     * expected is YYYY-MM-DD HH:MM[:ss[.uuuuuu]]. Eg:- To get all recordings
     * that started before or exactly at 2012-03-21 11:47[:30], use
     * add_time__lte=2012-03-21 11:47[:30]</li>
     * </ul>
     * <br>
     * Note: The above filters can be combined to get recordings that started
     * in a particular time range.
     *
     * @return Boorgeon_Plivo_Recordings
     */
    public function setAddTime($add_time)
    {
        $this->add_time = $add_time;
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
     * @return Boorgeon_Plivo_Recordings
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
     * @return Boorgeon_Plivo_Recordings
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
     * @return Boorgeon_Plivo_Recordings
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * Get objects Array of Boorgeon_Plivo_Recording
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
     * @param string $objects Array of Boorgeon_Plivo_Recording
     *
     * @return Boorgeon_Plivo_Recordings
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
        return $this;
    }

}
