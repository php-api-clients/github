<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

final class RequiredStatusChecks
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetStatusChecksProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetStatusChecksProtection($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveStatusCheckProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveStatusCheckProtection($owner, $repo, $branch);
    }
    function patch($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateStatusCheckProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\UpdateStatusCheckProtection($owner, $repo, $branch);
    }
}