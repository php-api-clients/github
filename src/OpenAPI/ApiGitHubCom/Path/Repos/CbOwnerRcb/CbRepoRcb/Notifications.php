<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListRepoNotificationsForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkRepoNotificationsAsRead;

final class Notifications
{
    function get($owner, $repo, bool $all = false, bool $participating = false, $since, $before, int $per_page = 30, int $page = 1): ListRepoNotificationsForAuthenticatedUser
    {
        return new ListRepoNotificationsForAuthenticatedUser($owner, $repo, $all, $participating, $since, $before, $per_page, $page);
    }

    function put($owner, $repo): MarkRepoNotificationsAsRead
    {
        return new MarkRepoNotificationsAsRead($owner, $repo);
    }
}
