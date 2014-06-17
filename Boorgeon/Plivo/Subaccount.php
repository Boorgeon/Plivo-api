<?php

/**
 * A subaccount is an account that is owned by a parent account.
 * Using a subaccount makes it easier to segment, manage, and keep track of the
 * account usages of each user independently.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Subaccount extends Boorgeon_Plivo_Object
{

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set account
     *
     * @param string $account
     *
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setAccount($account)
    {
        $this->account = $account;
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
     * @param string $name Name of the subaccount
     *
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set created
     *
     * @param string $created
     *
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get auth token
     *
     * @return string
     */
    public function getAuthToken()
    {
        return $this->auth_token;
    }

    /**
     * Set auth token
     *
     * @param string $auth_token
     *
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setAuthToken($auth_token)
    {
        $this->auth_token = $auth_token;
        return $this;
    }

    /**
     * Get new auth token
     *
     * @return string
     */
    public function getNewAuthToken()
    {
        return $this->new_auth_token;
    }

    /**
     * Set new auth token
     *
     * @param string $new_auth_token
     *
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setNewAuthToken($new_auth_token)
    {
        $this->new_auth_token = $new_auth_token;
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled Specify if the subaccount should be enabled or
     * not. Takes a value of True or False.
     *
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Get modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set modified
     *
     * @param string $modified
     *
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
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
     * @param string $auth_id Id of the subaccount for which the details are
     * required.
     *
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setAuthId($auth_id)
    {
        $this->auth_id = $auth_id;
        $this->subauth_id = $auth_id;
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
     * @return Boorgeon_Plivo_Subaccount
     */
    public function setResourceUri($resource_uri)
    {
        $this->resource_uri = $resource_uri;
        return $this;
    }

    /**
     * Create a Subaccount.
     *
     * @return Boorgeon_Plivo_Subaccount
     * @throws Boorgeon_Plivo_Exception
     */
    public function create()
    {
        if ($this->getName() == null) {
            throw new Boorgeon_Plivo_Exception('Name cannot be null');
        }

        if ($this->getEnabled() == null) {
            throw new Boorgeon_Plivo_Exception('Enabled cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->create_subaccount($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Get Details Of a Specific Subaccount.
     *
     * @return Boorgeon_Plivo_Subaccount
     * @throws Boorgeon_Plivo_Exception
     */
    public function get()
    {
        if ($this->getAuthId() == null) {
            throw new Boorgeon_Plivo_Exception('Sub Auth Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_subaccount($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Delete a Subaccount.
     *
     * @return Boorgeon_Plivo_Subaccount
     * @throws Boorgeon_Plivo_Exception
     */
    public function delete()
    {
        if ($this->getAuthId() == null) {
            throw new Boorgeon_Plivo_Exception('Sub Auth Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->delete_subaccount($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Get Details Of All Subaccounts.
     *
     * @param Boorgeon_Plivo_Subaccounts $subaccounts
     *
     * @return Boorgeon_Plivo_Subaccounts
     */
    public function getAll(Boorgeon_Plivo_Subaccounts $subaccounts)
    {
        $params = $subaccounts->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_subaccounts($params);

        $response = $data['response'];

        $meta = new Boorgeon_Plivo_Meta();
        $meta->toObject($response['meta']);

        $objects = array();
        foreach ($response['objects'] as $array) {
            $subaccount = new Boorgeon_Plivo_Subaccount();
            $subaccount->toObject($array);

            $objects[] = $subaccount;
        }

        $subaccounts->setApiId($response['api_id']);
        $subaccounts->setMeta($meta);
        $subaccounts->setObjects($objects);

        return $subaccounts;
    }

}
