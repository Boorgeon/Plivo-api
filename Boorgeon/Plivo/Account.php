<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Account extends Boorgeon_Plivo_Object
{

    /**
     * Get account type
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->account_type;
    }

    /**
     * Set account type
     *
     * @param string $account_type
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setAccountType($account_type)
    {
        $this->account_type = $account_type;
        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Get auth id
     *
     * @return string
     */
    public function getAuthId()
    {
        return $this->auth_id;
    }

    /**
     * Set auth id
     *
     * @param string $auth_id
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setAuthId($auth_id)
    {
        $this->auth_id = $auth_id;
        return $this;
    }

    /**
     * Get auto recharge
     *
     * @return boolean
     */
    public function getAutRecharge()
    {
        return $this->auto_recharge;
    }

    /**
     * Set auto recharge
     *
     * @param boolean $auto_recharge
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setAutoRecharge($auto_recharge)
    {
        $this->auto_recharge = $auto_recharge;
        return $this;
    }

    /**
     * Get billing mode
     *
     * @return string
     */
    public function getBillingMode()
    {
        return $this->billing_mode;
    }

    /**
     * Set billing mode
     *
     * @param string $billing_mode
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setBillingMode($billing_mode)
    {
        $this->billing_mode = $billing_mode;
        return $this;
    }

    /**
     * Get cash credits
     *
     * @return string
     */
    public function getCashCredits()
    {
        return $this->cash_credits;
    }

    /**
     * Set cash credits
     *
     * @param string $cash_credits
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setCashCredits($cash_credits)
    {
        $this->cash_credits = $cash_credits;
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setCity($city)
    {
        $this->city = $city;
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
     * @return Boorgeon_Plivo_Account
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return Boorgeon_Plivo_Account
     */
    public function setResourceUri($resource_uri)
    {
        $this->resource_uri = $resource_uri;
        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return Boorgeon_Plivo_Account
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * Get account details.
     *
     * @return Boorgeon_Plivo_Account
     */
    public function get()
    {
        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_account();

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Modify an account.
     *
     * @return Boorgeon_Plivo_Account
     */
    public function modify()
    {
        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->modify_account($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

}
