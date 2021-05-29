<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentStatusOperation;

final class CbStatusIdRcb
{
    function get($owner, $repo, $deployment_id, $status_id): GetDeploymentStatusOperation
    {
        return new GetDeploymentStatusOperation($owner, $repo, $deployment_id, $status_id);
    }
}
