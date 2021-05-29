<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Statuses;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateCommitStatus;

final class CbShaRcb
{
    function post($owner, $repo, $sha): CreateCommitStatus
    {
        return new CreateCommitStatus($owner, $repo, $sha);
    }
}
