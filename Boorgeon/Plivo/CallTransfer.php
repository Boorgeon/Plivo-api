<?php

/**
 * Transfer a Call
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_CallTransfer extends Boorgeon_Plivo_Object
{

    /**
     * Get legs
     *
     * @return string
     */
    public function getLegs()
    {
        return $this->legs;
    }

    /**
     * Set legs
     *
     * @param string $legs 'aleg', 'bleg' or 'both' Defaults to 'aleg' 'aleg'
     * will transfer call_uuid 'bleg' will transfer the bridged leg (if found)
     * of call_uuid 'both' will transfer call_uuid and bridged leg of call_uuid
     *
     * @return Boorgeon_Plivo_CallTransfer
     */
    public function setLegs($legs)
    {
        $this->legs = $legs;
        return $this;
    }

    /**
     * Get aleg url
     *
     * @return string
     */
    public function getAlegUrl()
    {
        return $this->aleg_url;
    }

    /**
     * Set aleg url
     *
     * @param string $aleg_url URL to transfer for 'aleg', if legs is 'aleg' or
     * 'both', then aleg_url has to be specified.
     *
     * @return Boorgeon_Plivo_CallTransfer
     */
    public function setAlegUrl($aleg_url)
    {
        $this->aleg_url = $aleg_url;
        return $this;
    }

    /**
     * Get aleg method
     *
     * @return string
     */
    public function getAlegMethod()
    {
        return $this->aleg_method;
    }

    /**
     * Set aleg method
     *
     * @param string $aleg_method HTTP method to invoke aleg_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_CallTransfer
     */
    public function setAlegMethod($aleg_method)
    {
        $this->aleg_method = $aleg_method;
        return $this;
    }

    /**
     * Get bleg url
     *
     * @return string
     */
    public function getBlegUrl()
    {
        return $this->bleg_url;
    }

    /**
     * Set bleg url
     *
     * @param string $bleg_url URL to transfer for bridged leg, if legs is
     * 'bleg' or 'both', then bleg_url has to be specified.
     *
     * @return Boorgeon_Plivo_CallTransfer
     */
    public function setBlegUrl($bleg_url)
    {
        $this->bleg_url = $bleg_url;
        return $this;
    }

    /**
     * Get bleg method
     *
     * @return string
     */
    public function getBlegMethod()
    {
        return $this->bleg_method;
    }

    /**
     * Set bleg method
     *
     * @param string $bleg_method HTTP method to invoke bleg_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_CallTransfer
     */
    public function setBlegMethod($bleg_method)
    {
        $this->bleg_method = $bleg_method;
        return $this;
    }

}
