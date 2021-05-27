<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists;

final class Public
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublicOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\ListPublicOperation($since, $per_page, $page);
    }
}
