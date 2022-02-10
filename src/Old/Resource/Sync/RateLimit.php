<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Client\Github\Resource\RateLimit as BaseRateLimit;
use ApiClients\Client\Github\Resource\RateLimitInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class RateLimit extends BaseRateLimit
{
    public function refresh(): RateLimit
    {
        return $this->wait(
            $this->handleCommand(
                new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
            )->then(static function (RateLimitInterface $rateLimit) {
                return $rateLimit->refresh();
            })
        );
    }
}
