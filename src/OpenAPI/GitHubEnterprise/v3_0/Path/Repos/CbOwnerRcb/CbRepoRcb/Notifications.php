<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Notifications
{
    function get($owner, $repo, bool $all = false, bool $participating = false, $since, $before, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\ListRepoNotificationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\ListRepoNotificationsForAuthenticatedUser($owner, $repo, $all, $participating, $since, $before, $per_page, $page);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\MarkRepoNotificationsAsRead
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\MarkRepoNotificationsAsRead($owner, $repo);
    }
}
