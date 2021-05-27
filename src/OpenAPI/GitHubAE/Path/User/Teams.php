<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class Teams
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListForAuthenticatedUserOperation($per_page, $page);
    }
}
