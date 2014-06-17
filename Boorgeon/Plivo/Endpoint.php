<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Endpoint extends Boorgeon_Plivo_Object
{

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set alias
     *
     * @param string $alias Alias for this endpoint
     *
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * Get endpoint id
     *
     * @return string
     */
    public function getEndpointId()
    {
        return $this->endpoint_id;
    }

    /**
     * Set endpoint id
     *
     * @param string $endpoint_id
     *
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setEndpointId($endpoint_id)
    {
        $this->endpoint_id = $endpoint_id;
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set password
     *
     * @param string $password The password for your endpoint username.
     *
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setResourceUri($resource_uri)
    {
        $this->resource_uri = $resource_uri;
        return $this;
    }

    /**
     * Get sip uri
     *
     * @return string
     */
    public function getSipUri()
    {
        return $this->sip_uri;
    }

    /**
     * Set sip uri
     *
     * @param string $sip_uri
     *
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setSipUri($sip_uri)
    {
        $this->sip_uri = $sip_uri;
        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set username
     *
     * @param string $username The username for the endpoint to be created.
     *
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set application
     *
     * @param string $application
     *
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setApplication($application)
    {
        $this->application = $application;
        return $this;
    }

    /**
     * Get sip registered
     *
     * @return boolean
     */
    public function getSipRegistered()
    {
        return $this->sip_registered;
    }

    /**
     * Set sip registered
     *
     * @param boolean $sip_registered
     *
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setSipRegistered($sip_registered)
    {
        $this->sip_registered = $sip_registered;
        return $this;
    }

    /**
     * Get app id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Set app_id
     *
     * @param string $app_id The app_id of the application that is to be
     * attached to this endpoint. If this is not provided the
     * default_endpoint_app is attached to this endpoint.
     *
     * @return Boorgeon_Plivo_Endpoint
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
        return $this;
    }

    /**
     * Create an Endpoint
     *
     * @return Boorgeon_Plivo_Endpoint
     * @throws Boorgeon_Plivo_Exception
     */
    public function create()
    {
        if ($this->getUsername() == null) {
            throw new Boorgeon_Plivo_Exception('Username cannot be null');
        }

        if ($this->getPassword() == null) {
            throw new Boorgeon_Plivo_Exception('Password cannot be null');
        }

        if ($this->getAlias() == null) {
            throw new Boorgeon_Plivo_Exception('Alias cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->create_endpoint($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Get Details of a Particular Endpoint
     *
     * @return Boorgeon_Plivo_Endpoint
     * @throws Boorgeon_Plivo_Exception
     */
    public function get()
    {
        if ($this->getEndpointId() == null) {
            throw new Boorgeon_Plivo_Exception('Endpoint Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_endpoint($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Modify an Endpoint
     *
     * @return Boorgeon_Plivo_Endpoint
     * @throws Boorgeon_Plivo_Exception
     */
    public function delete()
    {
        if ($this->getEndpointId() == null) {
            throw new Boorgeon_Plivo_Exception('Endpoint Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->delete_endpoint($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Modify an Endpoint
     *
     * @return Boorgeon_Plivo_Endpoint
     * @throws Boorgeon_Plivo_Exception
     */
    public function modify()
    {
        if ($this->getEndpointId() == null) {
            throw new Boorgeon_Plivo_Exception('Endpoint Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->modify_endpoint($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Get Details of All Endpoints
     *
     * @param Boorgeon_Plivo_Endpoints $endpoints
     *
     * @return Boorgeon_Plivo_Endpoints
     */
    public function getAll(Boorgeon_Plivo_Endpoints $endpoints)
    {
        $params = $endpoints->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_endpoints($params);

        $response = $data['response'];

        $meta = new Boorgeon_Plivo_Meta();
        $meta->toObject($response['meta']);

        $objects = array();
        foreach ($response['objects'] as $array) {
            $endpoint = new Boorgeon_Plivo_Endpoint();
            $endpoint->toObject($array);

            $objects[] = $endpoint;
        }

        $endpoints->setApiId($response['api_id']);
        $endpoints->setMeta($meta);
        $endpoints->setObjects($objects);

        return $endpoints;
    }

}
