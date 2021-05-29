<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Git\CreateCommitOperation;

final class Commits
{
    function post($owner, $repo): CreateCommitOperation
    {
        return new CreateCommitOperation($owner, $repo);
    }
}
