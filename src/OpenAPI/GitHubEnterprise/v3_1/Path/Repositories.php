<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

final class Repositories
{
    function get($since, string $visibility = 'public') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPublicOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPublicOperation($since, $visibility);
    }
}
