<?php

namespace SportEventIstanbul\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberRecordInput StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetMemberRecordInput
 * @subpackage Structs
 * @author Mustafa KARALI
 */
class GetMemberRecordInput extends AbstractStructBase
{
    /**
     * The IdentityNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $IdentityNumber;
    /**
     * The OrderNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OrderNumber;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The Username
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Username;
    /**
     * Constructor method for GetMemberRecordInput
     * @uses GetMemberRecordInput::setIdentityNumber()
     * @uses GetMemberRecordInput::setOrderNumber()
     * @uses GetMemberRecordInput::setPassword()
     * @uses GetMemberRecordInput::setUsername()
     * @param string $identityNumber
     * @param string $orderNumber
     * @param string $password
     * @param string $username
     */
    public function __construct($identityNumber = null, $orderNumber = null, $password = null, $username = null)
    {
        $this
            ->setIdentityNumber($identityNumber)
            ->setOrderNumber($orderNumber)
            ->setPassword($password)
            ->setUsername($username);
    }
    /**
     * Get IdentityNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIdentityNumber()
    {
        return isset($this->IdentityNumber) ? $this->IdentityNumber : null;
    }
    /**
     * Set IdentityNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $identityNumber
     * @return \SportEventIstanbul\StructType\GetMemberRecordInput
     */
    public function setIdentityNumber($identityNumber = null)
    {
        // validation for constraint: string
        if (!is_null($identityNumber) && !is_string($identityNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identityNumber, true), gettype($identityNumber)), __LINE__);
        }
        if (is_null($identityNumber) || (is_array($identityNumber) && empty($identityNumber))) {
            unset($this->IdentityNumber);
        } else {
            $this->IdentityNumber = $identityNumber;
        }
        return $this;
    }
    /**
     * Get OrderNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOrderNumber()
    {
        return isset($this->OrderNumber) ? $this->OrderNumber : null;
    }
    /**
     * Set OrderNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $orderNumber
     * @return \SportEventIstanbul\StructType\GetMemberRecordInput
     */
    public function setOrderNumber($orderNumber = null)
    {
        // validation for constraint: string
        if (!is_null($orderNumber) && !is_string($orderNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderNumber, true), gettype($orderNumber)), __LINE__);
        }
        if (is_null($orderNumber) || (is_array($orderNumber) && empty($orderNumber))) {
            unset($this->OrderNumber);
        } else {
            $this->OrderNumber = $orderNumber;
        }
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
     * @return \SportEventIstanbul\StructType\GetMemberRecordInput
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
     * @return \SportEventIstanbul\StructType\GetMemberRecordInput
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
