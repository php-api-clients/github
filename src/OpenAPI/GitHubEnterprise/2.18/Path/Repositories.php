<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path;

final class Repositories
{
    function get($since, string $visibility = 'public') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Repos\ListPublicOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Repos\ListPublicOperation($since, $visibility);
    }
}
