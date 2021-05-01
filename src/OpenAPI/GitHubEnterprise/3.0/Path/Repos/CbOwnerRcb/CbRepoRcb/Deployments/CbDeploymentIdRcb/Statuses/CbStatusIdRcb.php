<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses;

final class CbStatusIdRcb
{
    function get($owner, $repo, $deployment_id, $status_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Repos\GetDeploymentStatusOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Repos\GetDeploymentStatusOperation($owner, $repo, $deployment_id, $status_id);
    }
}
