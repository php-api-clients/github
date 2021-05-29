<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User\Starred\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\CheckRepoIsStarredByAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\StarRepoForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\UnstarRepoForAuthenticatedUserOperation;

final class CbRepoRcb
{
    function get($owner, $repo): CheckRepoIsStarredByAuthenticatedUserOperation
    {
        return new CheckRepoIsStarredByAuthenticatedUserOperation($owner, $repo);
    }

    function put($owner, $repo): StarRepoForAuthenticatedUserOperation
    {
        return new StarRepoForAuthenticatedUserOperation($owner, $repo);
    }

    function delete($owner, $repo): UnstarRepoForAuthenticatedUserOperation
    {
        return new UnstarRepoForAuthenticatedUserOperation($owner, $repo);
    }
}
