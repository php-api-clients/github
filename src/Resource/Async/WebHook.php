<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\PingWebHookCommand;
use ApiClients\Client\Github\Resource\WebHook as BaseWebHook;
use React\Promise\PromiseInterface;

class WebHook extends BaseWebHook
{
    public function refresh(): WebHook
    {
        throw new \Exception('TODO: create refresh method!');
    }

    public function ping(): PromiseInterface
    {
        return $this->handleCommand(
            new PingWebHookCommand($this->pingUrl())
        );
    }
}
