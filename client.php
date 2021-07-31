<?php
$client = new SoapClient("EvaluateReport.wsdl", array(
    'trace' => 1,
    'cache_wsdl' => WSDL_CACHE_NONE
));

try {
    //打印暴露的方法
    echo "<pre>";
    print_r($client->__getFunctions());
    echo "</pre>";
    //打印对应方法的参数和参数类型
    echo "<pre>";
    print_r($client->__getTypes());
    echo "</pre>";

    echo "<hr>";
    ///调用第一个类方法functionNameOne//
    $arrParams = [
        'KEYONE'   => '第一个键值',
        'KEYTWO'   => '第二个键值',
        'KEYTHREE' => '第三个键值',
    ];
    //第一种调用方法
    $arrResultOne = $client->__soapCall('functionNameOne', [$arrParams]);
    //第二种调用方法
    //$arrResultOne = $client->receiveTaskResult($arrParams);
    echo "<pre>";
    print_r($arrResultOne);
    echo "</pre>";

    echo "<hr>";
    ///调用第二个类方法functionNameTwo//
    $arrParams = [
        'KEYONE'   => '第一个键值',
        'KEYTWO'   => '第二个键值',
        'KEYTHREE' => '第三个键值',
        'KEYFOUR'  => '第四个键值',
    ];
    $arrResultTwo = $client->__soapCall('functionNameTwo', [$arrParams]);
    echo "<pre>";
    print_r($arrResultTwo);
    echo "</pre>";

    ///调用第三个类方法functionNameThree//
    $arrParams = [
        /*'KEYONE'   => '第一个键值',
        'KEYTWO'   => '第二个键值',
        'KEYTHREE' => '第三个键值',
        'KEYFOUR'  => '第四个键值',*/
        'KEYFIVE'  => '第五个键1值',
        'KEYSIX'   => '第六个键值',
    ];
    $arrResultThree = $client->__soapCall('functionNameThree', [$arrParams]);
    echo "<pre>";
    print_r($arrResultThree);
    echo "</pre>";

}catch (SoapFault $f){
    echo "Error Message: {$f->getMessage()}";
    //問題1：Error Message: Procedure 'functionNameThree' not present
    //解決方法：將server的tmp目錄下的wsdl文件刪除
}