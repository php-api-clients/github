<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Organizations
{
    function get($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOperation($since, $per_page);
    }
}
