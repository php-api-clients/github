<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists;

final class Public_
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublic
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublic($since, $per_page, $page);
    }
}
