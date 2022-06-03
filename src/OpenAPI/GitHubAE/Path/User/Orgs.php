<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class Orgs
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForAuthenticatedUser($per_page, $page);
    }
}
