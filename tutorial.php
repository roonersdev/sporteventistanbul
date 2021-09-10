<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'main.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \SportEventIstanbul\ClassMap::get(),
);
/**
 * Samples for Get ServiceType
 */
$get = new \SportEventIstanbul\ServiceType\Get($options);
/**
 * Sample call for GetMemberRecord operation/method
 */
if ($get->GetMemberRecord(new \SportEventIstanbul\StructType\GetMemberRecord()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Set ServiceType
 */
$set = new \SportEventIstanbul\ServiceType\Set($options);
/**
 * Sample call for SetMemberResult operation/method
 */
if ($set->SetMemberResult(new \SportEventIstanbul\StructType\SetMemberResult()) !== false) {
    print_r($set->getResult());
} else {
    print_r($set->getLastError());
}
