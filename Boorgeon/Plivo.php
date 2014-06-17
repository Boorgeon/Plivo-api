<?php

require '/../plivo-php/plivo.php';

/**
 * We, at Plivo, make it easier for businesses and software developers to use
 * cloud-powered Voice and SMS communications.
 *
 * We offer HTTP APIs that let you build Voice and SMS applications or
 * integrate such capabilities into your web or mobile application in any web
 * standard language. We simplify the notorious complexity of the telephony
 * business into a simple infrastructure service for you: we take care of
 * everything from carriers contracts to call quality and messaging
 * deliverability to technical support.
 *
 * @link https://www.plivo.com/about/
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo
{

    /**
     * Plivo auth ID
     * @var string
     */
    protected $_auth_id;

    /**
     * Plivo auth token
     * @var string
     */
    protected $_auth_token;

    /**
     * Boorgeon Plivo
     * @var Boorgeon_Plivo
     */
    protected static $_instance;

    /**
     * Plivo Rest API
     * @var PlivoRestAPI
     */
    protected $_restapi;

    protected function __construct($config = array())
    {
        if (array_key_exists('auth_id', $config)) {
            $this->setAuthId($config['auth_id']);
        }

        if (array_key_exists('auth_token', $config)) {
            $this->setAuthToken($config['auth_token']);
        }
    }

    /**
     * Factory Boorgeon_Plivo.
     *
     * @return Boorgeon_Plivo
     */
    public static function factory($config = array())
    {
        if (null === self::$_instance) {
            self::$_instance = new self($config);
        }

        return self::$_instance;
    }

    /**
     * One instance
     *
     * @return Boorgeon_Plivo
     */
    public static function getInstance()
    {
        return self::$_instance;
    }

    /**
     * Get Rest API
     *
     * @return PlivoRestAPI
     */
    public function getRestAPI()
    {
        if (null === $this->_restapi) {
            $this->_restapi = new PlivoRestAPI($this->getAuthId(), $this->getAuthToken());
        }

        return $this->_restapi;
    }

    /**
     * Set auth id
     *
     * @param string $auth_id
     * @return Boorgeon_Plivo
     */
    public function setAuthId($auth_id)
    {
        $this->_auth_id = $auth_id;
        return $this;
    }

    /**
     * Get auth id
     *
     * @return string
     */
    public function getAuthId()
    {
        return $this->_auth_id;
    }

    /**
     * Set auth token
     *
     * @param string $port
     * @return Boorgeon_Plivo
     */
    public function setAuthToken($auth_token)
    {
        $this->_auth_token = $auth_token;
        return $this;
    }

    /**
     * Get auth token
     *
     * @return string
     */
    public function getAuthToken()
    {
        return $this->_auth_token;
    }

}
