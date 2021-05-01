<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path;

final class Repositories
{
    function get($since, string $visibility = 'public') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Repos\ListPublicOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Repos\ListPublicOperation($since, $visibility);
    }
}
