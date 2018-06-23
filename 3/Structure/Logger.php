<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 23.06.2018
 * Time: 15:02
 */

namespace Structure;


class Logger
{

    CONST LOG_TYPE_ERROR = "error";
    CONST LOG_TYPE_WARNING = "warning";
    CONST LOG_TYPE_INFO = "info";
    CONST LOG_TYPE_SUCCESS = "success";

    protected $fh;

    public function __construct()
    {
        $this->fh = fopen(APP_PATH . DIRECTORY_SEPARATOR . "log" . DIRECTORY_SEPARATOR . "log.log", "w+");
    }

    public function __destruct()
    {
        fclose($this->fh);
    }

    protected function log($type, $line)
    {
        fwrite($this->fh, date("Y-m-d H:i:s") . "\t$type\t" . $line . "\n");
    }


    public function info($logLine)
    {
        $this->log(self::LOG_TYPE_INFO, $logLine);
    }

    public function warning($logLine)
    {
        $this->log(self::LOG_TYPE_WARNING, $logLine);
    }

    public function error($logLine)
    {
        $this->log(self::LOG_TYPE_ERROR, $logLine);
    }

    public function success($logLine)
    {
        $this->log(self::LOG_TYPE_SUCCESS, $logLine);
    }

}