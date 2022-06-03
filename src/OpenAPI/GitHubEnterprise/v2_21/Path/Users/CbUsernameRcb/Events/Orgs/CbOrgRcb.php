<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb\Events\Orgs;

final class CbOrgRcb
{
    function get($username, $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\ListOrgEventsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\ListOrgEventsForAuthenticatedUser($username, $org, $per_page, $page);
    }
}
