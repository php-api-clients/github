<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

final class Gists
{
    function get($since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\List
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\List($since, $per_page, $page);
    }
    function post() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Gists\Create();
    }
}
