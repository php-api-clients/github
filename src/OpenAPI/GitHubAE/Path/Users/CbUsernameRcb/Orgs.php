<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

final class Orgs
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForUserOperation($username, $per_page, $page);
    }
}
