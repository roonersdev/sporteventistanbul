<?php

namespace SportEventIstanbul\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 * @author Mustafa KARALI
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SetMemberResult
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \SportEventIstanbul\StructType\SetMemberResult $parameters
     * @return \SportEventIstanbul\StructType\SetMemberResultResponse|bool
     */
    public function SetMemberResult(\SportEventIstanbul\StructType\SetMemberResult $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SetMemberResult($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \SportEventIstanbul\StructType\SetMemberResultResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
