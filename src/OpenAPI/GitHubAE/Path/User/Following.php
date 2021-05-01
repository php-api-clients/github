<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\User;

final class Following
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Users\ListFollowedByAuthenticatedOperation($per_page, $page);
    }
}
