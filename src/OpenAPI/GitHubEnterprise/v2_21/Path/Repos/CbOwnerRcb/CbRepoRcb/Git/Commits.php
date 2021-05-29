<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Git\CreateCommit;

final class Commits
{
    function post($owner, $repo): CreateCommit
    {
        return new CreateCommit($owner, $repo);
    }
}
