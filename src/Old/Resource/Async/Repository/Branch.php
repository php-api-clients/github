<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\DetailedCommitCommand;
use ApiClients\Client\Github\Resource\Repository\Branch as BaseBranch;
use Exception;
use React\Promise\PromiseInterface;

use function explode;
use function str_replace;

class Branch extends BaseBranch
{
    public function refresh(): Branch
    {
        throw new Exception('TODO: create refresh method!');
    }

    public function detailedCommit(): PromiseInterface
    {
        return $this->handleCommand(new DetailedCommitCommand(
            str_replace('/commits/' . $this->commit->sha(), '', explode('/repos/', $this->commit->url())[1]),
            $this->commit->sha()
        ));
    }
}
