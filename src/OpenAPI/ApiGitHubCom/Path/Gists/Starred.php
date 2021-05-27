<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists;

final class Starred
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListStarredOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListStarredOperation($since, $per_page, $page);
    }
}
