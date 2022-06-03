<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb;

final class Statuses
{
    function get($owner, $repo, $deployment_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListDeploymentStatuses
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListDeploymentStatuses($owner, $repo, $deployment_id, $per_page, $page);
    }
    function post($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreateDeploymentStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreateDeploymentStatus($owner, $repo, $deployment_id);
    }
}
