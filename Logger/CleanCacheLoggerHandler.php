<?php

namespace Pronko\SelectiveCache\Logger;

use Monolog\Logger;

class CleanCacheLoggerHandler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Set Logging level
     * @var int $loggerType
     */
    protected $loggerType = Logger::INFO;

    /**
     * Set filenmae for Loggingfile
     * @var string $fileName
     */
    protected $fileName = '/var/log/pronko_selective_cache.log';
}
