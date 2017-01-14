<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use ApiClients\Client\Github\Resource\Label as BaseLabel;
use ApiClients\Client\Github\Resource\LabelInterface;

class Label extends BaseLabel
{
    public function refresh() : Label
    {
        return $this->wait(
            $this->handleCommand(
                new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this)
            )->then(function (LabelInterface $label) {
                return $label->refresh();
            })
        );
    }
}
