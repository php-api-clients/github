<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

final class Following
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListFollowedByAuthenticated($per_page, $page);
    }
}
