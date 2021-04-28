<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb;

final class Statuses
{
    function get($owner, $repo, $deployment_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListDeploymentStatusesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListDeploymentStatusesOperation($owner, $repo, $deployment_id, $per_page, $page);
    }
    function post($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateDeploymentStatusOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CreateDeploymentStatusOperation($owner, $repo, $deployment_id);
    }
}
