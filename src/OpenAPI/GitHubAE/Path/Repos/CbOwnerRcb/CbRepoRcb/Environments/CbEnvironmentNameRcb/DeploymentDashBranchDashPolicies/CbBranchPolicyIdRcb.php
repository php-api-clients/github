<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Environments\CbEnvironmentNameRcb\DeploymentDashBranchDashPolicies;

final class CbBranchPolicyIdRcb
{
    function get($owner, $repo, $environment_name, $branch_policy_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeploymentBranchPolicy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetDeploymentBranchPolicy($owner, $repo, $environment_name, $branch_policy_id);
    }
    function put($owner, $repo, $environment_name, $branch_policy_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateDeploymentBranchPolicy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateDeploymentBranchPolicy($owner, $repo, $environment_name, $branch_policy_id);
    }
    function delete($owner, $repo, $environment_name, $branch_policy_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeploymentBranchPolicy
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteDeploymentBranchPolicy($owner, $repo, $environment_name, $branch_policy_id);
    }
}
