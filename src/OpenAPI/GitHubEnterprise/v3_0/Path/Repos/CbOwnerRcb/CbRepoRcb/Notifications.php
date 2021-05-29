<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\ListRepoNotificationsForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\MarkRepoNotificationsAsReadOperation;

final class Notifications
{
    function get($owner, $repo, bool $all = false, bool $participating = false, $since, $before, int $per_page = 30, int $page = 1): ListRepoNotificationsForAuthenticatedUserOperation
    {
        return new ListRepoNotificationsForAuthenticatedUserOperation($owner, $repo, $all, $participating, $since, $before, $per_page, $page);
    }

    function put($owner, $repo): MarkRepoNotificationsAsReadOperation
    {
        return new MarkRepoNotificationsAsReadOperation($owner, $repo);
    }
}
