<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Deployments;

final class CbDeploymentIdRcb
{
    function get($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeploymentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeploymentOperation($owner, $repo, $deployment_id);
    }
    function delete($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteDeploymentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteDeploymentOperation($owner, $repo, $deployment_id);
    }
}
