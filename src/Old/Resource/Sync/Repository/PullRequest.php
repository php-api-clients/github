<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Sync\Repository;

use ApiClients\Client\Github\Resource\Repository\PullRequest as BasePullRequest;
use ApiClients\Client\Github\Resource\Repository\PullRequestInterface;
use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;

class PullRequest extends BasePullRequest
{
    public function refresh(): PullRequest
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(static function (PullRequestInterface $pullRequest) {
            return $pullRequest->refresh();
        }));
    }
}
