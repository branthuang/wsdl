<?php

class EvaluateReport
{
    private $returnData = [
        'INFO' => 'info',
        'STATUS' => 'status',
    ];

    private $exception = 'exception msg';

    public function __construct()
    {

    }

    /**
     *  第一个类方法
     *  @access public
     *  @author GPS
     *  @param
     *  @return
     *  @time   2018-05-09
     */
    public function functionNameOne($variableNameOne)
    {
        foreach ($variableNameOne as $key => $item) {
            file_put_contents(__DIR__ . "/WSDL.txt", $key . '--'.$item.PHP_EOL, FILE_APPEND);
        }
        $jsonData = json_encode($variableNameOne, JSON_UNESCAPED_UNICODE);
        file_put_contents(__DIR__ . "/WSDL.txt", time().PHP_EOL, FILE_APPEND);

        return $returnData = [
            'INFO' => $jsonData,
            'STATUS' => 'status',
        ];
    }

    /**
     *  第二个类方法
     *  @access public
     *  @author GPS
     *  @param
     *  @return
     *  @time   2018-05-09
     */
    public function functionNameTwo($variableNameTwo)
    {
        foreach ($variableNameTwo as $key => $item) {
            file_put_contents(__DIR__ . "/WSDL.txt", $key . '--'.$item.PHP_EOL, FILE_APPEND);
        }
        $jsonData = json_encode($variableNameTwo, JSON_UNESCAPED_UNICODE);
        file_put_contents(__DIR__ . "/WSDL.txt", time().PHP_EOL, FILE_APPEND);

        return $returnData = [
            'INFO' => $jsonData,
            'STATUS' => 'status',
        ];
    }

    /**
     *  第三个类方法
     *  @access public
     *  @author GPS
     *  @param
     *  @return
     *  @time   2018-05-09
     */
    public function functionNameThree($variableNameThree)
    {
        foreach ($variableNameThree as $key => $item) {
            file_put_contents(__DIR__ . "/WSDL.txt", $key . '--'.$item.PHP_EOL, FILE_APPEND);
        }
        $jsonData = json_encode($variableNameThree, JSON_UNESCAPED_UNICODE);
        file_put_contents(__DIR__ . "/WSDL.txt", time().PHP_EOL, FILE_APPEND);

        return $returnData = [
            'INFO' => $jsonData,
            'STATUS' => 'status',
        ];
    }

    public function Exception($exception)
    {
        return $this->exception;
    }
}