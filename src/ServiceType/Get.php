<?php

namespace SportEventIstanbul\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 * @author Mustafa KARALI
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetMemberRecord
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SportEventIstanbul\StructType\GetMemberRecord $parameters
     * @return \SportEventIstanbul\StructType\GetMemberRecordResponse|bool
     */
    public function GetMemberRecord(\SportEventIstanbul\StructType\GetMemberRecord $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMemberRecord($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SportEventIstanbul\StructType\GetMemberRecordResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
