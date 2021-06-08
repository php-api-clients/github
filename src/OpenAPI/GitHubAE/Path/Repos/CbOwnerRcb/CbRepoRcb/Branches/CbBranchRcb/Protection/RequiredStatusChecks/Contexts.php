<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\RequiredStatusChecks;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddStatusCheckContexts;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAllStatusCheckContexts;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveStatusCheckContexts;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetStatusCheckContexts;

final class Contexts
{
    function get($owner, $repo, $branch): GetAllStatusCheckContexts
    {
        return new GetAllStatusCheckContexts($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): SetStatusCheckContexts
    {
        return new SetStatusCheckContexts($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): AddStatusCheckContexts
    {
        return new AddStatusCheckContexts($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveStatusCheckContexts
    {
        return new RemoveStatusCheckContexts($owner, $repo, $branch);
    }
}
