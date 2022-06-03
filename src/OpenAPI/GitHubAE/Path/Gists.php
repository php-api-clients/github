<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Gists
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\List
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\List($since, $per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\Create();
    }
}
