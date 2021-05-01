<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path;

final class Repositories
{
    function get($since) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListPublicOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListPublicOperation($since);
    }
}
