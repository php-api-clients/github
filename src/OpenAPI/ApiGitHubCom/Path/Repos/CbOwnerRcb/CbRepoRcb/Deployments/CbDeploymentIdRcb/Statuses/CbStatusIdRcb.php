<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses;

final class CbStatusIdRcb
{
    function get($owner, $repo, $deployment_id, $status_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentStatus($owner, $repo, $deployment_id, $status_id);
    }
}
