<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Organizations
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\List
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\List($since, $per_page);
    }
}
