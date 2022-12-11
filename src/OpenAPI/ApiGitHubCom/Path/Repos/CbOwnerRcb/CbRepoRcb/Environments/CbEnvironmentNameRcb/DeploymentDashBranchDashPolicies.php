<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb;

final class DeploymentDashBranchDashPolicies
{
    function get($owner, $repo, $environment_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentBranchPolicies
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentBranchPolicies($owner, $repo, $environment_name, $per_page, $page);
    }
    function post($owner, $repo, $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentBranchPolicy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentBranchPolicy($owner, $repo, $environment_name);
    }
}
