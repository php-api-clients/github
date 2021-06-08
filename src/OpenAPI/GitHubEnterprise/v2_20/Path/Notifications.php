<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity\ListNotificationsForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity\MarkNotificationsAsRead;

final class Notifications
{
    function get(bool $all = false, bool $participating = false, $since, $before, int $per_page = 30, int $page = 1): ListNotificationsForAuthenticatedUser
    {
        return new ListNotificationsForAuthenticatedUser($all, $participating, $since, $before, $per_page, $page);
    }

    function put(): MarkNotificationsAsRead
    {
        return new MarkNotificationsAsRead();
    }
}
