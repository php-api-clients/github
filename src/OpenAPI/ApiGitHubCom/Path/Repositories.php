<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Repositories
{
    function get($since) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublic
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublic($since);
    }
}
