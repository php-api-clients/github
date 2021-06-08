<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreateDeploymentStatus;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListDeploymentStatuses;

final class Statuses
{
    function get($owner, $repo, $deployment_id, int $per_page = 30, int $page = 1): ListDeploymentStatuses
    {
        return new ListDeploymentStatuses($owner, $repo, $deployment_id, $per_page, $page);
    }

    function post($owner, $repo, $deployment_id): CreateDeploymentStatus
    {
        return new CreateDeploymentStatus($owner, $repo, $deployment_id);
    }
}
