<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments;

final class CbDeploymentIdRcb
{
    function get($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetDeployment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetDeployment($owner, $repo, $deployment_id);
    }
    function delete($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DeleteDeployment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DeleteDeployment($owner, $repo, $deployment_id);
    }
}
