<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path;

final class Repositories
{
    function get($since, string $visibility = 'public') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ListPublic
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ListPublic($since, $visibility);
    }
}
