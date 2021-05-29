<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DeleteDeploymentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetDeploymentOperation;

final class CbDeploymentIdRcb
{
    function get($owner, $repo, $deployment_id): GetDeploymentOperation
    {
        return new GetDeploymentOperation($owner, $repo, $deployment_id);
    }

    function delete($owner, $repo, $deployment_id): DeleteDeploymentOperation
    {
        return new DeleteDeploymentOperation($owner, $repo, $deployment_id);
    }
}
