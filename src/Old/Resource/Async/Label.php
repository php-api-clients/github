<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\RefreshCommand;
use ApiClients\Client\Github\CommandBus\Command\SaveCommand;
use ApiClients\Client\Github\Resource\Label as BaseLabel;
use React\Promise\PromiseInterface;

class Label extends BaseLabel
{
    public function refresh(): PromiseInterface
    {
        return $this->handleCommand(
            new RefreshCommand($this)
        );
    }

    public function save(): PromiseInterface
    {
        return $this->handleCommand(
            new SaveCommand(
                self::HYDRATE_CLASS,
                [
                    'name'  => $this->name(),
                    'color' => $this->color(),
                ],
                $this->url()
            )
        );
    }
}
