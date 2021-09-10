<?php

namespace SportEventIstanbul\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberRecordOutput StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetMemberRecordOutput
 * @subpackage Structs
 * @author Mustafa KARALI
 */
class GetMemberRecordOutput extends AbstractStructBase
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CategoryID;
    /**
     * The MemberRecordID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string
     */
    public $MemberRecordID;
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
     * Constructor method for GetMemberRecordOutput
     * @uses GetMemberRecordOutput::setCategoryID()
     * @uses GetMemberRecordOutput::setMemberRecordID()
     * @uses GetMemberRecordOutput::setResponse()
     * @uses GetMemberRecordOutput::setResponseDescription()
     * @param string $categoryID
     * @param string $memberRecordID
     * @param bool $response
     * @param string $responseDescription
     */
    public function __construct($categoryID = null, $memberRecordID = null, $response = null, $responseDescription = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setMemberRecordID($memberRecordID)
            ->setResponse($response)
            ->setResponseDescription($responseDescription);
    }
    /**
     * Get CategoryID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCategoryID()
    {
        return isset($this->CategoryID) ? $this->CategoryID : null;
    }
    /**
     * Set CategoryID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $categoryID
     * @return \SportEventIstanbul\StructType\GetMemberRecordOutput
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        if (is_null($categoryID) || (is_array($categoryID) && empty($categoryID))) {
            unset($this->CategoryID);
        } else {
            $this->CategoryID = $categoryID;
        }
        return $this;
    }
    /**
     * Get MemberRecordID value
     * @return string|null
     */
    public function getMemberRecordID()
    {
        return $this->MemberRecordID;
    }
    /**
     * Set MemberRecordID value
     * @param string $memberRecordID
     * @return \SportEventIstanbul\StructType\GetMemberRecordOutput
     */
    public function setMemberRecordID($memberRecordID = null)
    {
        // validation for constraint: string
        if (!is_null($memberRecordID) && !is_string($memberRecordID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($memberRecordID, true), gettype($memberRecordID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($memberRecordID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $memberRecordID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}', var_export($memberRecordID, true)), __LINE__);
        }
        $this->MemberRecordID = $memberRecordID;
        return $this;
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
     * @return \SportEventIstanbul\StructType\GetMemberRecordOutput
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
     * @return \SportEventIstanbul\StructType\GetMemberRecordOutput
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
