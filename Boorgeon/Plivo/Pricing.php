<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Pricing extends Boorgeon_Plivo_Object
{

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Boorgeon_Plivo_Pricing
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Set country code
     *
     * @param string $country_code
     *
     * @return Boorgeon_Plivo_Pricing
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
        return $this;
    }

    /**
     * Get country iso
     *
     * @return string
     */
    public function getCountryIso()
    {
        return $this->country_iso;
    }

    /**
     * Set country iso
     *
     * @param string $country_iso The 2 digit country ISO code. eg. US, GB, QA
     *
     * @return Boorgeon_Plivo_Pricing
     */
    public function setCountryIso($country_iso)
    {
        $this->country_iso = strtoupper($country_iso);
        return $this;
    }

    /**
     * Get phone numbers
     *
     * @return array
     */
    public function getPhoneNumbers()
    {
        return $this->phone_numbers;
    }

    /**
     * Set phone numbers
     *
     * @param array $phone_numbers
     *
     * @return Boorgeon_Plivo_Pricing
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->phone_numbers = $phone_numbers;
        return $this;
    }

    /**
     * Get voice
     *
     * @return array
     */
    public function getVoice()
    {
        return $this->voice;
    }

    /**
     * Set voice
     *
     * @param array $voice
     *
     * @return Boorgeon_Plivo_Pricing
     */
    public function setVoice($voice)
    {
        $this->voice = $voice;
        return $this;
    }

    /**
     * Get Pricing for a Country
     *
     * @param string $country_iso
     *
     * @return Boorgeon_Plivo_Pricing
     * @throws Boorgeon_Plivo_Exception
     */
    public function get($country_iso = null)
    {
        if ($country_iso) {
            $this->setCountryIso($country_iso);
        } elseif ($this->getCountryIso() == null) {
            throw new Boorgeon_Plivo_Exception('Country ISO cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->pricing($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

}
