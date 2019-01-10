<?php declare(strict_types=1);

use Rx\Scheduler;

require \dirname(__DIR__) . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';

try {
    Scheduler::setDefaultFactory(function () {
        return Scheduler::getImmediate();
    });
} catch (Throwable $t) {
}
