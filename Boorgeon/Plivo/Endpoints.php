<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Endpoints extends Boorgeon_Plivo_Object
{

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
     * @return Boorgeon_Plivo_Endpoints
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
     * @return Boorgeon_Plivo_Endpoints
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
     * @return Boorgeon_Plivo_Endpoints
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * Get objects Array of Boorgeon_Plivo_Endpoint
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
     * @param string $objects Array of Boorgeon_Plivo_Endpoint
     *
     * @return Boorgeon_Plivo_Endpoints
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
        return $this;
    }

}
