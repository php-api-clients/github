<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Deployments\CbDeploymentIdRcb;

final class Statuses
{
    function get($owner, $repo, $deployment_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListDeploymentStatuses
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListDeploymentStatuses($owner, $repo, $deployment_id, $per_page, $page);
    }
    function post($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateDeploymentStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateDeploymentStatus($owner, $repo, $deployment_id);
    }
}