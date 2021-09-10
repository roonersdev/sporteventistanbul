<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ba83722653881632cbbba17496323e7
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WsdlToPhp\\PackageBase\\' => 22,
        ),
        'S' => 
        array (
            'SportEventIstanbul\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WsdlToPhp\\PackageBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/wsdltophp/packagebase/src',
        ),
        'SportEventIstanbul\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'SportEventIstanbul\\ClassMap' => __DIR__ . '/../..' . '/src/ClassMap.php',
        'SportEventIstanbul\\ServiceType\\Get' => __DIR__ . '/../..' . '/src/ServiceType/Get.php',
        'SportEventIstanbul\\ServiceType\\Set' => __DIR__ . '/../..' . '/src/ServiceType/Set.php',
        'SportEventIstanbul\\StructType\\GetMemberRecord' => __DIR__ . '/../..' . '/src/StructType/GetMemberRecord.php',
        'SportEventIstanbul\\StructType\\GetMemberRecordInput' => __DIR__ . '/../..' . '/src/StructType/GetMemberRecordInput.php',
        'SportEventIstanbul\\StructType\\GetMemberRecordOutput' => __DIR__ . '/../..' . '/src/StructType/GetMemberRecordOutput.php',
        'SportEventIstanbul\\StructType\\GetMemberRecordResponse' => __DIR__ . '/../..' . '/src/StructType/GetMemberRecordResponse.php',
        'SportEventIstanbul\\StructType\\SetMemberResult' => __DIR__ . '/../..' . '/src/StructType/SetMemberResult.php',
        'SportEventIstanbul\\StructType\\SetMemberResultInput' => __DIR__ . '/../..' . '/src/StructType/SetMemberResultInput.php',
        'SportEventIstanbul\\StructType\\SetMemberResultOutput' => __DIR__ . '/../..' . '/src/StructType/SetMemberResultOutput.php',
        'SportEventIstanbul\\StructType\\SetMemberResultResponse' => __DIR__ . '/../..' . '/src/StructType/SetMemberResultResponse.php',
        'WsdlToPhp\\PackageBase\\AbstractSoapClientBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractSoapClientBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructArrayBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructArrayBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructBase.php',
        'WsdlToPhp\\PackageBase\\AbstractStructEnumBase' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/AbstractStructEnumBase.php',
        'WsdlToPhp\\PackageBase\\SoapClientInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/SoapClientInterface.php',
        'WsdlToPhp\\PackageBase\\StructArrayInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructArrayInterface.php',
        'WsdlToPhp\\PackageBase\\StructEnumInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructEnumInterface.php',
        'WsdlToPhp\\PackageBase\\StructInterface' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/StructInterface.php',
        'WsdlToPhp\\PackageBase\\Utils' => __DIR__ . '/..' . '/wsdltophp/packagebase/src/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ba83722653881632cbbba17496323e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ba83722653881632cbbba17496323e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ba83722653881632cbbba17496323e7::$classMap;

        }, null, ClassLoader::class);
    }
}
