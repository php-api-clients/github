<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Path;

final class Organizations
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Orgs\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.22\Operation\Orgs\ListOperation($since, $per_page);
    }
}
