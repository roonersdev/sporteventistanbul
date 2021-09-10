<?php

namespace SportEventIstanbul\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberRecord StructType
 * @subpackage Structs
 * @author Mustafa KARALI
 */
class GetMemberRecord extends AbstractStructBase
{
    /**
     * The input
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SportEventIstanbul\StructType\GetMemberRecordInput
     */
    public $input;
    /**
     * Constructor method for GetMemberRecord
     * @uses GetMemberRecord::setInput()
     * @param \SportEventIstanbul\StructType\GetMemberRecordInput $input
     */
    public function __construct(\SportEventIstanbul\StructType\GetMemberRecordInput $input = null)
    {
        $this
            ->setInput($input);
    }
    /**
     * Get input value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SportEventIstanbul\StructType\GetMemberRecordInput|null
     */
    public function getInput()
    {
        return isset($this->input) ? $this->input : null;
    }
    /**
     * Set input value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SportEventIstanbul\StructType\GetMemberRecordInput $input
     * @return \SportEventIstanbul\StructType\GetMemberRecord
     */
    public function setInput(\SportEventIstanbul\StructType\GetMemberRecordInput $input = null)
    {
        if (is_null($input) || (is_array($input) && empty($input))) {
            unset($this->input);
        } else {
            $this->input = $input;
        }
        return $this;
    }
}
