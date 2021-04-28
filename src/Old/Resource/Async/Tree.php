<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\CommandBus\Command\Repository\DetailedCommitCommand;
use ApiClients\Client\Github\Resource\Tree as BaseTree;
use React\Promise\PromiseInterface;

class Tree extends BaseTree
{
    public function refresh(): Tree
    {
        throw new \Exception('TODO: create refresh method!');
    }

    public function detailedCommit(): PromiseInterface
    {
        return $this->handleCommand(new DetailedCommitCommand(
            \str_replace('/commits/' . $this->sha, '', \explode('/repos/', $this->url)[1]),
            $this->sha
        ));
    }
}
