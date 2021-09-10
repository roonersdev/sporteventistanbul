<?php

namespace SportEventIstanbul\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMemberRecordResponse StructType
 * @subpackage Structs
 * @author Mustafa KARALI
 */
class GetMemberRecordResponse extends AbstractStructBase
{
    /**
     * The GetMemberRecordResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \SportEventIstanbul\StructType\GetMemberRecordOutput
     */
    public $GetMemberRecordResult;
    /**
     * Constructor method for GetMemberRecordResponse
     * @uses GetMemberRecordResponse::setGetMemberRecordResult()
     * @param \SportEventIstanbul\StructType\GetMemberRecordOutput $getMemberRecordResult
     */
    public function __construct(\SportEventIstanbul\StructType\GetMemberRecordOutput $getMemberRecordResult = null)
    {
        $this
            ->setGetMemberRecordResult($getMemberRecordResult);
    }
    /**
     * Get GetMemberRecordResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \SportEventIstanbul\StructType\GetMemberRecordOutput|null
     */
    public function getGetMemberRecordResult()
    {
        return isset($this->GetMemberRecordResult) ? $this->GetMemberRecordResult : null;
    }
    /**
     * Set GetMemberRecordResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \SportEventIstanbul\StructType\GetMemberRecordOutput $getMemberRecordResult
     * @return \SportEventIstanbul\StructType\GetMemberRecordResponse
     */
    public function setGetMemberRecordResult(\SportEventIstanbul\StructType\GetMemberRecordOutput $getMemberRecordResult = null)
    {
        if (is_null($getMemberRecordResult) || (is_array($getMemberRecordResult) && empty($getMemberRecordResult))) {
            unset($this->GetMemberRecordResult);
        } else {
            $this->GetMemberRecordResult = $getMemberRecordResult;
        }
        return $this;
    }
}
