<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path;

final class Users
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\List
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\List($since, $per_page);
    }
}
