<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetDeploymentStatus;

final class CbStatusIdRcb
{
    function get($owner, $repo, $deployment_id, $status_id): GetDeploymentStatus
    {
        return new GetDeploymentStatus($owner, $repo, $deployment_id, $status_id);
    }
}
