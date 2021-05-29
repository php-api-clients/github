<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\ListNotificationsForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\MarkNotificationsAsReadOperation;

final class Notifications
{
    function get(bool $all = false, bool $participating = false, $since, $before, int $per_page = 30, int $page = 1): ListNotificationsForAuthenticatedUserOperation
    {
        return new ListNotificationsForAuthenticatedUserOperation($all, $participating, $since, $before, $per_page, $page);
    }

    function put(): MarkNotificationsAsReadOperation
    {
        return new MarkNotificationsAsReadOperation();
    }
}
