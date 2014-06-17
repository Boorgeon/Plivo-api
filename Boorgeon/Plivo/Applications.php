<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Applications extends Boorgeon_Plivo_Object
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
     * @param string $subaccount Id or name or alias of the subaccount, in case 
     * only subaccount applications are needed.
     *
     * @return Boorgeon_Plivo_Applications
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
     * @return Boorgeon_Plivo_Applications
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
     * @return Boorgeon_Plivo_Applications
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
     * @return Boorgeon_Plivo_Applications
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * Get objects Array of Boorgeon_Plivo_Application
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
     * @param string $objects Array of Boorgeon_Plivo_Application
     *
     * @return Boorgeon_Plivo_Applications
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
        return $this;
    }

}
