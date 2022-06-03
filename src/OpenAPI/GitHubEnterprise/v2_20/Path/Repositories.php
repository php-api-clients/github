<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path;

final class Repositories
{
    function get($since, string $visibility = 'public') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\ListPublic
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\ListPublic($since, $visibility);
    }
}
