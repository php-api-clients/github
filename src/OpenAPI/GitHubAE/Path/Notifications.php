<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Notifications
{
    function get(bool $all = false, bool $participating = false, $since, $before, int $page = 1, int $per_page = 50) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListNotificationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListNotificationsForAuthenticatedUser($all, $participating, $since, $before, $page, $per_page);
    }
    function put() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkNotificationsAsRead
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\MarkNotificationsAsRead();
    }
}
