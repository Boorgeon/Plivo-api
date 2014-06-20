<?php

/**
 * The <Redirect> element is used to transfer the control of a call at a
 * different URL, which then starts processing the new XML response.
 * Any elements after <Redirect> will not be processed.
 * <br><br>
 * Note: Currently, you must enter an absolute URL to transfer control of the call.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Redirect extends Boorgeon_Plivo_Response_Element
{

    public function __construct($url)
    {
        parent::__construct();

        $this->setValue($url);
    }

    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set method
     *
     * @param string $method Used to specify the HTTP request mode to obtain
     * the Redirect URL.
     * <br>
     * <b>Allowed Values : </b>GET, POST
     * <br>
     * <b>Default Value : </b>POST
     *
     * @return Boorgeon_Plivo_Response_Redirect
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

}
