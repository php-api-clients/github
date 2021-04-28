<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb\Statuses;

final class CbStatusIdRcb
{
    function get($owner, $repo, $deployment_id, $status_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetDeploymentStatusOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetDeploymentStatusOperation($owner, $repo, $deployment_id, $status_id);
    }
}
