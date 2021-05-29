<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\CreateDeploymentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ListDeploymentsOperation;

final class Deployments
{
    function get($owner, $repo, string $sha = 'none', string $ref = 'none', string $task = 'none', string $environment = 'none', int $per_page = 30, int $page = 1): ListDeploymentsOperation
    {
        return new ListDeploymentsOperation($owner, $repo, $sha, $ref, $task, $environment, $per_page, $page);
    }

    function post($owner, $repo): CreateDeploymentOperation
    {
        return new CreateDeploymentOperation($owner, $repo);
    }
}
