<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path;

final class Users
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users\ListOperation($since, $per_page);
    }
}