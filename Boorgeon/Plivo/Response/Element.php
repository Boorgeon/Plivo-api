<?php

/**
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_Element extends Boorgeon_Plivo_Object
{

    protected $_attributes = array();
    protected $_name;
    protected $_value;

    public function __construct()
    {
        $class = get_class($this);
        $name = str_ireplace('Boorgeon_Plivo_Response_', '', $class);

        $this->setName($name);
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Boorgeon_Plivo_Response_Element
     */
    public function setName($name)
    {
        $this->_name = $name;
        return $this;
    }

    /**
     * Get value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->_value;
    }

    /**
     * Set value
     *
     * @param mixed $value
     *
     * @return Boorgeon_Plivo_Response_Element
     */
    public function setValue($value)
    {
        $this->_value = $value;
        return $this;
    }

    public function convertValue($value)
    {
        if ($value === true) {
            return 'true';
        }

        if ($value === false) {
            return 'false';
        }

        if ($value === null) {
            return 'none';
        }

        return $value;
    }

    public function getFirstElement()
    {
        $array = $this->toArray();

        $attributes = array();
        foreach ($array as $key => $value) {
            $attributes[] = $key . '="' . $this->convertValue($value) . '"';
        }

        if ($attributes) {
            $firstElement = '<' . $this->getName() . ' ' . implode(' ', $attributes) . '>';
        } else {
            $firstElement = '<' . $this->getName() . '>';
        }

        return $firstElement;
    }

    public function getLastElement()
    {
        return '</' . $this->getName() . '>';
    }

    public function getFirstLastElement()
    {
        $firstElement = str_replace('>', ' />', $this->getFirstElement());
        return $firstElement;
    }

    public function toXML()
    {
        $value = $this->getValue();

        if (is_array($value)) {
            $str = '';
            foreach ($value as $element) {
                if ($element instanceof Boorgeon_Plivo_Response_Element) {
                    $str .= $element->toXML();
                }
            }

            $this->setValue($str);
        } elseif ($value instanceof Boorgeon_Plivo_Response_Element) {
            $this->setValue($value->toXML());
        } elseif (empty($value)) {
            return $this->getFirstLastElement();
        }

        return $this->getFirstElement()
                . $this->getValue()
                . $this->getLastElement();
    }

}
