<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

final class Organizations
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\List
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\List($since, $per_page);
    }
}
