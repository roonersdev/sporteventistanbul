<?php

namespace SportEventIstanbul;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetMemberRecord' => '\\SportEventIstanbul\\StructType\\GetMemberRecord',
            'GetMemberRecordResponse' => '\\SportEventIstanbul\\StructType\\GetMemberRecordResponse',
            'SetMemberResult' => '\\SportEventIstanbul\\StructType\\SetMemberResult',
            'SetMemberResultResponse' => '\\SportEventIstanbul\\StructType\\SetMemberResultResponse',
            'GetMemberRecordInput' => '\\SportEventIstanbul\\StructType\\GetMemberRecordInput',
            'GetMemberRecordOutput' => '\\SportEventIstanbul\\StructType\\GetMemberRecordOutput',
            'SetMemberResultInput' => '\\SportEventIstanbul\\StructType\\SetMemberResultInput',
            'SetMemberResultOutput' => '\\SportEventIstanbul\\StructType\\SetMemberResultOutput',
        );
    }
}
