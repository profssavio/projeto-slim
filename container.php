<?php

use Monolog\Logger;

return [
    LoggerInterface::class => DI\create( Logger::class ),
];