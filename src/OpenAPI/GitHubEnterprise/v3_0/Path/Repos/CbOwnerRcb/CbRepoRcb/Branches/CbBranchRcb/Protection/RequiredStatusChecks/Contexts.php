<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\AddStatusCheckContextsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetAllStatusCheckContextsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\RemoveStatusCheckContextsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\SetStatusCheckContextsOperation;

final class Contexts
{
    function get($owner, $repo, $branch): GetAllStatusCheckContextsOperation
    {
        return new GetAllStatusCheckContextsOperation($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): SetStatusCheckContextsOperation
    {
        return new SetStatusCheckContextsOperation($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): AddStatusCheckContextsOperation
    {
        return new AddStatusCheckContextsOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveStatusCheckContextsOperation
    {
        return new RemoveStatusCheckContextsOperation($owner, $repo, $branch);
    }
}
