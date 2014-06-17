<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Application extends Boorgeon_Plivo_Object
{

    /**
     * Get answer url
     *
     * @return string
     */
    public function getAnswerUrl()
    {
        return $this->answer_url;
    }

    /**
     * Set answer url
     *
     * @param string $answer_url The URL Plivo will fetch when a call executes
     * this application.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setAnswerUrl($answer_url)
    {
        $this->answer_url = $answer_url;
        return $this;
    }

    /**
     * Get app name
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->app_name;
    }

    /**
     * Set app name
     *
     * @param string $app_name The name of your application
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setAppName($app_name)
    {
        $this->app_name = $app_name;
        return $this;
    }

    /**
     * Get answer method
     *
     * @return string
     */
    public function getAnswerMethod()
    {
        return $this->answer_method;
    }

    /**
     * Set answer method
     *
     * @param string $answer_method The method used to call the answer_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setAnswerMethod($answer_method)
    {
        $this->answer_method = $answer_method;
        return $this;
    }

    /**
     * Get hangup url
     *
     * @return string
     */
    public function getHangupUrl()
    {
        return $this->hangup_url;
    }

    /**
     * Set hangup url
     *
     * @param string $hangup_url The URL that will be notified by Plivo when
     * the call hangs up. Defaults to answer_url
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setHangupUrl($hangup_url)
    {
        $this->hangup_url = $hangup_url;
        return $this;
    }

    /**
     * Get hangup method
     *
     * @return string
     */
    public function getHangupMethod()
    {
        return $this->hangup_method;
    }

    /**
     * Set hangup method
     *
     * @param string $hangup_method The method used to call the hangup_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setHangupMethod($hangup_method)
    {
        $this->hangup_method = $hangup_method;
        return $this;
    }

    /**
     * Get fallback answer url
     *
     * @return string
     */
    public function getFallbackAnswerUrl()
    {
        return $this->fallback_answer_url;
    }

    /**
     * Set fallback answer url
     *
     * @param string $fallback_answer_url Invoked by Plivo only if answer_url
     * is unavailable or the XML response is invalid.
     * Should contain a XML response.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setFallbackAnswerUrl($fallback_answer_url)
    {
        $this->fallback_answer_url = $fallback_answer_url;
        return $this;
    }

    /**
     * Get fallback method
     *
     * @return string
     */
    public function getFallbackMethod()
    {
        return $this->fallback_method;
    }

    /**
     * Set fallback method
     *
     * @param string $fallback_method The method used to call the
     * fallback_answer_url. Defaults to POST.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setFallbackMethod($fallback_method)
    {
        $this->fallback_method = $fallback_method;
        return $this;
    }

    /**
     * Get message url
     *
     * @return string
     */
    public function getMessageUrl()
    {
        return $this->message_url;
    }

    /**
     * Set message url
     *
     * @param string $message_url The URL that will be notified by Plivo when
     * an inbound message is received. Defaults not set.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setMessageUrl($message_url)
    {
        $this->message_url = $message_url;
        return $this;
    }

    /**
     * Get message method
     *
     * @return string
     */
    public function getMessageMethod()
    {
        return $this->message_method;
    }

    /**
     * Set message method
     *
     * @param string $message_method The method used to call the message_url.
     * Defaults to POST.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setMessageMethod($message_method)
    {
        $this->message_method = $message_method;
        return $this;
    }

    /**
     * Get default number app
     *
     * @return booleanj-
     */
    public function getDefaultNumberApp()
    {
        return $this->default_number_app;
    }

    /**
     * Set default number app
     *
     * @param boolean $default_number_app Boolean parameter. If set to true,
     * this parameter ensures that newly created numbers, which don't have an
     * app_id, point to this application.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setDefaultNumberApp($default_number_app)
    {
        $this->default_number_app = $default_number_app;
        return $this;
    }

    /**
     * Get default endpoint app
     *
     * @return boolean
     */
    public function getDefaultEndpointApp()
    {
        return $this->default_endpoint_app;
    }

    /**
     * Set default endpoint app
     *
     * @param boolean $default_endpoint_app Boolean parameter. If set to true,
     * this parameter ensures that newly created endpoints, which don't have an
     * app_id, point to this application.
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setDefaultEndpointApp($default_endpoint_app)
    {
        $this->default_endpoint_app = $default_endpoint_app;
        return $this;
    }

    /**
     * Get default app
     *
     * @return boolean
     */
    public function getDefaultApp()
    {
        return $this->default_app;
    }

    /**
     * Set default app
     *
     * @param boolean $default_app
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setDefaultApp($default_app)
    {
        $this->default_app = $default_app;
        return $this;
    }

    /**
     * Get production app
     *
     * @return boolean
     */
    public function getProductionApp()
    {
        return $this->production_app;
    }

    /**
     * Set production app
     *
     * @param boolean $production_app
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setProductionApp($production_app)
    {
        $this->production_app = $production_app;
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
     * @param boolean $enabled
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * Get public uri
     *
     * @return boolean
     */
    public function getPublicUri()
    {
        return $this->public_uri;
    }

    /**
     * Set public uri
     *
     * @param boolean $public_uri
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setPublicUri($public_uri)
    {
        $this->public_uri = $public_uri;
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
     * @return Boorgeon_Plivo_Application
     */
    public function setSipUri($sip_uri)
    {
        $this->sip_uri = $sip_uri;
        return $this;
    }

    /**
     * Get sub account
     *
     * @return string
     */
    public function getSubAccount()
    {
        return $this->sub_account;
    }

    /**
     * Set sub account
     *
     * @param string $sub_account
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setSubAccount($sub_account)
    {
        $this->sub_account = $sub_account;
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
     * Set app id
     *
     * @param string $app_id
     *
     * @return Boorgeon_Plivo_Application
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;
        return $this;
    }

    /**
     * Create an Application
     *
     * @throws Boorgeon_Plivo_Exception
     */
    public function create()
    {
        if ($this->getAppName() == null) {
            throw new Boorgeon_Plivo_Exception('App name cannot be null');
        }

        if ($this->getAnswerUrl() == null) {
            throw new Boorgeon_Plivo_Exception('Answer Url cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->create_application($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Get Details of a Single Application
     *
     * @return Boorgeon_Plivo_Application
     * @throws Boorgeon_Plivo_Exception
     */
    public function get()
    {
        if ($this->getAppId() == null) {
            throw new Boorgeon_Plivo_Exception('App Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_application($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Delete an Application
     *
     * @return Boorgeon_Plivo_Application
     * @throws Boorgeon_Plivo_Exception
     */
    public function delete()
    {
        if ($this->getAppId() == null) {
            throw new Boorgeon_Plivo_Exception('App Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->delete_application($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Modify an Application
     *
     * @return Boorgeon_Plivo_Application
     * @throws Boorgeon_Plivo_Exception
     */
    public function modify()
    {
        if ($this->getAppId() == null) {
            throw new Boorgeon_Plivo_Exception('App Id cannot be null');
        }

        $params = $this->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->modify_application($params);

        $response = $data['response'];

        $this->toObject($response);

        return $this;
    }

    /**
     * Get Details of All Applications
     *
     * @param Boorgeon_Plivo_Applications $applications
     *
     * @return Boorgeon_Plivo_Applications
     */
    public function getAll(Boorgeon_Plivo_Applications $applications)
    {
        $params = $applications->toArray();

        $plivo = Boorgeon_Plivo::getInstance()->getRestAPI();
        $data = $plivo->get_applications($params);

        $response = $data['response'];

        $meta = new Boorgeon_Plivo_Meta();
        $meta->toObject($response['meta']);

        $objects = array();
        foreach ($response['objects'] as $array) {
            $application = new Boorgeon_Plivo_Application();
            $application->toObject($array);

            $objects[] = $application;
        }

        $applications->setApiId($response['api_id']);
        $applications->setMeta($meta);
        $applications->setObjects($objects);

        return $applications;
    }

}
