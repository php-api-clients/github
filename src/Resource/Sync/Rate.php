<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\Rate as BaseRate;
use ApiClients\Client\Github\Resource\RateInterface;

class Rate extends BaseRate
{
    public function refresh() : Rate
    {
        return $this->wait(
            $this->handleCommand(
                new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
            )->then(function (RateInterface $rate) {
                return $rate->refresh();
            })
        );
    }
}
