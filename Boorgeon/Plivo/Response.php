<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response
{

    protected $_elements = array();

    /**
     * Add element.
     *
     * @param Boorgeon_Plivo_Response_Element $element
     *
     * @return Boorgeon_Plivo_Response
     */
    public function addElement(Boorgeon_Plivo_Response_Element $element)
    {
        $this->_elements[] = $element;
        return $this;
    }

    public function toXML()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8" ?>';
        $xml.= '<Response>';

        foreach ($this->_elements as $element) {
            $xml .= $element->toXML();
        }

        $xml.= '</Response>';

        return $xml;
    }

    protected function _sendHeaders()
    {
        header('Content-Type: application/xml');
    }

    public function send()
    {
        $this->_sendHeaders();
        echo $this->toXml();
    }

    public function __toString()
    {
        $this->_sendHeaders();
        return $this->toXml();
    }

}
