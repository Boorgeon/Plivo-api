<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Plan extends Boorgeon_Plivo_Object
{

    /**
     * Get voice rate
     *
     * @return string
     */
    public function getVoiceRate()
    {
        return $this->voice_rate;
    }

    /**
     * Set voice rate
     *
     * @param string $voice_rate
     *
     * @return Boorgeon_Plivo_Plan
     */
    public function setVoiceRate($voice_rate)
    {
        $this->voice_rate = $voice_rate;
        return $this;
    }

    /**
     * Get messaging rate
     *
     * @return string
     */
    public function getMessagingRate()
    {
        return $this->messaging_rate;
    }

    /**
     * Set messaging rate
     *
     * @param string $messaging_rate
     *
     * @return Boorgeon_Plivo_Plan
     */
    public function setMessagingRate($messaging_rate)
    {
        $this->messaging_rate = $messaging_rate;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Boorgeon_Plivo_Plan
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get monthly cloud credits
     *
     * @return string
     */
    public function getMonthlyCloudCredits()
    {
        return $this->monthly_cloud_credits;
    }

    /**
     * Set monthly cloud credits
     *
     * @param string $monthly_cloud_credits
     *
     * @return Boorgeon_Plivo_Plan
     */
    public function setMonthlyCloudCredits($monthly_cloud_credits)
    {
        $this->monthly_cloud_credits = $monthly_cloud_credits;
        return $this;
    }

}
