<?php

namespace SportEventIstanbul\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetMemberResultResponse StructType
 * @subpackage Structs
 * @author Mustafa KARALI
 */
class SetMemberResultResponse extends AbstractStructBase
{
    /**
     * The SetMemberResultResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SportEventIstanbul\StructType\SetMemberResultOutput
     */
    public $SetMemberResultResult;
    /**
     * Constructor method for SetMemberResultResponse
     * @uses SetMemberResultResponse::setSetMemberResultResult()
     * @param \SportEventIstanbul\StructType\SetMemberResultOutput $setMemberResultResult
     */
    public function __construct(\SportEventIstanbul\StructType\SetMemberResultOutput $setMemberResultResult = null)
    {
        $this
            ->setSetMemberResultResult($setMemberResultResult);
    }
    /**
     * Get SetMemberResultResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SportEventIstanbul\StructType\SetMemberResultOutput|null
     */
    public function getSetMemberResultResult()
    {
        return isset($this->SetMemberResultResult) ? $this->SetMemberResultResult : null;
    }
    /**
     * Set SetMemberResultResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SportEventIstanbul\StructType\SetMemberResultOutput $setMemberResultResult
     * @return \SportEventIstanbul\StructType\SetMemberResultResponse
     */
    public function setSetMemberResultResult(\SportEventIstanbul\StructType\SetMemberResultOutput $setMemberResultResult = null)
    {
        if (is_null($setMemberResultResult) || (is_array($setMemberResultResult) && empty($setMemberResultResult))) {
            unset($this->SetMemberResultResult);
        } else {
            $this->SetMemberResultResult = $setMemberResultResult;
        }
        return $this;
    }
}
