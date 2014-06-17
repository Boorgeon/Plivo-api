<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Conferences extends Boorgeon_Plivo_Object
{

    /**
     * Get conferences
     *
     * @return array
     */
    public function getConferences()
    {
        return $this->conferences;
    }

    /**
     * Set conferences
     *
     * @param array $conferences
     *
     * @return Boorgeon_Plivo_Conferences
     */
    public function setConferences($conferences)
    {
        $this->conferences = $conferences;
        return $this;
    }

}
