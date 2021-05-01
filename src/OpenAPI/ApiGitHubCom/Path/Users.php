<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Users
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListOperation($since, $per_page);
    }
}
