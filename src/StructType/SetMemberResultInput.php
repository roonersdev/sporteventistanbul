<?php

namespace SportEventIstanbul\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMemberResultInput StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SetMemberResultInput
 * @subpackage Structs
 * @author Mustafa KARALI
 */
class SetMemberResultInput extends AbstractStructBase
{
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
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The Result
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Result;
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Username;
    /**
     * Constructor method for SetMemberResultInput
     * @uses SetMemberResultInput::setMemberRecordID()
     * @uses SetMemberResultInput::setPassword()
     * @uses SetMemberResultInput::setResult()
     * @uses SetMemberResultInput::setUsername()
     * @param string $memberRecordID
     * @param string $password
     * @param string $result
     * @param string $username
     */
    public function __construct($memberRecordID = null, $password = null, $result = null, $username = null)
    {
        $this
            ->setMemberRecordID($memberRecordID)
            ->setPassword($password)
            ->setResult($result)
            ->setUsername($username);
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
     * @return \SportEventIstanbul\StructType\SetMemberResultInput
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
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \SportEventIstanbul\StructType\SetMemberResultInput
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get Result value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getResult()
    {
        return isset($this->Result) ? $this->Result : null;
    }
    /**
     * Set Result value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $result
     * @return \SportEventIstanbul\StructType\SetMemberResultInput
     */
    public function setResult($result = null)
    {
        // validation for constraint: string
        if (!is_null($result) && !is_string($result)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($result, true), gettype($result)), __LINE__);
        }
        if (is_null($result) || (is_array($result) && empty($result))) {
            unset($this->Result);
        } else {
            $this->Result = $result;
        }
        return $this;
    }
    /**
     * Get Username value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUsername()
    {
        return isset($this->Username) ? $this->Username : null;
    }
    /**
     * Set Username value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $username
     * @return \SportEventIstanbul\StructType\SetMemberResultInput
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        if (is_null($username) || (is_array($username) && empty($username))) {
            unset($this->Username);
        } else {
            $this->Username = $username;
        }
        return $this;
    }
}
