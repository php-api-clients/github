<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks;

final class Contexts
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetAllStatusCheckContextsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetAllStatusCheckContextsOperation($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\SetStatusCheckContextsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\SetStatusCheckContextsOperation($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddStatusCheckContextsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddStatusCheckContextsOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveStatusCheckContextsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveStatusCheckContextsOperation($owner, $repo, $branch);
    }
}
