<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Path;

final class Users
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Users\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Users\ListOperation($since, $per_page);
    }
}
