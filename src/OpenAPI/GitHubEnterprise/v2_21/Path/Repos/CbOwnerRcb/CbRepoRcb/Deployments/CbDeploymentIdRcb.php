<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\DeleteDeployment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetDeployment;

final class CbDeploymentIdRcb
{
    function get($owner, $repo, $deployment_id): GetDeployment
    {
        return new GetDeployment($owner, $repo, $deployment_id);
    }

    function delete($owner, $repo, $deployment_id): DeleteDeployment
    {
        return new DeleteDeployment($owner, $repo, $deployment_id);
    }
}
