<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

final class Notifications
{
    function get(bool $all = false, bool $participating = false, $since, $before, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\ListNotificationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\ListNotificationsForAuthenticatedUser($all, $participating, $since, $before, $per_page, $page);
    }
    function put() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\MarkNotificationsAsRead
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\MarkNotificationsAsRead();
    }
}
