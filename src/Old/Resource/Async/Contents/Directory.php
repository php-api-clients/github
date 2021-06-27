<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Contents;

use ApiClients\Client\Github\CommandBus\Command\Repository\ContentsCommand;
use ApiClients\Client\Github\Resource\Contents\Directory as BaseDirectory;
use Exception;
use Rx\Observable;

use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

class Directory extends BaseDirectory
{
    public function refresh(): Directory
    {
        throw new Exception('TODO: create refresh method!');
    }

    public function contents(): Observable
    {
        return unwrapObservableFromPromise(
            $this->handleCommand(
                new ContentsCommand($this->repository_fullname, $this->path)
            )
        );
    }
}
