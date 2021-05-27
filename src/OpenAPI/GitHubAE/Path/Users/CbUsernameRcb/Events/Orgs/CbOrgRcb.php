<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb\Events\Orgs;

final class CbOrgRcb
{
    function get($username, $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListOrgEventsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListOrgEventsForAuthenticatedUserOperation($username, $org, $per_page, $page);
    }
}
