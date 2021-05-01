<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks;

final class Contexts
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos\GetAllStatusCheckContextsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos\GetAllStatusCheckContextsOperation($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos\SetStatusCheckContextsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos\SetStatusCheckContextsOperation($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos\AddStatusCheckContextsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos\AddStatusCheckContextsOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos\RemoveStatusCheckContextsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos\RemoveStatusCheckContextsOperation($owner, $repo, $branch);
    }
}
