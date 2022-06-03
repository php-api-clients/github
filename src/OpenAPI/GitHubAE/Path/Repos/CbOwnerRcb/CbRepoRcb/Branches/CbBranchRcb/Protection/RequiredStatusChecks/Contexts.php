<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks;

final class Contexts
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAllStatusCheckContexts
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAllStatusCheckContexts($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetStatusCheckContexts
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetStatusCheckContexts($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddStatusCheckContexts
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddStatusCheckContexts($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveStatusCheckContexts
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveStatusCheckContexts($owner, $repo, $branch);
    }
}
