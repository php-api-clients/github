<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Starred\CbOwnerRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\CheckRepoIsStarredByAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\StarRepoForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\UnstarRepoForAuthenticatedUser;

final class CbRepoRcb
{
    function get($owner, $repo): CheckRepoIsStarredByAuthenticatedUser
    {
        return new CheckRepoIsStarredByAuthenticatedUser($owner, $repo);
    }

    function put($owner, $repo): StarRepoForAuthenticatedUser
    {
        return new StarRepoForAuthenticatedUser($owner, $repo);
    }

    function delete($owner, $repo): UnstarRepoForAuthenticatedUser
    {
        return new UnstarRepoForAuthenticatedUser($owner, $repo);
    }
}
