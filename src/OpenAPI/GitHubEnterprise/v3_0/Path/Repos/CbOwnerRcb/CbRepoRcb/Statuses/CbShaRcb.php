<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Statuses;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\CreateCommitStatus;

final class CbShaRcb
{
    function post($owner, $repo, $sha): CreateCommitStatus
    {
        return new CreateCommitStatus($owner, $repo, $sha);
    }
}
