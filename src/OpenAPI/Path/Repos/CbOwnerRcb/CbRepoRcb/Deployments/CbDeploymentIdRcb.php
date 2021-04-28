<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Deployments;

final class CbDeploymentIdRcb
{
    function get($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetDeploymentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetDeploymentOperation($owner, $repo, $deployment_id);
    }
    function delete($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteDeploymentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteDeploymentOperation($owner, $repo, $deployment_id);
    }
}
