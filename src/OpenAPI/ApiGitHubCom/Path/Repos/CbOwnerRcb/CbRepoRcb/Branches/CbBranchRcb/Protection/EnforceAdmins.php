<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class EnforceAdmins
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAdminBranchProtection($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAdminBranchProtection($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAdminBranchProtection($owner, $repo, $branch);
    }
}
