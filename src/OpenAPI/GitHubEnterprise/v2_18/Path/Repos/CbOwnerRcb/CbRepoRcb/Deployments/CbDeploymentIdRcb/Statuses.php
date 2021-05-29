<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\CreateDeploymentStatusOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ListDeploymentStatusesOperation;

final class Statuses
{
    function get($owner, $repo, $deployment_id, int $per_page = 30, int $page = 1): ListDeploymentStatusesOperation
    {
        return new ListDeploymentStatusesOperation($owner, $repo, $deployment_id, $per_page, $page);
    }

    function post($owner, $repo, $deployment_id): CreateDeploymentStatusOperation
    {
        return new CreateDeploymentStatusOperation($owner, $repo, $deployment_id);
    }
}
