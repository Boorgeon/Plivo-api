<?php

/**
 * Get Live Calls
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_LiveCalls extends Boorgeon_Plivo_Object
{

    /**
     * Get calls
     *
     * @return array
     */
    public function getCalls()
    {
        return $this->calls;
    }

    /**
     * Set calls
     *
     * @param array $calls
     *
     * @return Boorgeon_Plivo_LiveCalls
     */
    public function setCalls($calls)
    {
        $this->calls = $calls;
        return $this;
    }

}
