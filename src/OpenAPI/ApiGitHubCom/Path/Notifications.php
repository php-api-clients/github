<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListNotificationsForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\MarkNotificationsAsRead;

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
