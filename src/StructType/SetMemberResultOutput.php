<?php

namespace SportEventIstanbul\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMemberResultOutput StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SetMemberResultOutput
 * @subpackage Structs
 * @author Mustafa KARALI
 */
class SetMemberResultOutput extends AbstractStructBase
{
    /**
     * The Response
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Response;
    /**
     * The ResponseDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ResponseDescription;
    /**
     * Constructor method for SetMemberResultOutput
     * @uses SetMemberResultOutput::setResponse()
     * @uses SetMemberResultOutput::setResponseDescription()
     * @param bool $response
     * @param string $responseDescription
     */
    public function __construct($response = null, $responseDescription = null)
    {
        $this
            ->setResponse($response)
            ->setResponseDescription($responseDescription);
    }
    /**
     * Get Response value
     * @return bool|null
     */
    public function getResponse()
    {
        return $this->Response;
    }
    /**
     * Set Response value
     * @param bool $response
     * @return \SportEventIstanbul\StructType\SetMemberResultOutput
     */
    public function setResponse($response = null)
    {
        // validation for constraint: boolean
        if (!is_null($response) && !is_bool($response)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($response, true), gettype($response)), __LINE__);
        }
        $this->Response = $response;
        return $this;
    }
    /**
     * Get ResponseDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResponseDescription()
    {
        return isset($this->ResponseDescription) ? $this->ResponseDescription : null;
    }
    /**
     * Set ResponseDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $responseDescription
     * @return \SportEventIstanbul\StructType\SetMemberResultOutput
     */
    public function setResponseDescription($responseDescription = null)
    {
        // validation for constraint: string
        if (!is_null($responseDescription) && !is_string($responseDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($responseDescription, true), gettype($responseDescription)), __LINE__);
        }
        if (is_null($responseDescription) || (is_array($responseDescription) && empty($responseDescription))) {
            unset($this->ResponseDescription);
        } else {
            $this->ResponseDescription = $responseDescription;
        }
        return $this;
    }
}
