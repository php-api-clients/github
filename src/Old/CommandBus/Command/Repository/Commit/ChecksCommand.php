<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command\Repository\Commit;

use ApiClients\Client\Github\Resource\Async\Repository\Commit;
use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\Repository\Commit\ChecksHandler")
 */
final class ChecksCommand
{
    private Commit $commit;

    public function __construct(Commit $commit)
    {
        $this->commit = $commit;
    }

    public function getCommit(): Commit
    {
        return $this->commit;
    }
}
