<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetDeploymentOperation;

final class CbDeploymentIdRcb
{
    function get($owner, $repo, $deployment_id): GetDeploymentOperation
    {
        return new GetDeploymentOperation($owner, $repo, $deployment_id);
    }
}
