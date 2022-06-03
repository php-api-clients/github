<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses;

final class CbStatusIdRcb
{
    function get($owner, $repo, $deployment_id, $status_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeploymentStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeploymentStatus($owner, $repo, $deployment_id, $status_id);
    }
}
