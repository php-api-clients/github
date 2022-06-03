<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class EnforceAdmins
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetAdminBranchProtection($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\SetAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\SetAdminBranchProtection($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DeleteAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DeleteAdminBranchProtection($owner, $repo, $branch);
    }
}
