<?php

namespace SportEventIstanbul\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMemberResult StructType
 * @subpackage Structs
 * @author Mustafa KARALI
 */
class SetMemberResult extends AbstractStructBase
{
    /**
     * The input
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SportEventIstanbul\StructType\SetMemberResultInput
     */
    public $input;
    /**
     * Constructor method for SetMemberResult
     * @uses SetMemberResult::setInput()
     * @param \SportEventIstanbul\StructType\SetMemberResultInput $input
     */
    public function __construct(\SportEventIstanbul\StructType\SetMemberResultInput $input = null)
    {
        $this
            ->setInput($input);
    }
    /**
     * Get input value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SportEventIstanbul\StructType\SetMemberResultInput|null
     */
    public function getInput()
    {
        return isset($this->input) ? $this->input : null;
    }
    /**
     * Set input value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SportEventIstanbul\StructType\SetMemberResultInput $input
     * @return \SportEventIstanbul\StructType\SetMemberResult
     */
    public function setInput(\SportEventIstanbul\StructType\SetMemberResultInput $input = null)
    {
        if (is_null($input) || (is_array($input) && empty($input))) {
            unset($this->input);
        } else {
            $this->input = $input;
        }
        return $this;
    }
}
