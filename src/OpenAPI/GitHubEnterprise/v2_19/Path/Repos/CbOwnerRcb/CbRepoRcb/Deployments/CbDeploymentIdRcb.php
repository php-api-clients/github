<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetDeployment;

final class CbDeploymentIdRcb
{
    function get($owner, $repo, $deployment_id): GetDeployment
    {
        return new GetDeployment($owner, $repo, $deployment_id);
    }
}
