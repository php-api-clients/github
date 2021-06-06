<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Gists
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\List
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\List($since, $per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\Create();
    }
}
