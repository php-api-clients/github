<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Statuses;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\CreateCommitStatusOperation;

final class CbShaRcb
{
    function post($owner, $repo, $sha): CreateCommitStatusOperation
    {
        return new CreateCommitStatusOperation($owner, $repo, $sha);
    }
}
