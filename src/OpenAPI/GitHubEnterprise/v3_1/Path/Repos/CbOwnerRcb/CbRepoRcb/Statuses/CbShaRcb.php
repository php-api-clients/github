<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Statuses;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitStatusOperation;

final class CbShaRcb
{
    function post($owner, $repo, $sha): CreateCommitStatusOperation
    {
        return new CreateCommitStatusOperation($owner, $repo, $sha);
    }
}
